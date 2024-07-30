<?php

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
//Auth::routes(['register' => false]);

Auth::routes();
Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/lunar-day/list', [\App\Http\Controllers\LunarDayController::class, 'index']);
    Route::get('/lunar-day/edit/{id}', [\App\Http\Controllers\LunarDayController::class, 'edit']);
    Route::post('/lunar-day/update/{id}', [\App\Http\Controllers\LunarDayController::class, 'update']);

    Route::get('/lunar-phase/list', [\App\Http\Controllers\LunarPhaseController::class, 'index']);
    Route::get('/lunar-phase/edit/{id}', [\App\Http\Controllers\LunarPhaseController::class, 'edit']);
    Route::post('/lunar-phase/update/{id}', [\App\Http\Controllers\LunarPhaseController::class, 'update']);

    Route::get('/lunar-zodiac/list', [\App\Http\Controllers\LunarZodiacController::class, 'index']);
    Route::get('/lunar-zodiac/edit/{id}', [\App\Http\Controllers\LunarZodiacController::class, 'edit']);
    Route::post('/lunar-zodiac/update/{id}', [\App\Http\Controllers\LunarZodiacController::class, 'update']);

    Route::get('/lunar-activity-field/list', [\App\Http\Controllers\LunarActivityFieldController::class, 'index']);
    Route::get('/lunar-activity-field/edit/{id}', [\App\Http\Controllers\LunarActivityFieldController::class, 'edit']);
    Route::post('/lunar-activity-field/update/{id}', [\App\Http\Controllers\LunarActivityFieldController::class, 'update']);

    Route::get('/lunar-day-interpretation/list', [\App\Http\Controllers\LunarDayInterpretationController::class, 'index']);
    Route::get('/lunar-day-interpretation/edit/{id}', [\App\Http\Controllers\LunarDayInterpretationController::class, 'edit']);
    Route::post('/lunar-day-interpretation/update/{id}', [\App\Http\Controllers\LunarDayInterpretationController::class, 'update']);

    Route::get('/author/list', [\App\Http\Controllers\AuthorController::class, 'index']);
    Route::get('/author/edit/{id}', [\App\Http\Controllers\AuthorController::class, 'edit']);
    Route::post('/author/update/{id}', [\App\Http\Controllers\AuthorController::class, 'update']);
});
