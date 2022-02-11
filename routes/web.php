<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    // Comics 
    $comics_array = config('comics');

    // Pre Footer Items 
    $pre_footer_items = [
        [
            'img_src' => 'comics-digital-comics.png',
            'text' => 'digital comics'
        ],
        [
            'img_src' => 'comics-merchandise.png',
            'text' => 'dc merchandise'
        ],
        [
            'img_src' => 'comics-subscriptions.png',
            'text' => 'subscription'
        ],
        [
            'img_src' => 'comics-shop-locator.png',
            'text' => 'comic shop locator'
        ],
        [
            'img_src' => 'dc-power-visa.svg',
            'text' => 'dc power visa'
        ],
    ];

    $data = [
        'comics' => $comics_array,
        'pre_footer_items' => $pre_footer_items
    ];
    
    return view('home', $data);
})->name('home');

Route::get('/product-details/{id}', function ($id) {

    $comics_array = config('comics');
    $comic_to_show = false;

    foreach ($comics_array as $comic) {
        if($comic['id'] == $id) {
            $comic_to_show = $comic;
        }
    }

    if(!$comic_to_show) {
        abort('404');
    }

    $data = [
        'comic_info' => $comic_to_show
    ];

    return view('product-details', $data);
})->name('product');