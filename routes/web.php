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
    $data = [
        'title' => 'pagina iniziale'
    ];
    return view('welcome', $data);
});

Route::get('/pg2', function () {
    $data = [
        'title' => 'pagina 2'
    ];
    return view('pg2', $data);
});

Route::get('/pg3', function () {
    $data = [
        'title' => 'pagina 3'
    ];
    return view('pg3', $data);
});