<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();
//APIs
Route::post('/visitordetails', [App\Http\Controllers\API\TestimonyController::class, 'store'])->name('visitordetails');
Route::get('/',  [App\Http\Controllers\API\TestimonyController::class, 'welcome'])->name('/');
Route::get('/testimony',  [App\Http\Controllers\API\TestimonyController::class, 'index'])->name('testimony');
Route::get('/churchlocations', [App\Http\Controllers\API\LocationController::class, 'index'])->name('churchlocations');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/sermons/{id}', [App\Http\Controllers\SermonController::class, 'index'])->name('sermons/id');
Route::get('/programs', [App\Http\Controllers\ProgramController::class, 'index'])->name('programs');
Route::get('/aboutus', [App\Http\Controllers\API\AboutusController::class, 'index'])->name('aboutus');
Route::get('/programs',[App\Http\Controllers\API\ProgramsController::class, 'index'])->name('programs');
Route::get('/ministries', [App\Http\Controllers\API\MinistriesController::class, 'index'])->name('ministries');
Route::get('/give', [App\Http\Controllers\API\GiveController::class, 'index'])->name('give');
//Dashboard 
Route::get('/churchprograms', [App\Http\Controllers\Dashboard\ProgramController::class, 'index'])->name('churchprograms');
Route::post('/locationdetails', [App\Http\Controllers\Dashboard\LocationsController::class, 'store'])->name('locationdetails');
Route::post('/activateaudio', [App\Http\Controllers\Dashboard\AudioController::class, 'activate'])->name('activateaudio');
Route::post('/activateprogram', [App\Http\Controllers\Dashboard\ProgramController::class, 'activate'])->name('activateprogram');
Route::post('/deactivateprogram', [App\Http\Controllers\Dashboard\ProgramController::class, 'deactivate'])->name('deactivateprogram');
Route::post('/deactivateaudio', [App\Http\Controllers\Dashboard\AudioController::class, 'deactivate'])->name('deactivateaudio');
Route::post('/programdetails', [App\Http\Controllers\Dashboard\ProgramController::class, 'store'])->name('programdetails');
Route::post('/activatecontent', [App\Http\Controllers\Dashboard\ContentsController::class, 'activate'])->name('activatecontent');
Route::post('/deactivatecontent', [App\Http\Controllers\Dashboard\ContentsController::class, 'deactivate'])->name('deactivatecontent');
Route::post('/audiodetails', [App\Http\Controllers\Dashboard\AudioController::class, 'store'])->name('audiodetails');
Route::post('/updatecontent', [App\Http\Controllers\Dashboard\ContentsController::class, 'update'])->name('updatecontent');
Route::post('/content/getcontentdata', [App\Http\Controllers\Dashboard\ContentsController::class, 'show'])->name('content.getcontentdata');
Route::post('/videodetails', [App\Http\Controllers\Dashboard\ContentsController::class, 'store'])->name('videodetails');
Route::post('/updatemember', [App\Http\Controllers\Dashboard\MembersController::class, 'update'])->name('updatemember');
Route::post('/activatemember', [App\Http\Controllers\Dashboard\MembersController::class, 'activate'])->name('activatemember');
Route::post('/deactivatemember', [App\Http\Controllers\Dashboard\MembersController::class, 'destroy'])->name('deactivatemember');
Route::post('/updateuser', [App\Http\Controllers\Dashboard\UsersController::class, 'update'])->name('updateuser');
Route::post('/activateuser', [App\Http\Controllers\Dashboard\UsersController::class, 'activate'])->name('activateuser');
Route::post('/deactivateuser', [App\Http\Controllers\Dashboard\UsersController::class, 'destroy'])->name('deactivateuser');
Route::post('/userdetails', [App\Http\Controllers\Dashboard\UsersController::class, 'store'])->name('userdetails');
Route::post('/memberdetails', [App\Http\Controllers\Dashboard\MembersController::class, 'store'])->name('memberdetails');
Route::get('/users', [App\Http\Controllers\Dashboard\UsersController::class, 'index'])->name('users');
Route::get('/smsemail', [App\Http\Controllers\Dashboard\SMSEmailController::class, 'index'])->name('smsemail');
Route::get('/members',  [App\Http\Controllers\Dashboard\MembersController::class, 'index'])->name('members');
Route::get('/videoscontents', [App\Http\Controllers\Dashboard\ContentsController::class, 'index'])->name('videoscontents');
Route::get('/audioscontents', [App\Http\Controllers\Dashboard\AudioController::class, 'index'])->name('audioscontents');
Route::get('/leaders',  [App\Http\Controllers\Dashboard\LeadersController::class, 'index'])->name('leaders');
Route::get('/pastors',  [App\Http\Controllers\Dashboard\PastorsController::class, 'index'])->name('pastors');
Route::get('/offerings',  [App\Http\Controllers\Dashboard\OfferingsController::class, 'index'])->name('offerings');
Route::get('/tithes',  [App\Http\Controllers\Dashboard\TithesController::class, 'index'])->name('tithes');
Route::get('/thanksgiving',  [App\Http\Controllers\Dashboard\ThanksgivingController::class, 'index'])->name('thanksgiving');
Route::get('/projects',  [App\Http\Controllers\Dashboard\ProjectsController::class, 'index'])->name('projects');
Route::get('/prayers', [App\Http\Controllers\Dashboard\PrayersController::class, 'index'])->name('prayers');
Route::get('/testimonies',  [App\Http\Controllers\Dashboard\TestimoniesController::class, 'index'])->name('testimonies');
Route::get('/locations', [App\Http\Controllers\Dashboard\LocationsController::class, 'index'])->name('locations');
Auth::routes();