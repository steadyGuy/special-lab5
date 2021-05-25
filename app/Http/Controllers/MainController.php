<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Tour;
use App\Models\TourType;
use Illuminate\Http\Request;

class MainController extends Controller
{

    public function index() {
        return view('index');
    }

    public function about() {
        return view('why');
    }

    public function getToursTypes() {
        $tours = TourType::get();
        return view('toursList', compact('tours'));
    }

    public function getTourType($slug) {
        $tourType = TourType::where('slug', $slug)->first();
        return view('tourType', compact('tourType'));
    }

    public function getToursSpecial() {
        $tours = Tour::where('isSpecial', 1)->limit(3)->get();
        return view('tours', compact('tours'));
    }

    public function getTours() {
        $tours = Tour::where('isSpecial', 1)->limit(3)->get();
        return view('tours', compact('tours'));
    }

    public function getTour($slug) {
        $tour = Tour::where('slug', $slug)->get();
        return view('tourElement', ['tour' => $tour[0]]);
    }
}
