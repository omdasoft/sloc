<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Front end Routes
|-------------------------------------------------------------------------
*/

Route::get('/',[App\Http\Controllers\Front\PagesController::class,'index'])->name('front.index');
Route::get('/about',[App\Http\Controllers\Front\PagesController::class,'about'])->name('front.about');
Route::get('/slco-goals',[App\Http\Controllers\Front\PagesController::class,'goals'])->name('front.goals');
Route::get('/accreditation-conditions',[App\Http\Controllers\Front\PagesController::class,'accreditationConditions'])->name('front.accreditation-conditions');
Route::get('/training-center-standards',[App\Http\Controllers\Front\PagesController::class,'trainingCenterStandards'])->name('front.training-center-standards');
Route::get('/exam-center-standards',[App\Http\Controllers\Front\PagesController::class,'examCenterStandards'])->name('front.exam-center-standards');
Route::get('/trainer-standards',[App\Http\Controllers\Front\PagesController::class,'trainerStandards'])->name('front.trainer-standards');
Route::get('/trainercnt-procedures',[App\Http\Controllers\Front\PagesController::class,'trainingcntProcedures'])->name('front.trainingcnt-procedures');
Route::get('/examcnt-procedures',[App\Http\Controllers\Front\PagesController::class,'examcntProcedures'])->name('front.examcnt-procedures');
Route::get('/trainers-procedures',[App\Http\Controllers\Front\PagesController::class,'trainersProcedures'])->name('front.trainers-procedures');
Route::get('/skillcard-procedures',[App\Http\Controllers\Front\PagesController::class,'skillcardProcedures'])->name('front.skillcard-procedures');
Route::get('/getexam-procedures',[App\Http\Controllers\Front\PagesController::class,'getexamProcedures'])->name('front.getexam-procedures');
Route::get('/faqs',[App\Http\Controllers\Front\PagesController::class,'faqs'])->name('front.faqs');
Route::get('/accredited-training-centers',[App\Http\Controllers\Front\PagesController::class,'accreditedTrainingCenters'])->name('front.accredited-training-centers');
Route::get('/accredited-exam-centers',[App\Http\Controllers\Front\PagesController::class,'accreditedExamCenters'])->name('front.accredited-exam-centers');
Route::get('/sitemap',[App\Http\Controllers\Front\PagesController::class,'sitemap'])->name('front.sitemap');
Route::get('/contact-us',[App\Http\Controllers\Front\PagesController::class,'contactUs'])->name('front.contact-us');
Route::get('/imageshow',[App\Http\Controllers\Front\PagesController::class,'imageshow'])->name('front.imageshow');
Route::get('/videos',[App\Http\Controllers\Front\PagesController::class,'videos'])->name('front.videos');
Route::get('/procedures',[App\Http\Controllers\Front\PagesController::class,'procedures'])->name('front.procedures');
Route::get('/fees',[App\Http\Controllers\Front\PagesController::class,'fees'])->name('front.fees');
Route::get('/news',[App\Http\Controllers\Front\PagesController::class,'news'])->name('front.news');
Route::get('/slco-centers',[App\Http\Controllers\Front\PagesController::class,'slcoCenters'])->name('front.slco-centers');
Route::get('/legislations',[App\Http\Controllers\Front\PagesController::class,'legislations'])->name('front.legislations');
Route::get('/curricula',[App\Http\Controllers\Front\PagesController::class,'curricula'])->name('front.curricula');
Route::get('/slco-students',[App\Http\Controllers\Front\PagesController::class,'slcoStudents'])->name('front.slco-students');
Route::get('/slco-business',[App\Http\Controllers\Front\PagesController::class,'slcoBusiness'])->name('front.slco-business');
Route::get('/slco-employees',[App\Http\Controllers\Front\PagesController::class,'slcoEmployees'])->name('front.slco-employees');
Route::get('/exam-system',[App\Http\Controllers\Front\PagesController::class,'examSystem'])->name('front.exam-system');
Route::get('/intro',[App\Http\Controllers\Front\PagesController::class,'intro'])->name('front.intro');
Route::get('/operating',[App\Http\Controllers\Front\PagesController::class,'operating'])->name('front.operating');


/*
|--------------------------------------------------------------------------
| Backend Routes
|-------------------------------------------------------------------------
*/
Route::group(['namespace' => 'Back','middleware' => 'auth'], function() {
    Route::get('/posts', 'PostController@index');
    Route::get('/dashboard', DashboardController::class)->name('back.dashboard');
});

Auth::routes();
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
