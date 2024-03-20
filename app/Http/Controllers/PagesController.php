<?php

namespace App\Http\Controllers;

use App\Mail\ContactForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PagesController extends Controller
{
    public function index() {
        return view('welcome');
    }

    public function aboutUs() {
        return view('about-us');
    }

    public function developmentMethodology() {
        return view('development-methodology');
    }

    public function partnerships() {
        return view('partnerships');
    }

    public function careerOverview() {
        return view('career-overview');
    }

    // public function certifications() {
    //     return view('certifications');
    // }

    public function awards() {
        return view('awards');
    }

    public function mediaCoverage() {
        return view('media-coverage');
    }

    public function events() {
        return view('events');
    }

    public function caseStudies() {
        return view('case-studies');
    }

    public function ourSolutions() {
        return view('our-solutions');
    }

    public function ourBlog() {
        return view('blog.index');
    }

    public function webinars() {
        return view('webinars');
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

    public function portfolio() {
        return view('our-work');
    }

    public function contactUs() {
        return view('contact');
    }

    public function privacyPolicy() {
        return view('privacy-policy');
    }

    public function sendContactForm(Request $request) {
        
        $request->validate([
            'floating_name'     =>  'required|string|max:50',
            'foating_email'     =>  'required|email',
            'floating_phone'    =>  'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'floating_company'  =>  'required',
            'floating_message'  =>  'required'
        ]);

        if($request->is('our-company/contact-us')) {
            $request->validate([
                'floating_service'     =>  'required'
            ]);
        }

        $mailSent = Mail::to('enquiries@reconnaissancetechnologies.com')->send(new ContactForm($request->all()));

        if($mailSent) {
            return back()->with('success', 'Message sent successfully!');
        } else {
            return back()->with('error', 'Message failed to send!');
        }
    }
}
