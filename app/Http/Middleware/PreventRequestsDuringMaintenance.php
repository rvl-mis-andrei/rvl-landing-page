<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance as Middleware;

class PreventRequestsDuringMaintenance extends Middleware
{
    /**
     * The URIs that should be reachable while maintenance mode is enabled.
     *
     * @var array<int, string>
     */
    protected $except = [
        'laravel0002/',
        'laravel0002/create',
        'laravel0002/home',
        'laravel0002/about-us',
        'laravel0002/services',
        // 'laravel0002/careers',
        'laravel0002/contact- us',
        'laravel0002/activities',
    ];


    // Route::get('/', 'page')->name('home');
    // Route::get('/about-us', 'page')->name('about_us');
    // Route::get('/products', 'page')->name('products');
    // Route::get('/services', 'page')->name('services');
    // Route::get('/careers', 'page')->name('careers');
    // Route::get('/contact-us', 'page')->name('contact_us');
    // Route::get('/activities', 'page')->name('activities');
}
