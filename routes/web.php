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
Route::group(['middleware' => ['auth']],function() {
    Route::group(['middleware' => ['role:Admin']],function() { 
        Route::group(['middleware' => ['role:Admin']],function() {
            Route::get('/LearnersProfile/{res_id}',[App\Http\Controllers\ReservationController::class, 'LearnersProfile'])->name('LearnersProfile'); 
            Route::get('/addPosting/{id}', [App\Http\Controllers\PostingController::class, 'index'])->name('index');
            Route::get('/sortable-post', [App\Http\Controllers\PostingController::class, 'updateOrders']);
            Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
            Route::get('/accounts-import', [App\Http\Controllers\AccountsController::class, 'import_get'])->name('accounts.import_get');
            Route::post('/accounts-import', [App\Http\Controllers\AccountsController::class, 'import_post'])->name('accounts.import_post');
            Route::resource('/accounts', App\Http\Controllers\AccountsController::class);
            Route::resource('/roles', App\Http\Controllers\RolesController::class);
            Route::get('/post-sortable', [App\Http\Controllers\TransparencySealController::class, 'updateOrder']);
            Route::get('/remarks/{res_id}', [App\Http\Controllers\ReservationController::class,'remarks'])->name('remarks');
            Route::post('/addremarks/{res_id}', [App\Http\Controllers\ReservationController::class,'addremarks'])->name('addremarks');
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
            Route::resource('/reservation', App\Http\Controllers\ReservationController::class);
        }); 
    });
}); 




    Route::post('/addReservation', [App\Http\Controllers\ReservationController::class,'addReservation'])->name('addReservation');
    Route::get('/reservations', [App\Http\Controllers\HomeController::class,'reservation'])->name('reservation');
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
    Route::get('/sector/{sector}', [App\Http\Controllers\HomeController::class,'sector'])->name('sector');
    Route::get('/perQualiSector/{id}', [App\Http\Controllers\HomeController::class,'perQualiSector'])->name('perQualiSector');
    Route::get('/transparencyseals', [App\Http\Controllers\HomeController::class,'transparencyseals'])->name('transparencyseals');
    Route::get('/philgeps', [App\Http\Controllers\HomeController::class,'philgeps'])->name('philgeps');
    Route::get('/citizenscharter', [App\Http\Controllers\HomeController::class,'citizenscharter'])->name('citizenscharter');