<?php

Kirby::plugin('preya/kirby-link-button-block', [
  'blueprints' => [
    'blocks/link-button' => __DIR__ . '/blueprints/blocks/link-button.yml'
  ],
  'snippets' => [
    'blocks/link-button' => __DIR__ . '/snippets/blocks/link-button.php'
  ]
]);