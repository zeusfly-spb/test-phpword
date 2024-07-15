<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DocumentController;

Route::post('/create-doc', [DocumentController::class, 'createDoc']);

Route::get('/', function () {
    return view('welcome');
});

