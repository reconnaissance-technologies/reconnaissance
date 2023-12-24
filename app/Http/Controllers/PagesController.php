<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        return view('welcome');
    }

    public function about_us() {
        return view('about-us');
    }

    public function our_solutions() {
        return view('our-solutions');
    }

    public function our_blog() {
        return view('our-blog');
    }

    public function csr() {
        return view('csr');
    }

    public function careers() {
        return view('careers');
    }

    public function our_services() {
        return view('our-services');
    }

    public function product_design() {
        return view('our-services.product-design');
    }

    public function software_development() {
        return view('our-services.software-development');
    }

    public function web_app() {
        return view('our-services.web-app-development');
    }

    public function frontend_development() {
        return view('our-services.frontend-development');
    }

    public function cloud_infrastructure() {
        return view('our-services.cloud-infrastructure');
    }

    public function pentesting() {
        return view('our-services.pentesting');
    }

    public function ai_ml_development() {
        return view('our-services.ai-ml-development');
    }

    public function ar_vr_development() {
        return view('our-services.ar-vr-development');
    }

    public function iot_development() {
        return view('our-services.iot-development');
    }

    public function chatbot_development() {
        return view('our-services.chatbot-development');
    }

    public function media_entertainment() {
        return view('industries.media-entertainment');
    }

    public function education() {
        return view('industries.education');
    }

    public function healthcare() {
        return view('industries.healthcare');
    }

    public function hi_tech() {
        return view('industries.hi-tech');
    }

    public function logistics() {
        return view('industries.logistics');
    }

    public function real_estate_construction() {
        return view('industries.real-estate-construction');
    }

    public function retail_ecommerce() {
        return view('industries.retail-ecommerce');
    }

    public function travel_hospitality() {
        return view('industries.travel-hospitality');
    }

    public function utilities_on_demand() {
        return view('industries.utilities-on-demand');
    }

    public function fintech() {
        return view('industries.fintech');
    }

    public function automotive() {
        return view('industries.automotive');
    }

    public function mining_agriculture() {
        return view('industries.mining-agriculture');
    }

    public function our_work() {
        return view('our-work');
    }

    public function contact_us() {
        return view('contact');
    }
}
