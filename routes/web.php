<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\PostController;
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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');


//Route::prefix('posts')->name('posts.')->controller(PostController::class)->group(function (){
//    Route::get('/', 'index')->name('index');
//    Route::get('/create', 'create')->name('create');
//    Route::post('/', 'store')->name('store');
//    Route::get('/{post}', 'show')->name('show');
//    Route::get('/{post}/edit', 'edit')->name('edit');
//    Route::put('/{post}', 'update')->name('update');
//    Route::delete('/{post}', 'destroy')->name('destroy');
//});


Route::resource('posts', PostController::class);

//Route::resource('articulos', PostController::class)
//    ->parameters([
//        'articulos' => 'posts'
//    ])
//    ->names('posts');

//Route::get('/about', AboutController::class);

//Route::get('/courses/information', fn() => "Information");
//
//Route::get('/courses/{id}', fn($id) => $id);

//Route::get('courses/{course}/{category?}',
//    function ($course, $category = null) {
//        return $category != null
//            ? "Welcome to the course: $course<br>Category: $category"
//            :
//            "Welcome to the course: $course";
//    });
