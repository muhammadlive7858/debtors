<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DebtorsController;

use App\Http\Controllers\DebtorsController;
use App\Http\Controllers\DebtsController;


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

Route::post('/register', [AuthController::class,'register']);

Route::post('/login', [AuthController::class,'login']);

Route::post('/logout', [AuthController::class,'logout']);

Route::apiResources([
        "debtor"=>DebtorsController::class,
<<<<<<< HEAD
        "debt"=>DebtsController::class 
=======
>>>>>>> 1c4add2164afcd03dfe09da1665120ac59f8ba9f
    ]);


