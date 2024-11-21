<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TicketController;


Route::prefix('v1')->group(function () {

    Route::resource('tickets', TicketController::class);
    
     
    Route::get('/test', function () {
        return view('welcome');
    });

});