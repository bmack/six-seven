<?php

declare(strict_types=1);

namespace Bmack\SixSeven\EventListener;

use TYPO3\CMS\Core\Attribute\AsEventListener;
use TYPO3\CMS\Core\Localization\Event\ModifyLanguagePacksEvent;

/**
 * Removes the "six_seven" extension from the list of extensions
 * considered for language pack updates, since it ships no translations.
 */
#[AsEventListener('six-seven/drop-language-pack')]
final readonly class DropLanguagePack
{
    public function __invoke(ModifyLanguagePacksEvent $event): void
    {
        $event->removeExtension('six_seven');
    }
}
