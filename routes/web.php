<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('home');
});
Route::get('/programacao', function () {
    return view('programacao');
});
Route::get('/galerias', function () {
    return view('galerias');
});
Route::get('/proximos-eventos', function () {
    return view('proximos-eventos');
});
Route::get('/eventos-passados', function () {
    return view('eventos-passados');
});
Route::get('/contatos', function () {
    return view('contatos');
});
Route::group(['prefix' => 'admin'], function () {
    Route::get('/', [HomeController::class,'index']);
    Route::get('/', [HomeController::class,'pessoas']);
    Route::get('/', [HomeController::class,'cadastros']);

});
