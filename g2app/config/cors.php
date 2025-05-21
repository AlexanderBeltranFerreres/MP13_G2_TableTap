<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Cross-Origin Resource Sharing (CORS) Configuration
    |--------------------------------------------------------------------------
    |
    | Aquí pots configurar els paràmetres de CORS per a la teva aplicació.
    |
    */

    'paths' => [
        'api/*',
        'login',
        'logout',
        'register',
        'sanctum/csrf-cookie',
    ],

    'allowed_methods' => ['*'],

    'allowed_origins' => [
        'https://mp13-g2-tabletap.onrender.com',
    ],

    'allowed_origins_patterns' => [],

    'allowed_headers' => ['*'],

    'exposed_headers' => [],

    'max_age' => 0,

    'supports_credentials' => true,

];
