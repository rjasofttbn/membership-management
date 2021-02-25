<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\welcomeController;
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



Route::get('/test2', function () {
    return view('testing');
});

Route::post('/test-post-store', function () {
    //return 'testing for';
    return request()->all();    
})->name('test-post');

Route::put('/test-post-update/{student_id}', function () {
    //return 'testing for';
    return request()->all();    
})->name('test-post-update');

Route::delete('/test-post-delete/{student_id}', function () {
    //return 'testing for';
   // return 'deleted'; 
    return redirect()->route('index');   
})->name('test-post-delete');

Route::get('/', [welcomeController::class, 'index'])->name('index');


Route::get('/posts', [PagesController::class, 'posts'])->name('posts');
// old

//Route::get('/posts-view', [PagesController::class, 'postsView'])->name('posts.view');
Route::get('/posts', [PagesController::class, 'posts'])->name('posts');
Route::get('/posts-view-single/{id}', [PagesController::class, 'show'])->name('posts.show');


//end


Route::get('/posts-view', [PostsController::class, 'index'])->name('posts.view');
Route::post('/posts/store', [PostsController::class, 'store'])->name('posts.store');