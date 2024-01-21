<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function checkout() 
    {
        $requestParams = array(
            'command' => 'AUTHORIZATION',
            'access_code' => 'zx0IPmPy5jp1vAz8Kpg7',
            'merchant_identifier' => 'CycHZxVj',
            'merchant_reference' => 'XYZ9239-yu898',
            'amount' => '10000',
            'currency' => 'AED',
            'language' => 'en',
            'customer_email' => 'test@payfort.com',
            'signature' => '7cad05f0212ed933c9a5d5dffa31661acf2c827a',
            'order_description' => 'iPhone 6-S'
            );
            
    }
}
