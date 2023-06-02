<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Kadai05_3Controller extends Controller
{
    public function index() {
        return view('kadai05_3');
    }

    public function post(Request $request) {
        $imagers = Storage::disk('');
    }
}
