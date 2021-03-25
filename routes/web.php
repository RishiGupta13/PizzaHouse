<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PizzaController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/pizzas', [PizzaController::class, 'index'])->name('pizzas.index')->middleware('auth');  // get data from a database
Route::get('orders/pizzas/create', [PizzaController::class, 'create'])->name('pizzas.create');  // get data from a database
Route::post('/pizzas',[PizzaController::class,'store'])->name('pizzas.store');
Route::get('/pizzas/{id}', [PizzaController::class, 'show'])->name('pizzas.show')->middleware('auth'); 
Route::delete('/pizzas/{id}',[PizzaController::class,'destroy'])->name('pizzas.destroy')->middleware('auth');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
