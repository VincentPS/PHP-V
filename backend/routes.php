<?php
// Import classes
// use ...

// Get the current path and remove ending slashes
$path = rtrim($_SERVER["REQUEST_URI"], "/");

// Load the correct template
switch ($path) {
    case "/": // Index
        $include_path = "public/index.php";
        $title = "[Website] - Index";
        break;
}

include("public/main.php");