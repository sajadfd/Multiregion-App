<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;
use Illuminate\Support\Facades\Session;
use Redirect;

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;

class CityController extends Controller
{
    public function index()
    {
        $cities = City::all();
        return view('index', compact('cities'));
    }

    public function show(City $city)
    {
        $cities = City::all();
        return view('city', compact('cities', 'city'));
    }

    public function about(City $city)
    {
        return view('about', compact('city'));
    }

    public function news(City $city)
    {
        return view('news', compact('city'));
    }
}

