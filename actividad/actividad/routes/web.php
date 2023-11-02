<?php

use Illuminate\Support\Facades\Route;
use App\Models\brand;

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
    return view('products.store');
});

Route::get('/', function () {
    return view('category.store');
});

Route::get('/', function () {
    return view('brands.brands+');
});
Route::post('/brand/create', [BrandContoller::class, 'create']) ->name('brand.create');
Route::post('/brand/store', [BrandContoller::class, 'store']) ->name('brand.store');
Route::get('brand/edit/{brand}', [BrandController::class, 'edit'])->name('brand.edit');
Route::get('brand/show/{brand}', [BrandController::class, 'show'])->name('brand.show');
Route::delete('brand/destroy/{brand}', [BrandController::class, 'destroy'])->name('brand.destroy');
