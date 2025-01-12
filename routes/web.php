<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});




Route::get('/home', function () {
    return view('home');
})->name('homepage');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
   Route::get('/posts', [UserController::class, 'postsPage'])->name('posts');
  

});

Route::middleware(['auth','role:admin'])->group(function(){
    Route::get('/admin/dashboard',[AdminController::class,'dashboard'])->name('admin.dashboard');
    Route::get('/admin/users',[AdminController::class,'fetchData'])->name('admin.users');
    Route::get('/admin/posts',[AdminController::class,'posts'])->name('admin.posts');
    Route::get('/admin/create', [AdminController::class, 'create'])->name('admin.store');
    Route::post('/admin/create', [AdminController::class, 'store'])->name('admin.store');
    Route::patch('/admin/update/{id}', [AdminController::class, 'update'])->name('admin.update');

    Route::get('/admin/edit/{id}', [AdminController::class, 'edit'])->name('admin.edit');

});
Route::middleware(['auth','role:user'])->group(function(){
    Route::get('/user/dashboard',[UserController::class,'dashboard'])->name('user.dashboard');
  
});

require __DIR__.'/auth.php';
