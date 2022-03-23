<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\ServiceController;

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
    return view('welcome');
});
Route::group(['middleware'=>['auth:sanctum', 'verified']],function (){

    Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');
    Route::get('/add_category', [CategoryController::class,'addCategory'])->name('add_category');
    Route::post('/new_category', [CategoryController::class,'newCategory'])->name('new_category');
    Route::get('/manage_category', [CategoryController::class,'manageCategory'])->name('manage_category');
    Route::get('/status_change/{id}', [CategoryController::class,'statusChange'])->name('status_change');
    Route::get('/delete_category/{id}', [CategoryController::class,'deleteCategory'])->name('delete_category');
    Route::get('/edit_category/{id}', [CategoryController::class,'editCategory'])->name('edit_category');
    Route::post('/update_category', [CategoryController::class,'updateCategory'])->name('update_category');


    Route::get('/add_blog', [BlogController::class,'addBlog'])->name('add_blog');
    Route::post('/new_blog', [BlogController::class,'newBlog'])->name('new_blog');
    Route::get('/manage_blog', [BlogController::class,'manageBlog'])->name('manage_blog');
    Route::get('/blog_status/{id}', [BlogController::class,'blogStatus'])->name('blog_status');
    Route::get('/edit_blog/{id}', [BlogController::class,'editBlog'])->name('edit_blog');
    Route::get('/delete_blog/{id}', [BlogController::class,'deleteBlog'])->name('delete_blog');
    Route::post('/update_blog', [BlogController::class,'updateBlog'])->name('update_blog');

    Route::get('/add_service', [ServiceController::class,'addService'])->name('add_service');
    Route::post('/new_service', [ServiceController::class,'newService'])->name('new_service');


});
