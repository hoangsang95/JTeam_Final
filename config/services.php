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
    'facebook' => [
        'client_id' => '190061951498989',
        'client_secret' => '390c81a3cc01fc0cdb9cc3ab0637cf06',
        'redirect' => 'http://localhost/jteam_beta/public/auth/facebook/callback',
    ],
    'google' => [
        'client_id' => '1021022056338-om329k2ogjnsun2j8gmpvi6csklhbrjo.apps.googleusercontent.com',
        'client_secret' => 'Xw7xaGxX__R6qznF-gjzAUrE',
        'redirect' => 'http://localhost/jteam_beta/public/auth/google/callback',
    ],
	'nexmo' => [
        'key' => env('NEXMO_KEY'),
        'secret' => env('NEXMO_SECRET'),
        'sms_from' => '15556666666',
    ],
];
