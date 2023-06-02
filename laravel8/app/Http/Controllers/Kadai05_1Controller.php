<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Kadai05_1Request;
use Illuminate\Support\Facades\Storage;

class Kadai05_1Controller extends Controller
{
    public function index() {
        return view('kadai05_1');
    }

    public function post(Kadai05_1Request $request) {
        $imager = Storage::disk('ftp')->put('/2210409/images/',$request->image);
        $image = Storage::disk('public')->put('/kadai05_images/',$request->image);
        $image = basename($image);
        // CSRF トークンを破棄
        $request->session()->regenerateToken();
        return view('kadai05_2', compact('image'));
    }

    public function photo() {
        $imagers = Storage::disk('public')->files('/kadai05_images/');
        foreach ($imagers as $img) {
            $photoshow[] = basename($img);
        }
        return view('kadai05_3', compact('photoshow'));
    }
}
