<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KidController;
use App\Http\Controllers\TestimonyController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::prefix('admin')->middleware('verified')->controller(TestimonyController::class)->group(function(){
    Route::get('addTestimonial', 'create')->name('addTestimonial');
    Route::post('testimonial', 'store')->name('testimony');
    Route::get('testimonialsList', 'index')->name('testimonialsList');
    Route::get('showTestimonial/{id}', 'show');
    Route::get('editTestimonial/{id}', 'edit');
    Route::put('updateTestimonial/{id}', 'update')->name('updateTestimonial');
    Route::get('deletetestimonial/{id}', 'destroy');
    Route::get('trashedTestimonial', 'trashed')->name('trashedTestimonial');
    Route::get('restoreTestimonial/{id}', 'restore');
    Route::get('finalDeletetestimonial/{id}', 'finalDelete');
});

Route::prefix('admin')->middleware('verified')->controller(SubjectController::class)->group(function(){
    Route::get('addSubject', 'create')->name('addSubject');
    Route::post('subject', 'store')->name('subject');
    Route::get('subjectsList', 'index')->name('subjectsList');
    Route::get('editSubject/{id}', 'edit');
    Route::put('updateSubject/{id}', 'update')->name('updatesubject');
    Route::get('deleteSubject/{id}', 'destroy');
    Route::get('trashedSubject', 'trashed')->name('trashedSubject');
    Route::get('restoreSubject/{id}', 'restore');
    Route::get('finalDeleteSubject/{id}', 'finalDelete');
});

Route::prefix('admin')->middleware('verified')->controller(TeacherController::class)->group(function(){
    Route::get('addTeacher', 'create')->name('addTeacher');
    Route::post('teacher', 'store')->name('teacher');
    Route::get('teachersList', 'index')->name('teachersList');
    Route::get('editTeacher/{id}', 'edit');
    Route::put('updateTeacher/{id}', 'update')->name('updateteacher');
    Route::get('deleteTeacher/{id}', 'destroy');
    Route::get('trashedTeacher', 'trashed')->name('trashedTeacher');
    Route::get('restoreTeacher/{id}', 'restore');
    Route::get('finalDeleteTeacher/{id}', 'finalDelete');
});

Route::prefix('admin')->middleware('verified')->controller(AppointmentController::class)->group(function(){
    Route::get('appointmentList', 'index')->name('appointmentList');
    Route::get('showAppointment/{id}', 'show');
    Route::get('deleteAppointment/{id}', 'destroy');
    Route::get('trashedAppointments', 'trashed')->name('trashedAppointment');
    Route::get('restoreAppointment/{id}', 'restore');
    Route::get('finalDeleteAppointment/{id}', 'finalDelete');
});

Route::prefix('admin')->middleware('verified')->controller(ContactController::class)->group(function(){
    Route::get('contactList', 'index')->name('contactList');
    Route::get('showContact/{id}', 'show');
    Route::get('deleteContact/{id}', 'destroy');
    Route::get('trashedContacts', 'trashed')->name('trashedContact');
    Route::get('restoreContact/{id}', 'restore');
    Route::get('finalDeleteContact/{id}', 'finalDelete');
});