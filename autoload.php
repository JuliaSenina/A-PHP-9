<?php

function autoload($classname): void {
  $file = __DIR__ . '/' . str_replace('\\', DIRECTORY_SEPARATOR, $classname) . '.php';
  if (file_exists($file)) {
    require_once($file);
  } else {
    echo 'error load file';
  }
}

spl_autoload_register('autoload');