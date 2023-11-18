<?php

use App\Http\Controllers\AgentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FournisseurController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\VenteController;

Route::get('/', function () {
    return view('welcome');
});
 
Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');
  
    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');
  
    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});
  
Route::middleware('auth')->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
 
    Route::controller(ProductController::class)->prefix('products')->group(function () {
        Route::get('', 'index')->name('products');
        Route::get('create', 'create')->name('products.create');
        Route::post('store', 'store')->name('products.store');
        Route::get('show/{id}', 'show')->name('products.show');
        Route::get('edit/{id}', 'edit')->name('products.edit');
        Route::put('edit/{id}', 'update')->name('products.update');
        Route::delete('destroy/{id}', 'destroy')->name('products.destroy');
    });

    Route::controller(FournisseurController::class)->prefix('fournisseurs')->group(function () {
        Route::get('', 'index')->name('fournisseurs');
        Route::get('create', 'create')->name('fournisseurs.create');
        Route::post('store', 'store')->name('fournisseurs.store');
        Route::get('show/{id}', 'show')->name('fournisseurs.show');
        Route::get('edit/{id}', 'edit')->name('fournisseurs.edit');
        Route::put('edit/{id}', 'update')->name('fournisseurs.update');
        Route::delete('destroy/{id}', 'destroy')->name('fournisseurs.destroy');
    });

    Route::controller(AgentController::class)->prefix('agents')->group(function () {
        Route::get('', 'index')->name('agents');
        Route::get('create', 'create')->name('agents.create');
        Route::post('store', 'store')->name('agents.store');
        Route::get('show/{id}', 'show')->name('agents.show');
        Route::get('edit/{id}', 'edit')->name('agents.edit');
        Route::put('edit/{id}', 'update')->name('agents.update');
        Route::delete('destroy/{id}', 'destroy')->name('agents.destroy');
    });

     Route::controller(VenteController::class)->prefix('ventes')->group(function () {
        Route::get('', 'index')->name('ventes');
        Route::get('create', 'create')->name('ventes.create');
        Route::post('store', 'store')->name('ventes.store');
        Route::get('show/{id}', 'show')->name('ventes.show');
        Route::get('edit/{id}', 'edit')->name('ventes.edit');
        Route::put('edit/{id}', 'update')->name('ventes.update');
        Route::delete('destroy/{id}', 'destroy')->name('ventes.destroy');
    });

    Route::controller(SearchController::class)->prefix('search')->group(function(){
        Route::get('/search', 'SearchController@search')->name('search');
    });
    

 
 
    Route::get('/profile', [App\Http\Controllers\AuthController::class, 'profile'])->name('profile');
});