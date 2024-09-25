<?php

Kirby::plugin('shallowred/social-media', [

    'blueprints' => [
        'blocks/social-media-list' => __DIR__ . '/blueprints/blocks/social-media-list.yml',
    ],

    'snippets' => [
        'blocks/social-media-list' => __DIR__ . '/snippets/blocks/social-media-list.php',
        'social-media-link' => __DIR__ . '/snippets/social-media-link.php',
    ],
]);
