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
