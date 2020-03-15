<?php
// Require vendor
require __DIR__ . '/vendor/autoload.php';

// Imports
use Whoops\Handler\PrettyPageHandler;
use Whoops\Run;

// Register filp/whoops, a pretty exception handler
$whoops = new Run;
$whoops->pushHandler(new PrettyPageHandler);
$whoops->register();

// Load the env file
if (file_exists('./.env')) $_ENV = parse_ini_file('./.env');

// Make the $_TEMPLATE superglobal
global $_TEMPLATE;

// Controllers
include("backend/controllers/MainController.php");

// Routes
include("backend/routes.php");