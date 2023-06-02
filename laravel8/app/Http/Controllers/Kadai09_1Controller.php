<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Kadai09_1Controller extends Controller
{
    public function index() {
        $url ='http://api.openweathermap.org/data/2.5/forecast?q=Osaka,JP&mode=json&appid=7c1d8f20675d600b55480ec85a8dc1df&lang=ja&units=metric';

        $response = Http::get($url);
        $json = $response -> json();
        //successed
        if ($response -> successful()) {
            return view('kadai09_1', compact('json'));
        } else {
            //not successed
            return view('kadai09_2', compact('json'));
        }
    }
}
