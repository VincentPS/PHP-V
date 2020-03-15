<?php

if (file_exists('./.env')) {
    $_ENV = parse_ini_file('./.env');
}

// Require vendor
require __DIR__ . '/vendor/autoload.php';

// Controllers
include("backend/controllers/MainController.php");

// Routes
include("backend/routes.php");