<?php
function myAutoloader($className) {
    $filename = __DIR__ . '/classes/' . $className . '.php';
    if (file_exists($filename)) {
        require $filename;
    }
}

// Register the autoloader function
spl_autoload_register('myAutoloader');