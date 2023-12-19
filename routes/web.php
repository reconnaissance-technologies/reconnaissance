<?php

use App\Http\Controllers\PagesController;
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

Route::get('/', [PagesController::class, 'index'])->name('index');
Route::get('about-us', [PagesController::class, 'about_us'])->name('about-us');
Route::get('our-services', [PagesController::class, 'our_services'])->name('our-services');
Route::group(['prefix'=>'industries','as'=>'industries.'], function () {
    Route::get('media-and-entertainment', [PagesController::class, 'media_entertainment'])->name('media-and-entertainment');
    Route::get('education', [PagesController::class, 'education'])->name('education');
    Route::get('healthcare', [PagesController::class, 'healthcare'])->name('healthcare');
    Route::get('hi-tech', [PagesController::class, 'hi_tech'])->name('hi-tech');
    Route::get('logistics', [PagesController::class, 'logistics'])->name('logistics');
    Route::get('real-estate-and-construction', [PagesController::class, 'real_estate_construction'])->name('real-estate');
    Route::get('retail-and-ecommerce', [PagesController::class, 'retail_ecommerce'])->name('retail-ecommerce');
    Route::get('travel-and-hospitality', [PagesController::class, 'travel_hospitality'])->name('travel-hospitality');
    Route::get('utilities-and-on-demand', [PagesController::class, 'utilities_on_demand'])->name('utilities');
    Route::get('fintech', [PagesController::class, 'fintech'])->name('fintech');
    Route::get('automotive', [PagesController::class, 'automotive'])->name('automotive');
    Route::get('mining-agriculture', [PagesController::class, 'mining_agriculture'])->name('mining-agriculture');
});
Route::group(['prefix'=>'clients','as'=>'clients.'], function () {
    Route::get('blue-sea-travels', function() {
        return redirect('https://blueseatravels.com');
    })->name('blue-sea-travels');
    Route::get('ultrashot', function() {
        return redirect('https://ultrashotng.com');
    })->name('ultrashot');
    Route::get('how-tech-ltd', function() {
        return redirect('https://howtech.africa');
    })->name('how-tech-ltd');
    Route::get('bliss-explorers', function() {
        return redirect('https://blissexplorers.com');
    })->name('bliss-explorers');
    Route::get('cac-foundation', function() {
        return redirect('https://cacfoundation.com.ng');
    })->name('cac-foundation');
});
Route::get('our-work', [PagesController::class, 'our_work'])->name('our-work');
Route::get('our-solutions', [PagesController::class, 'our_solutions'])->name('our-solutions');
Route::get('careers', [PagesController::class, 'careers'])->name('careers');
Route::get('csr', [PagesController::class, 'csr'])->name('csr');
Route::get('our-blog', [PagesController::class, 'our_blog'])->name('our-blog');
Route::get('contact-us', [PagesController::class, 'contact_us'])->name('contact-us');
