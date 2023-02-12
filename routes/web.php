<?php
use App\Http\Livewire\Admin\Task;
use App\Http\Livewire\Admin\User;
use App\Http\Livewire\Admin\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Admin\Dashboard;
use App\Http\livewire\Admin\Auth\Login;

Route::get('/admin',Login::class)->name('admin.login');
Route::prefix('/admin')->group(function(){
        Route::get('/dashboard', Dashboard::class)->name('admin.dashboard');
        Route::get('/category', Category::class)->name('admin.category');
        Route::get('/tasks', Task::class)->name('admin.tasks');
        Route::get('/users', User::class)->name('admin.users');
});


