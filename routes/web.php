<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
   \Illuminate\Log\log('info');
});


Route::get('/listprofessionnels', [\App\Http\Controllers\ListProfessionnels::class, 'index']);
//Route::get('/listprofessionnels', [\App\Http\Controllers\ListProfessionnels::class, 'index']);
