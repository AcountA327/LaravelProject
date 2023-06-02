<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
//$dt = new Carbon();

class Kadai02_2Controller extends Controller
{
    public function index(){
        $courses = [
            [
                'name' => "IT 開発エキスパートコース",
                'note' => "システム開発やサーバ管理に加え、ネットワーク設計、情報セキュリティなど、スペシャ
                        リストになるために必要なスキルを幅広く学習できます。",
                'url' => "https://comp.ecc.ac.jp/course_2022/it_coll/col_info/expert/",
            ],
            [
                'name' => "IT 開発研究コース",
                'note' => "システム・データベースなど開発技術を深く学ぶ一方、ネットワークスキルやインフラの
                        構築・設計をマスター。",
                'url' => "https://comp.ecc.ac.jp/course_2022/it_coll/col_info/kenkyu/",
            ],
            [
                'name' => "システムエンジニアコース",
                'note' => "プログラミング言語やシステム開発、データベース開発などシステムエンジニアの基礎と
                        なるスキルを集中的に学習。",
                'url' => "https://comp.ecc.ac.jp/course_2022/it_coll/col_info/se/",
            ],
            [
                'name' => "Web デザインコース",
                'note' => "デザインの基礎から Web 制作の全工程までを学び、クライアントの問題を Web デ
                        ザインで解決する能⼒を習得。",
                'url' => "https://comp.ecc.ac.jp/course_2022/it_coll/col_info/design/",
            ],
        ];
       return view('kadai02_2',compact('courses'));
       }
}
