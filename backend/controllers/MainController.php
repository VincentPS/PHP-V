<?php

class MainController
{

    // MainController constructor
    public function __construct()
    {
        // Add constructor functionalities here
    }

    // Index logic
    public static function index()
    {
        return [
            "body" => "public/views/index.php",
            "title" => "[Website] - Index"
        ];
    }

}