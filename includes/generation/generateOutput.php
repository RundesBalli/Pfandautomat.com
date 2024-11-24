<?php
/**
 * includes/generation/generateOutput.php
 * 
 * Generates the output with previous generated contents.
 */
$randomKey = array_rand($phrases);
$output = preg_replace(
  [
    '/{PHRASE}/im',
    '/{FOOTER}/im',
  ],
  [
    $phrases[$randomKey],
    $footer,
  ],
  $template
);
?>
