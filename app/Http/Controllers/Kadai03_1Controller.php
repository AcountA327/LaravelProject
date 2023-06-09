<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Kadai03_1Controller extends Controller
{
    public function index(){

        $collages = [
            [
                'id' => 1,
                'name' => "ゲーム・クリエイティブカレッジ",
                'course' => [
                "ゲーム開発エキスパートコース",
                "ゲームプログラム開発コース",
                "CG デザインコース",
                ],
                'url'=> "https://comp.ecc.ac.jp/course_2023/game_coll/",
            ],
            [
                'id' => 2,
                'name' => "IT カレッジ",
                'course' => [
                "IT 開発エキスパートコース",
                "IT 開発研究コース",
                "Web デザインコース",
                "システムエンジニアコース",
                ],
                'url'=> "https://comp.ecc.ac.jp/course_2023/it_coll/",
            ]
        ];

        return view('kadai03_1',compact('collages'));
    }
}
