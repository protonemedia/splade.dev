<?php

return [

    'title_prefix' => '',

    'title_separator' => '|',

    'title_suffix' => 'Laravel Splade',

    'defaults' => [

        'title' => 'Laravel Splade',

        'description' => 'Splade provides a super easy way to build Single Page Applications (SPA) using standard Laravel Blade templates, enhanced with renderless Vue 3 components. In essence, you can write your app using the simplicity of Blade, and besides that magic SPA-feeling, you can sparkle it to make it interactive. All without ever leaving Blade.',

        'keywords' => ['laravel spa', 'laravel splade', 'laravel single page application', 'laravel blade', 'blade vue', 'blade javascript', 'blade components'],

    ],

    'auto_canonical_link' => true,

    'open_graph' => [
        'auto_fill' => true,

        'type' => 'WebPage',

        'site_name' => 'Laravel Splade',

        'title' => null,

        'url' => null,

        'image' => 'https://splade.dev/header.jpg',
    ],

    'twitter' => [
        'auto_fill' => true,

        'card' => 'summary_large_image', // 'summary_large_image',

        'site' => '@pascalbaljet', // '@username',

        'title' => null,

        'description' => null,

        'image' => 'https://splade.dev/header.jpg',
    ],

];
