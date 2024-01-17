<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KidController;
use App\Http\Controllers\TestimonyController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\ContactController;
use App\Models\Subject;
use Mockery\Matcher\Subset;

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
    return view('welcome');
});

Route::get('kider',[KidController::class, 'index'])->middleware('verified')->name('index');

Route::get('page',[KidController::class, 'create']);

Route::get('about',[KidController::class, 'about'])->name('about');

Route::get('classes',[KidController::class, 'classes'])->name('classes');

Route::get('contact',[KidController::class, 'contact'])->name('contact');

Route::get('testimonial',[KidController::class, 'testimonial'])->name('testimonial');

Route::get('facilities',[KidController::class, 'facilities'])->name('facilities');

Route::get('team',[KidController::class, 'team'])->name('team');

Route::get('action',[KidController::class, 'action'])->name('action');

Route::get('appointment',[KidController::class, 'appointment'])->name('appointment');

Route::fallback([KidController::class, '_404page']);

Auth::routes(['verify'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('testimonial',[TestimonyController::class, 'testi'])->name('testimonial');

Route::get('classes',[SubjectController::class, 'sub'])->name('classes');

Route::get('team',[TeacherController::class, 'teacher'])->name('team');

Route::post('submit', [AppointmentController::class, 'appointment'])->name('submit');

Route::post('contactus', [ContactController::class, 'contact'])->name('contactus');