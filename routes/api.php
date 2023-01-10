<?php

use App\Http\Controllers\TaskController;
use App\Models\Task;
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

Route::resource('tasks', TaskController::class);
Route::get('/tasks/search/{title}', [TaskController::class, 'search']);

//Route::group(['middleware' => ['auth:sanctum']], function () {
//    Route::get('/tasks/search/{title}', [TaskController::class, 'store']);
//});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
