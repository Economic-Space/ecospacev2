<?php

use App\Http\Controllers\DetailTutorsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewTutorsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home.landing');
});

Route::get('/soon', function () {
    return view('home.soon');}
)->name('soon');

/* View Tutor */
Route::get('/tutors', [ViewTutorsController::class, 'index'])->name('viewTutors');
Route::get('/tutors/filter', [ViewTutorsController::class, 'filterSubjects'])->name('filterTutor');
Route::get('/tutors/clear', [ViewTutorsController::class, 'clearFilters'])->name('clearFilters');
Route::get('/tutors/search', [ViewTutorsController::class, 'searchSubjects'])->name('searchTutor');
Route::get('/tutors/{id}', [DetailTutorsController::class, 'index'])->name('detailTutor');
