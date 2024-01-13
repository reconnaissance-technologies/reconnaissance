<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function index() {
        return view('welcome');
    }

    public function aboutUs() {
        return view('about-us');
    }

    public function ourSolutions() {
        return view('our-solutions');
    }

    public function ourBlog() {
        return view('our-blog');
    }

    public function csr() {
        return view('csr');
    }

    public function careers() {
        return view('careers');
    }

    public function ourServices() {
        return view('our-services');
    }

    public function productDesign() {
        return view('our-services.product-design');
    }

    public function softwareDevelopment() {
        return view('our-services.software-development');
    }

    public function webApp() {
        return view('our-services.web-app-development');
    }

    public function mobileApp() {
        return view('our-services.mobile-app-development');
    }

    public function frontendDevelopment() {
        return view('our-services.frontend-development');
    }

    public function cloudInfrastructure() {
        return view('our-services.cloud-infrastructure');
    }

    public function cybersecurity() {
        return view('our-services.cybersecurity');
    }

    public function aiMlDevelopment() {
        return view('our-services.ai-ml-development');
    }

    public function arVrDevelopment() {
        return view('our-services.ar-vr-development');
    }

    public function iotDevelopment() {
        return view('our-services.iot-development');
    }

    public function chatbotDevelopment() {
        return view('our-services.chatbot-development');
    }

    public function deliveryServiceModel() {
        return view('our-services.service-models.delivery-model');
    } 

    public function engagementServiceModel() {
        return view('our-services.service-models.engagement-model');
    }

    public function magico() {
        return view('product-offering.magico');
    }

    public function buzzForge() {
        return view('product-offering.buzzforge');
    }

    public function inventifyPlus() {
        return view('product-offering.inventify-plus');
    }

    public function mediaEntertainment() {
        return view('industries.media-entertainment');
    }

    public function education() {
        return view('industries.education');
    }

    public function healthcare() {
        return view('industries.healthcare');
    }

    public function hiTech() {
        return view('industries.hi-tech');
    }

    public function logistics() {
        return view('industries.logistics');
    }

    public function realEstateConstruction() {
        return view('industries.real-estate-construction');
    }

    public function retailEcommerce() {
        return view('industries.retail-ecommerce');
    }

    public function travelHospitality() {
        return view('industries.travel-hospitality');
    }

    public function utilitiesOnDemand() {
        return view('industries.utilities-on-demand');
    }

    public function fintech() {
        return view('industries.fintech');
    }

    public function automotive() {
        return view('industries.automotive');
    }

    public function miningAgriculture() {
        return view('industries.mining-agriculture');
    }

    public function ourWork() {
        return view('our-work');
    }

    public function contactUs() {
        return view('contact');
    }
}
