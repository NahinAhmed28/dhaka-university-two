<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\CompletedResearch;
use App\Models\Contact;
use App\Models\Expert;
use App\Models\Expertise;
use App\Models\Fellowship;
use App\Models\Gallery;
use App\Models\Hero;
use App\Models\HigherEducation;
use App\Models\Internship;
use App\Models\Mission;
use App\Models\OngoingResearch;
use App\Models\Organization;
use App\Models\Plan;
use App\Models\Portfolio;
use App\Models\Publication;
use App\Models\Service;
use App\Models\Training;
use App\Models\Vision;
use App\Models\Member;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class FrontEndController extends Controller
{
    public function index()
    {
        $data = [
            'about' => About::first(),
            'organizations' => Organization::get(['image']),
            'services' => Service::get(),
            'mission' => Mission::first(),
            'vision' => Vision::first(),
            'plan' => Plan::first(),
            'heros' => Hero::get(),
            'expertises' => Expertise::get(),
            'experts' => Expert::get(),
            'trainings' => Training::get(),
            'galleries' => Gallery::orderBy('id', 'DESC')->take(3)->get(),
            'portfolios' => Portfolio::orderBy('id', 'DESC')->take(3)->get(),
            'locations' => [
                [23.735708,  90.392929],
            ]

        ];

        return view('frontend.layouts.main', $data);
    }
    public function about()
    {
        $data = [
            'about' => About::first(),
            'mission' => Mission::first(),
            'vision' => Vision::first(),
            'plan' => Plan::first(),
        ];

        return view('frontend.layouts.about', $data);
    }
    public function service()
    {
        $data = [
            'services' => Service::get(),
        ];
        return view('frontend.layouts.service', $data);
    }
    public function expertise()
    {
        $data = [
            'expertises' => Expertise::get(),
        ];
        return view('frontend.layouts.expertise', $data);
    }
    public function mission()
    {
        $data = [
            'mission' => Mission::first(),
            'vision' => Vision::first(),
            'plan' => Plan::first()
        ];
        return view('frontend.layouts.mission', $data);
    }
    public function contact()
    {
//        $locations = [
//            [ 12.9716,  77.5946],
//        ];

//        return view('frontend.layouts.contact', ['locations'=>$locations]);

        return view('frontend.layouts.contact');
    }
    public function higherEducation()
    {
        $data = [
            'highereducations' => HigherEducation::get(),
        ];
        return view('frontend.layouts.higher-education', $data);
    }
    public function internship()
    {
        $data = [
            'internships' => Internship::get(),
        ];
        return view('frontend.layouts.internship', $data);
    }
    public function training()
    {
        $data = [
            'trainings' => Training::get(),
        ];
        return view('frontend.layouts.training', $data);
    }
    public function fellowship()
    {
        $data = [
            'fellowships' => Fellowship::get(),
        ];
        return view('frontend.layouts.fellowship', $data);
    }
    public function completedResearch()
    {
        $data = [
            'completedresearches' => CompletedResearch::get(),
        ];
        return view('frontend.layouts.completed-research', $data);
    }
    public function ongoingResearch()
    {
        $data = [
            'ongoingresearches' => OngoingResearch::get(),
        ];
        return view('frontend.layouts.ongoing-research', $data);
    }
    public function organization()
    {
        $data = [
            'organizations' => Organization::get(['image']),
            'members' => Member::get(),
            'experts' => Expert::get(),
        ];

        return view('frontend.layouts.organization', $data);
    }
    public function publication()
    {
        $data = [
            'publications' => Publication::get(),
        ];
        return view('frontend.layouts.publication', $data);
    }
    public function gallery()
    {
        $data = [
            'galleries' => Gallery::get(),
        ];
        return view('frontend.layouts.gallery', $data);
    }
    public function portfolio()
    {
        $data = [
            'portfolios' => Portfolio::get(),
        ];
        return view('frontend.layouts.portfolio', $data);
    }

    public function contactStore(Request $request)
    {
        $data = Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'message' => $request->message
        ]);
        $data = [
            'rows' => Contact::get()->toQuery()->paginate(5),
        ];
        Alert::success('Message Submitted', 'You Message has been sent successfully');
        return redirect()->back();
    }

}
