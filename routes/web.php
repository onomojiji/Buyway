<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\ProfileController;
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
    return view('home');
})->name("home");

Route::get('/comment-investir', function () {
    return view('comment-investir');
})->name('comment-investir');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::controller(Controller::class)->group(function (){
        Route::get('/historique', 'gettHistorique')->name('historique');
    });

    Route::controller(\App\Http\Controllers\DepotController::class)->group(function (){
        Route::get('/depot', 'create')->name('depot.create');
        Route::post('/depot', 'store')->name('depot.store');
        Route::get('/depot/verification', 'show')->name('depot.show');
    });

    Route::controller(\App\Http\Controllers\RetraitController::class)->group(function (){
        Route::get('/retrait', 'create')->name('retrait.create');
        Route::post('/retrait', 'store')->name('retrait.store');
    });

    Route::controller(\App\Http\Controllers\InvestissementController::class)->group(function (){
        Route::get('/investissement', 'create')->name('investissement.create');
        Route::post('/investissement', 'store')->name('investissement.store');
    });

});



require __DIR__.'/auth.php';
