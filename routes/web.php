<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MangaController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [MangaController::class, 'index'])->name('index');
Route::get('/contact', function () {
    $title = 'Contact';
    return view('public.contact', compact('title'));
})->name('contact');

Route::prefix('auth')->middleware('guest')->group(function () {
    Route::get('/loginPage', [AuthController::class, 'loginPage'])->name('auth.loginPage');
    Route::post('/login', [AuthController::class, 'login'])->name('auth.login');
    Route::get('/registerPage', [AuthController::class, 'registerPage'])->name('auth.registerPage');
    Route::post('/register', [AuthController::class, 'register'])->name('auth.register');
});


Route::middleware('auth')->group(function () {
    Route::prefix('manga')->group(function () {
        Route::get('/create', [MangaController::class, 'create'])->name('manga.create');
        Route::get('/show/{id}', [MangaController::class, 'show'])->name('manga.show');
        Route::post('/store', [MangaController::class, 'store'])->name('manga.store');
        Route::delete('/destroy/{id}', [MangaController::class, 'destroy'])->name('manga.destroy');
        Route::put('/update/{id}', [MangaController::class, 'update'])->name('manga.update');
        Route::get('/edit/{id}', [MangaController::class, 'edit'])->name('manga.edit');
        Route::post('/change/{id}', [MangaController::class, 'enableManga'])->name('manga.change');
    });

    Route::prefix('admin')->group(function () {
        Route::get('/', [MangaController::class, 'indexAdmin'])->name('admin.index');
    });

    Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
