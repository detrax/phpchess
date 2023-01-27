<?php

declare(strict_types=1);

use Rector\CodeQuality\Rector\Class_\InlineConstructorDefaultToPropertyRector;
use Rector\Config\RectorConfig;
use Rector\Set\ValueObject\LevelSetList;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->paths([
        __DIR__ . '/admin',
        __DIR__ . '/exec',
        __DIR__ . '/includes',
        __DIR__ . '/install',
        __DIR__ . '/javascriptchess',
        __DIR__ . '/mobile_chess',
        __DIR__ . '/pgnviewer',
        __DIR__ . '/skins',
    ]);

    // register a single rule
    $rectorConfig->rule(InlineConstructorDefaultToPropertyRector::class);

    // define sets of rules
        $rectorConfig->sets([
            LevelSetList::UP_TO_PHP_54

        ]);
};
