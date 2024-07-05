<?php

use App\Http\Controllers\ShowcaseController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [ShowcaseController::class,'index'])->name('home');

Route::get('/projects/{id}/show', [ShowcaseController::class,'showProject'])->name('project-show');
