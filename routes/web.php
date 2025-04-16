<?php

use App\Http\Controllers\PidController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TrustController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SearchTrustController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get(
        '/search_trusts',
        [SearchTrustController::class, 'showTrustPage']
    )->name('search_trusts');

    Route::get('/addtrust', function () {
        return view('addtrust');
    })->name('addtrust');


    Route::get('/searchpid', [PidController::class, 'ShowPidData'])->name('searchpid');

    Route::post('/addtrust', [TrustController::class, 'Trust']);
    Route::post('/filterresults', [TrustController::class, 'filterResults']);
    Route::get('/edittrust/{id}', [TrustController::class, 'editTrust'])->name('edittrust');
    Route::patch('/edittrust/{id}', [TrustController::class, 'updateTrust']);
    Route::delete('/trust/{id}', [TrustController::class, 'deleteTrust'])->name('deleteTrust');


    // Route::resource('trusts', TrustController::class)->middleware('auth');


    Route::resource('posts', PostController::class)->middleware('auth');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
