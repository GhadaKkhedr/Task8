<?php

use App\Http\Controllers\TestControllers;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
Route::get('test', [TestControllers::class, 'index']);
Route::get('test/store', [TestControllers::class, 'store']);
Route::get('test/showAll', [TestControllers::class, 'showAll']);
Route::get('test/show/{id}', [TestControllers::class, 'show']);
Route::get('test/update/{id}/{name}', [TestControllers::class, 'edit']);
Route::get('test/delete/{id}', [TestControllers::class, 'destroy']);
