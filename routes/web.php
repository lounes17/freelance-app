<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\MissionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/jobs',[JobController::class,'index'])->name('jobs.index');
Route::get('/jobs/{id}',[JobController::class,'show'])->name('jobs.show');

Route::group(['middleware'=>['auth']],function(){

    Route::post('/submit/{job}',[MissionController::class,'store'])->name('mission.store');
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

});




require __DIR__.'/auth.php';
