<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;

Route::get('/produk', [ProdukController::class, 'index']);
Route::get('/', function () {
    return view('welcome');
});
