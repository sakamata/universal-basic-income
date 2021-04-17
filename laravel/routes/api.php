<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\SandboxController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Api\Point\SendController;

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


// ログイン
Route::post('login', [AuthController::class,'login']);

Route::get('sandbox', [SandboxController::class, 'get']);

Route::middleware(['auth:sanctum'])->group(function () {
    // test ユーザー情報の取得
    Route::get('user', function (Request $request) {
        return $request->user();
    });
    // ポイント付与
    Route::prefix('point')->group(function () {
        Route::post('/send/{unique_id}', [SendController::class, 'send'])
            ->where('unique_id', '[0-9A-Za-z]+');
    });
});
