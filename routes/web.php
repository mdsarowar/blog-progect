<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Front\PageController;

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

Route::get('/',[PageController::class,'home'])->name('home');
Route::get('/blog_page',[PageController::class,'blogPage'])->name('blog_page');
Route::get('/blog_view/{id}',[PageController::class,'blogView'])->name('blog_view');
Route::get('/all_service',[PageController::class,'allService'])->name('all_service');
Route::get('/service_details/{id}',[PageController::class,'serviceDetails'])->name('service_details');
Route::get('/contact_view',[PageController::class,'contactView'])->name('contact_view');
Route::post('/message_submit',[PageController::class,'messageSubmit'])->name('message_submit');


//Route::get('/', function () {
//    return view('welcome');
//});
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
    Route::get('/manage_service', [ServiceController::class,'manageService'])->name('manage_service');
    Route::get('/service_status/{id}', [ServiceController::class,'serviceStatus'])->name('service_status');
    Route::get('/edit_service/{id}', [ServiceController::class,'editService'])->name('edit_service');
    Route::get('/delete_service/{id}', [ServiceController::class,'deleteService'])->name('delete_service');
    Route::post('/update_service', [ServiceController::class,'updateService'])->name('update_service');


});
