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
    /* mi collego all'array in config comics.php */
    $products = config('comics.products');
    /* dd($comics); controllo l'array in arrivo <3 */
    /*lo ritorno col compact  */
    return view('home', compact('products'));
})->name('home');

Route::get('/comics', function () {
    /* mi collego all'array in config comics.php */
    $products = config('comics.products');
    /* dd($comics); controllo l'array in arrivo <3 */
    /*lo ritorno col compact  */
    return view('comics', compact('products'));
})->name('comics');