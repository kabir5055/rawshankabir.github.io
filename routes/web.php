<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RKController;
use App\Http\Controllers\PortfolioAdminController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\MyWorkController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\TeamController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {return view('welcome');});
Route::get('/',[RKController::class,'index'])->name('portfolio');
Route::post('/message',[RKController::class,'sendMessage'])->name('message');
Route::post('/delete-message',[RKController::class,'deleteMessage'])->name('delete.message');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
//    Route::get('/dashboard', function () {return view('dashboard');})->name('dashboard');
    Route::get('/dashboard',[PortfolioAdminController::class,'index'])->name('dashboard');

    Route::get('/about',[AboutController::class,'about'])->name('about');
    Route::post('/add-about',[AboutController::class,'saveAbout'])->name('add.about');
    Route::get('/edit-about/{id}',[AboutController::class,'editAbout'])->name('edit.about');
    Route::post('/update-about',[AboutController::class,'updateAbout'])->name('update.about');
    Route::get('/about-status/{id}',[AboutController::class,'statusAbout'])->name('about.status');
    Route::post('/delete-about',[AboutController::class,'deleteAbout'])->name('delete.about');

    Route::get('/services',[ServicesController::class,'services'])->name('services');
    Route::post('/add-services',[ServicesController::class,'saveServices'])->name('add.services');
    Route::get('/edit-services/{id}',[ServicesController::class,'editServices'])->name('edit.services');
    Route::post('/update-services',[ServicesController::class,'updateServices'])->name('update.services');
    Route::get('/status/{id}',[ServicesController::class,'status'])->name('status');
    Route::post('/delete-services',[ServicesController::class,'deleteServices'])->name('delete.services');

    Route::get('/my_work',[MyWorkController::class,'myWork'])->name('my_work');
    Route::post('/add-my_work',[MyWorkController::class,'saveMyWork'])->name('add.my_work');
    Route::get('/my_work-status/{id}',[MyWorkController::class,'status'])->name('my_work.status');

    Route::get('/testimonial',[TestimonialController::class,'testimonial'])->name('testimonial');
    Route::post('/add-testimonial',[TestimonialController::class,'saveTestimonial'])->name('add.testimonial');
    Route::get('/edit-testimonial/{id}',[TestimonialController::class,'editTestimonial'])->name('edit.testimonial');
    Route::post('/update-testimonial',[TestimonialController::class,'updateTestimonial'])->name('update.testimonial');
    Route::get('/testimonial-status/{id}',[TestimonialController::class,'statusTestimonial'])->name('testimonial.status');
    Route::post('/delete-testimonial',[TestimonialController::class,'deleteTestimonial'])->name('delete.testimonial');

    Route::get('/team',[TeamController::class,'team'])->name('team');
    Route::post('/add-team',[TeamController::class,'saveTeam'])->name('add.team');
    Route::get('/manage-team',[TeamController::class,'manageTeam'])->name('manage.team');
    Route::get('/edit-team/{id}',[TeamController::class,'editTeam'])->name('edit.team');
    Route::post('/update-team',[TeamController::class,'updateTeam'])->name('update.team');
    Route::get('/team-status/{id}',[TeamController::class,'statusTeam'])->name('status.team');
    Route::post('/delete-team',[TeamController::class,'deleteTeam'])->name('delete.team');
});
