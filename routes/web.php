<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/tentang', [HomeController::class, 'about'])->name('about');
Route::get('/visi-misi', [HomeController::class, 'visionMission'])->name('vision-mission');
Route::get('/program', [HomeController::class, 'programs'])->name('programs');
Route::get('/legalitas', [HomeController::class, 'legal'])->name('legal');
Route::get('/kontak', [HomeController::class, 'contact'])->name('contact');
