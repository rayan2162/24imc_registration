<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaperRegistrationController;

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

Route::get('/list', [PaperRegistrationController::class, 'list'])
    ->name('paper-registrations.list');


Auth::routes();

Route::middleware(['auth', 'approved'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

Route::get('/paper-registrations', [PaperRegistrationController::class, 'index'])
    ->name('paper-registrations.index')
    ->middleware('auth');

Route::get('/paper-registrations/create', [PaperRegistrationController::class, 'create'])
    ->name('paper-registrations.create');

Route::post('/paper-registrations', [PaperRegistrationController::class, 'store'])
    ->name('paper-registrations.store');

Route::get('/paper-registrations/{paper_registration}', [PaperRegistrationController::class, 'show'])
    ->name('paper-registrations.show')
    ->middleware('auth'); // optional

// Optional admin approve toggle - secure this route with admin middleware
Route::patch('/paper-registrations/{paper_registration}/approve', [PaperRegistrationController::class, 'approve'])
    ->name('paper-registrations.approve')
    ->middleware('auth'); // replace with 'auth','is_admin'

