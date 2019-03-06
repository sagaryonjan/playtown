<?php

namespace App\Http\Controllers;

use App\Business;
use App\Services\GooglePlaceDetails;

class HomeController extends Controller
{

    public function index()
    {
        $place_details = (new GooglePlaceDetails())->get();
        $business = Business::first();

        return view('welcome', compact('place_details', 'business'));
    }

}