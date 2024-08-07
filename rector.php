<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Set\ValueObject\SetList;
use Rector\TypeDeclaration\Rector\ClassMethod\AddVoidReturnTypeWhereNoReturnRector;

// return RectorConfig::configure()
//     ->withPaths([
//         __DIR__ . '/assets',
//         __DIR__ . '/config',
//         __DIR__ . '/public',
//         __DIR__ . '/src',
//         __DIR__ . '/tests',
//     ])
//     // uncomment to reach your current PHP version
//     // ->withPhpSets()
//     ->withRules([
//         AddVoidReturnTypeWhereNoReturnRector::class,
//     ]);

return RectorConfig::configure()
    ->withPaths([
        __DIR__ . '/assets',
        __DIR__ . '/config',
        __DIR__ . '/public',
        __DIR__ . '/src',
        __DIR__ . '/tests',
        //__DIR__ . '/translations',
    ])
    // uncomment to reach your current PHP version
    // ->withPhpSets()
    ->withSets([
        SetList::PHP_82,
        SetList::TYPE_DECLARATION
    ])
    ->withPreparedSets(codeQuality: true, codingStyle: true, naming: true, earlyReturn: true, privatization: true)
    ->withImportNames(removeUnusedImports: true)
    ->withSkip([
        '*/Source/*',
        '*/Fixture/*',
    ]);
