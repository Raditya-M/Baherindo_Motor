<?php

use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;

route::resource('/', WelcomeController::class);
route::resource('about', AboutController::class);
route::resource('contact', ContactController::class);
route::resource('admin/form', FormController::class);
