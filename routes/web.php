<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipeController;

Route::get('/', [RecipeController::class, 'homePage'])->name('foodies.home');
Route::get('/addPage', [RecipeController::class, 'addPage'])->name('foodies.add.recipe');
