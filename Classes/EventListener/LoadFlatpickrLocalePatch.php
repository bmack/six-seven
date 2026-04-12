<?php

declare(strict_types=1);

namespace Bmack\SixSeven\EventListener;

use TYPO3\CMS\Backend\Controller\Event\BeforeBackendPageRenderEvent;
use TYPO3\CMS\Core\Attribute\AsEventListener;

/**
 * Loads a JavaScript module that registers the custom locale "de-X-SIC"
 * as an alias for the German "de" locale in flatpickr.
 */
#[AsEventListener('six-seven/flatpickr-locale-patch')]
final readonly class LoadFlatpickrLocalePatch
{
    public function __invoke(BeforeBackendPageRenderEvent $event): void
    {
        $event->pageRenderer->loadJavaScriptModule('@bmack/six-seven/flatpickr-locale-patch.js');
    }
}
