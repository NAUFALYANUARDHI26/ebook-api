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
    return view('welcome');
});


Route::get('cobaa', function () {
    return ('haii');
});

Route::get('coba1', function(){
    return ['petra', 'starry', 'mus'];
});

Route::get('coba2', function(){
    return[
        'Nama' => 'naufal yanuardhi',
        'Kelas' => 'XII RPL 5',
        'NIS' => 3103120160
    ];
});

Route::get('coba3', function(){
    return response()->json(
        [
            'Nama' => 'Naufal yanuardhi',
            'Kelas' => 'XII RPL 5',
            'NIS' => 3103120160
        ],201
    );
});