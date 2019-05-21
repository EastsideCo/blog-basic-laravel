<?php

return [

    // Credentials for public apps.
    // Populated from the environment.
    'public_credentials' => [
        'api_key' => env('SHOPIFY_API_KEY'),
        'api_secret' => env('SHOPIFY_API_SECRET')
    ],

    // Additional credentials for private apps.
    'private_credentials' => [
        'shop_domain' => env('SHOPIFY_SHOP_DOMAIN'),
        'access_token' => env('SHOPIFY_ACCESS_TOKEN')
    ],

    'scopes' => [
        'read_script_tags', 'write_script_tags',
    ],

    'webhooks' => [
    ],

    'script_tags' => [
    ]
];
