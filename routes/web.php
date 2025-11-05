<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| These routes handle homepage, static pages, and student management.
|
*/

// 🏠 Home Page
Route::get('/', [StudentController::class, 'home'])->name('homepage');

// 📘 Static Pages
Route::view('/about', 'about')->name('about');
Route::view('/help', 'help')->name('help');
Route::view('/contact', 'contact')->name('contact');

// 🎓 Student Management
Route::get('/students', [StudentController::class, 'index'])->name('students.record');
Route::get('/students/create', [StudentController::class, 'create'])->name('students.create');
Route::post('/students', [StudentController::class, 'store'])->name('students.store');
Route::get('/students/{id}', [StudentController::class, 'show'])->name('students.show');

// 🔁 Redirect Route (for testing redirection)
Route::get('/go-home', [StudentController::class, 'redirectToHome'])->name('go.home');
