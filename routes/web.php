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
Route::get('about-us', [PagesController::class, 'aboutUs'])->name('about-us');
Route::get('our-services', [PagesController::class, 'ourServices'])->name('our-services');

Route::group(['prefix'  =>  'our-services', 'as'    => 'services.'], function () {
    Route::get('product-design', [PagesController::class, 'productDesign'])->name('product-design');
    Route::get('software-devlopment', [PagesController::class, 'softwareDevelopment'])->name('software-devlopment');
    Route::get('web-appliaction-development', [PagesController::class, 'webApp'])->name('web-app');
    Route::get('mobile-app-development', [PagesController::class, 'mobileApp'])->name('mobile-app');
    Route::get('frontend-development', [PagesController::class, 'frontendDevelopment'])->name('frontend-development');
    Route::get('cloud-infrastructure', [PagesController::class, 'cloudInfrastructure'])->name('cloud-infrastructure');
    Route::get('cybersecurity', [PagesController::class, 'cybersecurity'])->name('cybersecurity');
    Route::get('ar-vr-development', [PagesController::class, 'arVrDevelopment'])->name('ar-vr-development');
    Route::get('ai-ml-development', [PagesController::class, 'aiMlDevelopment'])->name('ai-ml-development');
    Route::get('iot-development', [PagesController::class, 'iotDevelopment'])->name('iot-development');
    Route::get('chatbot-development', [PagesController::class, 'chatbotDevelopment'])->name('chatbot-development');
});
Route::group(['prefix'  =>  'service-model', 'as'    => 'sm.'], function () {
    Route::get('delivery-model', [PagesController::class, 'deliveryServiceModel'])->name('delivery');
    Route::get('engagement-model', [PagesController::class, 'engagementServiceModel'])->name('engagement');
});
Route::group(['prefix'  =>  'product-offering', 'as'    => 'po.'], function () {
    Route::get('magico', [PagesController::class, 'magico'])->name('magico');
    Route::get('buzzforge', [PagesController::class, 'buzzForge'])->name('buzzforge');
    Route::get('inventify-plus', [PagesController::class, 'inventifyPlus'])->name('inventify-plus');
});
Route::group(['prefix'  =>  'industries','as'=>'industries.'], function () {
    Route::get('media-and-entertainment', [PagesController::class, 'mediaEntertainment'])->name('media-and-entertainment');
    Route::get('education', [PagesController::class, 'education'])->name('education');
    Route::get('healthcare', [PagesController::class, 'healthcare'])->name('healthcare');
    Route::get('hi-tech', [PagesController::class, 'hiTech'])->name('hi-tech');
    Route::get('logistics', [PagesController::class, 'logistics'])->name('logistics');
    Route::get('real-estate-and-construction', [PagesController::class, 'realEstateConstruction'])->name('real-estate');
    Route::get('retail-and-ecommerce', [PagesController::class, 'retailEcommerce'])->name('retail-ecommerce');
    Route::get('travel-and-hospitality', [PagesController::class, 'travelHospitality'])->name('travel-hospitality');
    Route::get('utilities-and-on-demand', [PagesController::class, 'utilitiesOnDemand'])->name('utilities');
    Route::get('fintech', [PagesController::class, 'fintech'])->name('fintech');
    Route::get('automotive', [PagesController::class, 'automotive'])->name('automotive');
    Route::get('mining-agriculture', [PagesController::class, 'miningAgriculture'])->name('mining-agriculture');
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

Route::get('our-work', [PagesController::class, 'ourWork'])->name('our-work');
Route::get('our-solutions', [PagesController::class, 'ourSolutions'])->name('our-solutions');
Route::get('careers', [PagesController::class, 'careers'])->name('careers');
Route::get('csr', [PagesController::class, 'csr'])->name('csr');
Route::get('our-blog', [PagesController::class, 'ourBlog'])->name('our-blog');
Route::get('contact-us', [PagesController::class, 'contactUs'])->name('contact-us');
