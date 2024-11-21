<?php

use App\Http\Controllers\AudienceController;
use Illuminate\Support\Facades\Route;

Route::get('/',function(){
    return view('welcome');
});

Route::get('/audiences', [AudienceController::class, 'index']);


