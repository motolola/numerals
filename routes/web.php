<?php

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
Route::get('/welcome', function(){
    echo 'lol';
});
Route::get('/int-to-num/', function(){

    $convert = new \App\Http\NumeralRepository\IntToNumeral();
    echo $convert->generate(5667);
});
Route::get('num-to-int/', function(){
    $convert = new \App\Http\NumeralRepository\IntToNumeral();
    echo $convert->parse("MMMMMDCLXVII");
});
