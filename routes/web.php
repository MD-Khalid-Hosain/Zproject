<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AffiliateController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdvisorController;
use App\Http\Controllers\CareerAdvisorController;
use App\Http\Controllers\ConsultantController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\FrecuiterController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\JobseekerController;
use App\Http\Controllers\SuperadminController;
use App\Http\Controllers\TraininigController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\ShortlistController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\AppoinmentController;





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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('logout',[App\Http\Controllers\HomeController::class,'logout']);


Route::get('loginsuperadmin',[\App\Http\Controllers\HomeController::class,'superadmin'])->name('loginsuperadmin');
Route::get('loginadmin',[\App\Http\Controllers\HomeController::class,'admin'])->name('loginadmin');
Route::get('loginconsultant',[\App\Http\Controllers\HomeController::class,'consultant'])->name('loginconsultant');
Route::get('loginadvisor',[\App\Http\Controllers\HomeController::class,'advisor']);
Route::get('loginfrecurator',[\App\Http\Controllers\HomeController::class,'frecurator']);




/****=== Route for super admin sections start===****/
Route::resource('/superadmin', SuperadminController::class) ;
/****=== Route for super admin sections end===****/


/****=== Route for  admin sections start===****/
Route::resource('admin', AdminController::class)->middleware('admin') ;
/****=== Route for admin sections end===****/


/****=== Route for  Consultant sections start===****/
Route::resource('consultant', ConsultantController::class)->middleware('consultant');
/****=== Route for Consultant sections end===****/



/****=== Route for  Freelance Recruiters sections start===****/
Route::resource('frecuiter', FrecuiterController::class) ;
/****=== Route for Freelance Recruiters  sections end===****/


/****=== Route for  Advisor sections start===****/
Route::resource('advisor', AdvisorController::class );
/****=== Route for Advisor sections end===****/


/****=== Route for  Jobs sections start===****/
Route::resource('job', JobController::class );
/****=== Route for Jobs sections end===****/

/****=== Route for  Jobs seeker sections start===****/
Route::resource('jobSeeker', JobseekerController::class ) ;
/****=== Route for Jobs seeker sections end===****/

/****=== Route for  client sections start===****/
Route::resource('client', ClientController::class ) ;
/****=== Route for client sections end===****/

/****=== Route for  consultant sections start===****/
Route::resource('consultant', ConsultantController::class ) ;
Route::get('/consultmeeting',[App\Http\Controllers\ConsultantController::class,'meeting'])->name('consultmeeting');
Route::get('/schedule', [App\Http\Controllers\ConsultantController::class, 'setSchedule'])->name('schedule');
Route::post('/confirm/appoinment', [App\Http\Controllers\ConsultantController::class, 'confirmAppoinment'])->name('confirm.appoinment');
Route::get('/all/appoinment', [App\Http\Controllers\ConsultantController::class, 'allAppoinments'])->name('all.appoinment');
/****=== Route for consultant sections end===****/


/****=== Route for  Career Advice sections start===****/
Route::resource('connect', AppoinmentController::class);
/****=== Route for Career Advice sections end===****/


/****=== Route for  Career Advice sections start===****/
Route::resource('career', CareerAdvisorController::class ) ;
/****=== Route for Career Advice sections end===****/


/****=== Route for  Affiliate sections start===****/
Route::resource('affiliate', AffiliateController::class ) ;
/****=== Route for Affiliate sections end===****/

/****=== Route for  Training sections start===****/
Route::resource('training', TraininigController::class ) ;
Route::get('tranningview',[TraininigController::class,'traningview'])->name('tranningview');
/****=== Route for Training sections end===****/


/****=== Route for  Staff sections start===****/
Route::resource('staff', StaffController::class) ;
/****=== Route for Staff sections end===****/

/****=== Route for  shortlist sections start===****/
Route::resource('shortlist', ShortlistController::class) ;
/****=== Route for shortlist sections end===****/




/****=== Route for  Staff sections start===****/
Route::resource('request',RequestController::class) ;
Route::get('request/user/{id}',[App\Http\Controllers\RequestController::class, 'requestDetails'])->name('request.details');
/****=== Route for Staff sections end===****/





/****=== Route for  Front end sections start===****/

Route::get('joblist',[JobController::class,'joblist'])->name('joblist');

Route::get('singlejob/{id}',[JobController::class,'singlejob'])->name('singlejob');

Route::get('advisorlist',[AdvisorController::class,'advisorlist'])->name('advisorlist');
