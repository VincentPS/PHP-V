<?php
// Import classes
// use...

// Get the current path and remove ending slashes
$path = rtrim($_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"], "/");

// Remove the website root from the url
$path = str_replace($_ENV["WEBSITE_ROOT"], "", $path);

// Load the correct template
switch ($path) {
    case "": // Index
        $_TEMPLATE = MainController::index();
        break;
}

include("public/views/includes/main.php");