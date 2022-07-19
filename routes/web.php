<?php

use Illuminate\Support\Facades\Route;

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
//Route::get('/addPosting/{id}', App\Http\Controllers\PostingController::class,'index')->name('index');
Route::get('/addPosting/{posting_id}', [App\Http\Controllers\PostingController::class, 'index'])->name('index');
Route::get('/sortable-post', [App\Http\Controllers\PostingController::class, 'updateOrders']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/accounts-import', [App\Http\Controllers\AccountsController::class, 'import_get'])->name('accounts.import_get');
Route::post('/accounts-import', [App\Http\Controllers\AccountsController::class, 'import_post'])->name('accounts.import_post');
Route::resource('/accounts', App\Http\Controllers\AccountsController::class);
Route::resource('/roles', App\Http\Controllers\RolesController::class);
Route::get('/post-sortable', [App\Http\Controllers\TransparencySealController::class, 'updateOrder']);
Route::resource('/gallery', App\Http\Controllers\GalleryController::class);
Route::resource('/news', App\Http\Controllers\NewsController::class);
Route::resource('/personnel', App\Http\Controllers\PersonnelController::class);
Route::resource('/transparencyseal', App\Http\Controllers\TransparencySealController::class);
Route::resource('/successstories', App\Http\Controllers\SuccessStoriesController::class);

Route::resource('/qualification', App\Http\Controllers\QualificationController::class);
Route::resource('/announcement', App\Http\Controllers\AnnouncementController::class);
Route::resource('/accredited', App\Http\Controllers\AccreditedController::class);
Route::resource('/schedule', App\Http\Controllers\ScheduleController::class);
Route::resource('/posting', App\Http\Controllers\PostingController::class);


Route::get('/reservation', [App\Http\Controllers\HomeController::class,'reservation'])->name('reservation');
Route::get('/location-map', [App\Http\Controllers\HomeController::class,'locationmap'])->name('locationmap');
Route::get('/mission-vision', [App\Http\Controllers\HomeController::class,'missionvision'])->name('missionvision');
Route::get('/organizational-structure', [App\Http\Controllers\HomeController::class,'organizationalstructure'])->name('organizationalstructure');
Route::get('/rtc-personnel', [App\Http\Controllers\HomeController::class,'rtcpersonnel'])->name('rtcpersonnel');
Route::get('/contact-us', [App\Http\Controllers\HomeController::class,'contactus'])->name('contactus');
Route::get('/galleries', [App\Http\Controllers\HomeController::class,'images'])->name('images');
Route::get('/newsupdates', [App\Http\Controllers\HomeController::class,'newsupdates'])->name('newsupdates');
Route::get('/success-stories', [App\Http\Controllers\HomeController::class,'achiever'])->name('achiever');
Route::get('/requirements', [App\Http\Controllers\HomeController::class,'requirements'])->name('requirements');
Route::get('/utpras-directory', [App\Http\Controllers\HomeController::class,'qualification'])->name('qualification');
