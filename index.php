<?php

if (file_exists('./.env')) {
    $_ENV = parse_ini_file('./.env');
}

//if (!function_exists('env')) {
//    function env($key, $default = null)
//    {
//        $value = getenv($key);
//
//        if ($value === false) {
//            return $default;
//        }
//
//        return $value;
//    }
//}


// Require vendor
require __DIR__ . '/vendor/autoload.php';

// Controllers
include("backend/controllers/MainController.php");

// Routes
include("backend/routes.php");