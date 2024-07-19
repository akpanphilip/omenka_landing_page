<?php

use App\Http\Controllers\ContactUsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
// Route::get('/events', function () {
// return view('events');
// });

Route::get('/event', function () {
return view('event');
});

Route::post('/send-message', [ContactUsController::class, 'create']);