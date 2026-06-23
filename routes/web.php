<?php

use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
//     $request->fulfill();

//     return response()->json([
//         'message' => 'Email verified successfully'
//     ]);
// })->middleware(['signed'])->name('verification.verify');

// Route::get('/email/verify', function () {
//     return response()->json([
//         'message' => 'Please verify your email.'
//     ]);
// })->name('verification.notice');

// Route::post('/email/verification-notification', function (Request $request) {
//     $request->user()->sendEmailVerificationNotification();

//     return response()->json([
//         'message' => 'Verification link sent.'
//     ]);
// })->middleware('auth')->name('verification.send');
