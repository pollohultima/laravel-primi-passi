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

    $title = 'This is the Title';
    $subtitle = 'This is the Subtitle';
    $paragraph = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur veniam quidem nulla voluptatibus sit, qui perspiciatis iusto repudiandae praesentium aliquam? Ipsam ea rem delectus alias quae autem perferendis obcaecati impedit. Nesciunt sunt laudantium totam, veniam a amet veritatis corrupti accusamus impedit, nobis ab beatae temporibus dignissimos! Id provident libero laboriosam.';

    return view('home', compact('title', 'subtitle', 'paragraph'));
})->name('home');

Route::get('about', function () {

    $about = 'This is the about us page';

    return view('about', compact('about'));
})->name('about');

Route::get('shop', function () {

    $shop = 'This is the shop page';

    return view('shop', compact('shop'));
})->name('shop');

Route::get('info', function () {

    $info = 'This is the info page';

    return view('info', compact('info'));
})->name('info');