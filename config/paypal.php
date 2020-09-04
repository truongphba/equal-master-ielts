<?php
return [
    'client_id' => 'AbGPr1cVRyRmYa_ye0h_yRYMVuFl4SRWekdCcWPP0DIUT_eATCfC1loOEvB1ilinVlDaVBkpQRQvQZod',
    'secret' => 'EM4J0cvYxXm1xrjmehm6jLAS_L1zxYSu3V2I-GbHjmhjUGYZVAofEYBmGC2XkTltD4Qws9t0AcLZ8WdK',
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
