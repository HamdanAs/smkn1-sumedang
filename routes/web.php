<?php

use Illuminate\Support\Facades\Route;

// Panggil Controller Disini yah ...
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FamilyController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GalleryController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index']);

Route::get('/blogs', [BlogController::class, 'index']);
Route::get('/blog/{blog:slug}', [BlogController::class, 'show']);

Route::get('/profile', [ProfileController::class, 'index']);
Route::get('/profile/history', [ProfileController::class, 'history']);
Route::get('/profile/vision', [ProfileController::class, 'vision']);


Route::get('/families', [FamilyController::class, 'index']);

Route::get('/gallery', [GalleryController::class, 'index']);

Route::get('/jurusan', [JurusanController::class, 'index']);


Route::get('/admin', function () {
    return view('admin.dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
