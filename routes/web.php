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

    $name = "Matheus";
    $age = 24;

    $arr = [1,2,3,4,5];

    return view('welcome',
        [
            'name' => $name,
            'age' => $age,
            'profession' => 'programador',
            'arr' => $arr
        ]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/products', function () {
    return view('products');
});