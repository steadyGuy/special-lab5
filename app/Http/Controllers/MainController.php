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

    public function setOrderInfo(Request $request) {
        //Валидируем request
        // https://laravel.com/docs/8.x/validation

        $request->validate([
            'name' => 'required',
            'mobile' => 'required|regex:/(0)[0-9]{9}/',
        ]);

        //queryBuilder can also be applied
        $order = new Order();
        $order->name = $request->name;
        $order->mobile = $request->mobile;

        $query = $order->save();

        if($query) {
            return back()->with('success', 'Вы успешно отправили письмо!');
        } else {
            return back()->with('fail', 'Что-то пошло не так'); //withInput
        }
    }

    public function getTourType($slug) {
        $tourType = TourType::where('slug', $slug)->first();
        return view('tourType', compact('tourType'));
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
