<?php

use App\Http\Controllers\Admin\{CourseController,
    HomeController,
    PortfolioController,
    CategoryController,
    PostController};
use App\Http\Controllers\Blog\SiteController;
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

// FRONT SIDE ROUTES
Route::get('/', [SiteController::class, 'index']);
Route::get('/about', [SiteController::class, 'about']);
Route::get('/portfolio', [SiteController::class, 'portfolio']);
Route::get('/portfolio/{id}', [SiteController::class, 'project'])->where(['id' => '[0-9]+']);
Route::get('/blog', [SiteController::class, 'blog']);
Route::get('/blog/{id}', [SiteController::class, 'article'])->where(['id' => '[0-9]+']);
Route::get('/course', [SiteController::class, 'course']);

// AUTH ROUTES
Auth::routes();

// BACK SIDE ROUTES
Route::middleware(['role:admin'])->prefix('admin')->group(static function () {
    Route::get('/', [HomeController::class, 'index']);
    Route::resource('post', PostController::class);
    Route::resource('portfolio', PortfolioController::class);
    Route::resource('category', CategoryController::class);
    Route::resource('course', CourseController::class);
});
