<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Kadai04_1Request;

class Kadai04_1Controller extends Controller
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
    public function post(Kadai04_1Request $request) {
        $courses = [
            1 => 'IT 開発エキスパート',
            2 => 'IT 開発研究',
            3 => 'システムエンジニア',
            4 => 'Web デザイン',
        ];

        $userinfo = [
            'name' => "名前：",
            'student_id' => "学籍番号：",
            'email' => "メールアドレス：",
            'course' => "コース：",
            'note' => "メモ："
        ];

        $result = [];
        $result['name'] = $request->input( 'name' );
        $result['student_id'] = $request->input( 'student_id' );//以下は自分で書くこと
        $result['email'] = $request -> input('email');
        $result['course'] = $courses[$request -> input('course')];
        $result['note'] = $request -> input('note');
        // CSRF トークンを破棄
        $request->session()->regenerateToken();
        return view('kadai04_2', compact('result', 'userinfo'));
    }
}
