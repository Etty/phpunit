<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'twitter' => [
        'consumer_key' => 'MvJICJxgN1nt54WRmA0FSQ',
        'consumer_secret' => 'fjzgLtf7GFaqzXwy77vIH7PPVMstFgPgI0SdE2Jml4',
        'access_token' => '10181182-P5a5IOUYzrsOC5avk5w8MIUsoO2TRfheRVS6rKZZC',
        'access_token_secret' => 'KzOlsKmYnkRQB2UxjXZv0tZEnHJXPJI1E0NDS9v0',
    ],

];
