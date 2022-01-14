<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserTicketController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('ticket', TicketController::class);
Route::resource('users', UserController::class);

Route::get('/movies', [MovieController::class, 'index']);
Route::get('/users/{id}/tickets', [UserTicketController::class, 'index'])->name('users.ticket.index');

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
