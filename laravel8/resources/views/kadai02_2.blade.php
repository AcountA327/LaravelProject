<!DOCTYPE html>
<html lang="ja">
<head>
 <title>kadai02_1 - サーバーサイドスクリプト演習２</title>
</head>
<body>
 <h1>kadai02 Blade を使ったページの表示</h1>
 <h2>コントローラーからビューの呼び出し</h2>
 @foreach ( $courses as $course )
 <section>
 <h3>{{ $course['name'] }}</h3>
     {{ $course['note'] }}<br>
     <a href={{ $course['url'] }} target="_black">コースの紹介</a>
 </section>
@endforeach

</body>
</html>
