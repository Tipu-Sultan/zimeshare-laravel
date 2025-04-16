<?php

use App\Models\Pid;
use App\Models\Trust;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/pid', function (Request $request) {
    return Pid::where('pid', 'LIKE', '%' . $request->query('query') . '%')->get();
});



Route::get('/allTrustSearch', function (Request $request) {
    $query = $request->query('query');
    
    return Trust::search($query)->get();
});



