<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    $footerLinks = config("db.footerLinks");
    $socials = config("db.socials");
    $comics = config("db.comics");

    // dd($footerLinks);
    // dd($socials);
    return view('home', compact('footerLinks', 'socials', 'comics'));
});
