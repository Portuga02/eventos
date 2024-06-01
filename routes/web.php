<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('site.home');
});
Route::get('/programacao', function () {
    return view('site.programacao');
});
Route::get('/galerias', function () {
    return view('site.galerias');
});
Route::get('/proximos-eventos', function () {
    return view('site.proximos-eventos');
});
Route::get('/eventos-passados', function () {
    return view('site.eventos-passados');
});
Route::get('/contatos', function () {
    return view('site.contatos');
});
