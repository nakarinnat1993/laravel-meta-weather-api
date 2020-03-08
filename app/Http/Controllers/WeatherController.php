<?php

namespace App\Http\Controllers;

use Bioudi\LaravelMetaWeatherApi\Weather;

class WeatherController extends Controller
{
    public function index()
    {
        $weather = new Weather();
        $bangkoks = $weather->getByCityName('bangkok');
        // dd($bangkok);
        return view('weather',compact('bangkoks'));
    }
}
