<?php

// Inspired by Kirby
// SEE https://github.com/getkirby-v2/toolkit/blob/master/lib/tpl.php
function snippet ($path, $data = array(), $return = false) {
  $file = __DIR__ . "/../snippets/$path.php";
  if (!file_exists($file)) throw new Exception("Snippet not found: $path.php");

  ob_start();

  global $_GLOBALS;
  extract((array) $data);
  require($file);

  $content = ob_get_contents();
  ob_end_clean();
  if($return) return $content;
  echo $content;
}
