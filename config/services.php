<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain'   => env('MAILGUN_DOMAIN'),
        'secret'   => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
        'scheme'   => 'https',
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key'    => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'update_docs_signature' => env('UPDATE_DOCS_SIGNATURE'),

    'fathom' => [
        'site_id' => env('FATHOM_SITE_ID'),
    ],

    'algolia' => [
        'app_id'     => env('ALGOLIA_APP_ID'),
        'api_key'    => env('ALGOLIA_API_KEY'),
        'index_name' => env('ALGOLIA_INDEX_NAME'),

        'crawler_id'      => env('ALGOLIA_CRAWLER_ID'),
        'crawler_user_id' => env('ALGOLIA_CRAWLER_USER_ID'),
        'crawler_api_key' => env('ALGOLIA_CRAWLER_API_KEY'),
    ],

];
