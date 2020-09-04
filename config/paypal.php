<?php
return [
    'client_id' => 'AeG678jEcjvMiPO7txKbS8ynYYbFa621TDoP2aF_Hh4tMVFajREnYUIbrPwOFw-1U_dijbxe3ADyg8jD',
    'secret' => 'EENTaOPxVvpq07b7fMyyFbsjJ9PTCf7zdK4US7iqlyO3_0DogUtekvsWWxfSCEGJN_Ar_lf6hILcjaud',
    'settings' => [
        'http.CURLOPT_CONNECTTIMEOUT' => 30,
        'mode' => 'sandbox', //live
        'log.LogEnabled' => true,
        'log.FileName' => storage_path().'logs\paypal.php',
        'log.LogLevel' => 'FINE'
    ],
//    'client_id' => env('PAYPAL_CLIENT_ID'),
//    'secret' => env('PAYPAL_SECRET'),
//    'settings' => [
//        'mode' => env('PAYPAL_MODE'),
//        'http.CURLOPT_CONNECTTIMEOUT' => 30,
//        'log.logEnabled' => true,
//        'log.FileName' => storage_path().'logs\paypal.php',
//        'log.LogLevel' => 'FINE'
//    ],
];
