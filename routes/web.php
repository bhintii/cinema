<?php

use App\Http\Controllers\MoviegoerController;
use Illuminate\Support\Facades\Route;

Route::get('/',function(){
    return view('welcome');
});

Route::get('/moviegoers', [MoviegoerController::class, 'index']);


