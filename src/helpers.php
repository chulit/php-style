<?php

namespace Diskominfotik;

use PhpCsFixer\Config;
use PhpCsFixer\Finder;

function styles(Finder $finder, array $rules = []): Config
{
  $rules = array_merge(require __DIR__ . DIRECTORY_SEPARATOR . 'rules.php', $rules);

  return Config::create()
    ->setFinder($finder)
    ->setRiskyAllowed(true)
    ->setRules($rules);
}
