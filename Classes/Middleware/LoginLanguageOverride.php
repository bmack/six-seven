<?php

declare(strict_types=1);

namespace Bmack\SixSeven\Middleware;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;
use TYPO3\CMS\Core\Http\ServerRequest;

/**
 * Overrides the login screen language to "de-X-SIC" (Jugendsprache) when:
 * 1. A `loginLanguage` query parameter or cookie is present, OR
 * 2. The browser's Accept-Language indicates a German preference (de-*)
 *
 * This allows the custom locale to be used on the login screen even though
 * no browser would ever send "de-X-SIC" via Accept-Language.
 * When set via query parameter, the choice is persisted in a cookie.
 */
final class LoginLanguageOverride implements MiddlewareInterface
{
    private const COOKIE_NAME = 'loginLanguage';
    private const COOKIE_LIFETIME = 365 * 24 * 60 * 60;
    private const TARGET_LOCALE = 'de-X-SIC';

    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
    {
        $queryLoginLanguage = $request->getQueryParams()[self::COOKIE_NAME] ?? null;
        $loginLanguage = $queryLoginLanguage
            ?? $request->getCookieParams()[self::COOKIE_NAME]
            ?? null;

        // If no explicit override, check if the browser prefers German
        if ($loginLanguage === null) {
            $acceptLanguage = $request->getServerParams()['HTTP_ACCEPT_LANGUAGE'] ?? '';
            if (preg_match('/\bde\b/i', $acceptLanguage)) {
                $loginLanguage = self::TARGET_LOCALE;
            }
        }

        if (is_string($loginLanguage) && preg_match('/^[a-zA-Z0-9\-]+$/', $loginLanguage)) {
            $serverParams = $request->getServerParams();
            $serverParams['HTTP_ACCEPT_LANGUAGE'] = $loginLanguage;

            $newRequest = new ServerRequest(
                $request->getUri(),
                $request->getMethod(),
                $request->getBody(),
                $request->getHeaders(),
                $serverParams,
            );
            $newRequest = $newRequest
                ->withQueryParams($request->getQueryParams())
                ->withCookieParams($request->getCookieParams())
                ->withParsedBody($request->getParsedBody());
            foreach ($request->getAttributes() as $name => $value) {
                $newRequest = $newRequest->withAttribute($name, $value);
            }
            $request = $newRequest;
        }

        $response = $handler->handle($request);

        if (is_string($queryLoginLanguage) && preg_match('/^[a-zA-Z0-9\-]+$/', $queryLoginLanguage)) {
            $response = $response->withAddedHeader(
                'Set-Cookie',
                sprintf(
                    '%s=%s; Path=/typo3; Max-Age=%d; SameSite=Lax',
                    self::COOKIE_NAME,
                    $queryLoginLanguage,
                    self::COOKIE_LIFETIME,
                ),
            );
        }

        return $response;
    }
}
