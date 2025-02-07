<?php

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




Route::get('/' , [\App\Http\Controllers\Front\PageController::class , 'frontIndex'])->name('shop');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::post('/' ,[\App\Livewire\Front\ShopCardComponent::class,'render'])->name('shopcard');

Route::middleware('admin')->group(function(){
    Route::get('/admin', function () {return view('backend.index');})->name('admin');
    Route::get('/locale/{locale}', function ($locale) {
        session()->put('locale', $locale);
        return redirect()->back();
    });

//Category routes;
    Route::resource('/admin/category' , \App\Http\Controllers\Backend\CategoryController::class);

//Brend routes;
    Route::resource('/admin/brend' , \App\Http\Controllers\Backend\BrendController::class);

//Product Route
    Route::resource('/admin/product' , \App\Http\Controllers\Backend\ProductController::class);

//Route Banner
    Route::controller(\App\Http\Controllers\Backend\BannerController::class)->group(function(){
        Route::get('/admin/banner','index')->name('banner');
        Route::post('/admin/banner' , 'store')->name('banner.store');
        Route::put('/admin/banner/{id}' , 'update')->name('banner.update');
    });

    // Route::get('/admin/warehouse/products' , \App\Livewire\Backend\Warehouse\WarehouseProduct::class)->name('warehouse');

});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
