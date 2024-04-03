<?php

use App\Http\Controllers\NoteController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('welcome');

Route::resource('note', NoteController::class);
// Route::prefix('note')->name('note.')->controller(NoteController::class)->group(function(){
// });