<?php

return [
  # All the rules related to the PSR-2 standard are all bundled into the ruleset @PSR2.
  # This allows us to opt into the standard without having to specify each rule individually.
  '@PSR2' => true,

  # allows you to specify if you’d like short or long array syntax
  'array_syntax' => ['syntax' => 'short'],

  # Each element of an array must be indented exactly once.
  'array_indentation' => true,

  # All instances created with new keyword must be followed by braces.
  'new_with_braces' => true,
];
