<?php


use App\Http\Controllers\HomeController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\MobilController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MotorController;
use App\Http\Controllers\Welcome2Controller;


route::resource('/', HomeController::class);
route::resource('/--', WelcomeController::class);
route::resource('/-', Welcome2Controller::class);
route::resource('about', AboutController::class);
route::resource('contact', ContactController::class);
route::resource('admin/form', FormController::class);
route::resource('motor', MotorController::class);
route::resource('mobil', MobilController::class);

