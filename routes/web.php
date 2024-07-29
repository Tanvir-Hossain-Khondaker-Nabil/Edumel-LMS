<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontendController::class,'Home'])->name('home');
Route::get('/about', [FrontendController::class,'About'])->name('about');
Route::get('/contact', [FrontendController::class,'Contact'])->name('contact');
Route::get('/instructor', [FrontendController::class,'Instructor'])->name('instructor');
Route::get('/signup', [FrontendController::class,'Signup'])->name('signup');
Route::get('/login', [FrontendController::class,'Login'])->name('login');
Route::get('/blog', [FrontendController::class,'Blog'])->name('blog');
Route::get('/single_course', [FrontendController::class,'SingleCourse'])->name('single_course');
Route::get('/single_blog', [FrontendController::class,'SingleBlog'])->name('single_blog');
Route::get('/cart', [FrontendController::class,'Cart'])->name('cart');
Route::get('/checkout', [FrontendController::class,'Checkout'])->name('checkout');
