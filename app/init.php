<?php
spl_autoload_register(function($class) {
    $class = explode('\\', $class); // explode() : memisah sebuah string bedasarkan 'char'. gabisa pake \ satu karena disangkanya escape character. makanya pake \\

    $class = end($class); // ngambil elemen terakhir dari array
    if (file_exists(__DIR__ . '/core/' . $class . '.php')) {
        require_once __DIR__ . '/core/' . $class . '.php';
        require_once 'config/config.php';
    }
});

spl_autoload_register(function($class) {
    $class = explode('\\', $class); // explode() : memisah sebuah string bedasarkan 'char'. gabisa pake \ satu karena disangkanya escape character. makanya pake \\
    $class = end($class); // ngambil elemen terakhir dari array
    if (file_exists(__DIR__ . '/utility/' . $class . '.php')) {
        require_once __DIR__ . '/utility/' . $class . '.php';
    }
});