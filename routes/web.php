<?php

use App\Http\Controllers\HomeController;
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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', [HomeController::class, 'home'])->name('home');

// Route::get('/sitemap.xml',[\App\Http\Controllers\SiteMapController::class,'index'])->name('sitemap.xml');
// Route::get('/sitemap.xml/products',[\App\Http\Controllers\SiteMapController::class,'products'])->name('sitemap.xml.products');
// Route::get('/sitemap.xml/categories',[\App\Http\Controllers\SiteMapController::class,'categories'])->name('sitemap.xml.categories');
// Route::get('/sitemap.xml/tags',[\App\Http\Controllers\SiteMapController::class,'tags'])->name('sitemap.xml.tags');
// Route::get('/sitemap.xml/static',[\App\Http\Controllers\SiteMapController::class,'static'])->name('sitemap.xml.static');

Route::get('/storage-link', function () {
    symlink(storage_path('app/public'), $_SERVER['DOCUMENT_ROOT'] . '/storage');
});


