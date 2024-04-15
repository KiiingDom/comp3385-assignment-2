<?php

use App\Http\Controllers\FeedbackController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeedbackController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

<<<<<<< HEAD
// Create additional Routes below

Route::get('/feedback', [FeedbackController::class, 'create']);

Route::post('/feedback/send', [FeedbackController::class, 'send']);

Route::get('/feedback/success', [FeedbackController::class, 'success']);
=======
// Route for displaying the feedback form
Route::get('/feedback', [FeedbackController::class, 'create'])->name('feedback.create');

// Route for submitting the feedback
Route::post('/feedback/send', [FeedbackController::class, 'send'])->name('feedback.send');
>>>>>>> origin/main
