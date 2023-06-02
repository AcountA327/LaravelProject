<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Kadai04_2Controller extends Controller
{
    public function index(){
        $courses = [
            [
                'id' => 1,
                'name' => 'IT 開発エキスパート',
            ],
            [
                'id' => 2,
                'name' => 'IT 開発研究',
            ],
            [
                'id' => 3,
                'name' => 'システムエンジニア',
            ],
            [
                'id' => 4,
                'name' => 'Web デザイン',
            ],
        ];
                return view('kadai04_1', compact('courses'));
    }
    //post メソッド
    public function post(Request $request) {
        $result = [];
        $result['name'] = $request->input( 'name' );
        $result['student_id'] = $request->input( 'student_id' );//以下は自分で書くこと

        // CSRF トークンを破棄
        $request->session()->regenerateToken();
        return view('kadai04_2', compact('result'));
    }
}
