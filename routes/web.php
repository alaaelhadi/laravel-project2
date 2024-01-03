<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KidController;
use App\Http\Controllers\TestimonyController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
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

Route::prefix('admin')->middleware('verified')->controller(TestimonyController::class)->group(function(){
    Route::get('addTestimonial', 'create');
    Route::post('testimonial', 'store')->name('testimony');
    Route::get('testimonialsList', 'index');
    Route::get('editTestimonial/{id}', 'edit');
    Route::put('updateTestimonial/{id}', 'update')->name('updateTestimonial');
    Route::get('deletetestimonial/{id}', 'destroy');
    Route::get('trashedTestimonial', 'trashed');
    Route::get('restoreTestimonial/{id}', 'restore');
    Route::get('finalDeletetestimonial/{id}', 'finalDelete');
});

Route::get('testimonial',[TestimonyController::class, 'testi'])->name('testimonial');

Route::prefix('admin')->middleware('verified')->controller(SubjectController::class)->group(function(){
    Route::get('addSubject', 'create');
    Route::post('subject', 'store')->name('subject');
    Route::get('subjectsList', 'index');
    Route::get('editSubject/{id}', 'edit');
    Route::put('updateSubject/{id}', 'update')->name('updatesubject');
    Route::get('deleteSubject/{id}', 'destroy');
    Route::get('trashedSubject', 'trashed');
    Route::get('restoreSubject/{id}', 'restore');
    Route::get('finalDeleteSubject/{id}', 'finalDelete');
});

Route::get('classes',[SubjectController::class, 'sub'])->name('classes');

Route::prefix('admin')->middleware('verified')->controller(TeacherController::class)->group(function(){
    Route::get('addTeacher', 'create');
    Route::post('teacher', 'store')->name('teacher');
    Route::get('teachersList', 'index');
    Route::get('editTeacher/{id}', 'edit');
    Route::put('updateTeacher/{id}', 'update')->name('updateteacher');
    Route::get('deleteTeacher/{id}', 'destroy');
    Route::get('trashedTeacher', 'trashed');
    Route::get('restoreTeacher/{id}', 'restore');
    Route::get('finalDeleteTeacher/{id}', 'finalDelete');
});

Route::get('team',[TeacherController::class, 'teacher'])->name('team');