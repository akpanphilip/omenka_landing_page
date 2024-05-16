<?php

use App\Http\Controllers\ContactUsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::post('/send-message', [ContactUsController::class, 'create']);
