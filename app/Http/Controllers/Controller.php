<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\View;

use App\Models\TourType;

class Controller extends BaseController
{
    public function __construct()
    {
        $tourTypes = TourType::offset(0)->limit(3)->get();

        View::share('tourTypes', $tourTypes);
    }
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
