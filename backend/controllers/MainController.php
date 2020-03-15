<?php

class MainController
{

    // Paypal API context
    public static $paypal_api_context;

    // HistoryController constructor
    public function __construct($paypal_api_context)
    {
        self::$paypal_api_context = $paypal_api_context;
    }

    // Get the transaction history for a user
    public static function getTransactionHistory()
    {

    }
}