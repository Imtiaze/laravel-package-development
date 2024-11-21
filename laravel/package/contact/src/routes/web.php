<?php

use Bitfumes\Contact\Http\Controllers\ContactController;
use Illuminate\Http\Request;

Route::get('contact', [ContactController::class, 'index'])->name('index');

Route::post('contact', [ContactController::class, 'send'])->name('contact');