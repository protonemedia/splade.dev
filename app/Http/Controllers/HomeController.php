<?php

namespace App\Http\Controllers;

use ProtoneMedia\Splade\Facades\SEO;

class HomeController
{
    public function __invoke()
    {
        SEO::title('Laravel Splade - Single Page Applications with Laravel Blade');

        return view('home');
    }
}
