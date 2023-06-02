@extends("layouts.kadai")
@section("pageTitle","課題 9_1")
@section("title","データベース処理")
@section("content")


    {{$json['city']['name']}}<br> …都市名
    {{$json['list'][0]['dt'] }}<br> …日付（UNIX 経過秒）
    {{$json['list'][0]['main']['temp'] }}<br> …気温
    {{$json['list'][0]['weather'][0]['icon'] }}<br> …天気アイコン

    <div class="grid grid-cols-4 gap-4">
    @foreach ($json['list'] as $item)
        @if (\Carbon\Carbon::parse($item['dt'])->isoFormat('HH') === "00")
        <div>
            {{\Carbon\Carbon::parse($item['dt'])->isoFormat('YYYY 年 MM 月 DD 日(ddd) HH 時')}}<br><br>
            <img src="http://openweathermap.org/img/w/{{ $item['weather'][0]['icon']}}.png">
            <h3>{{ $item['main']['temp'] }}℃</h3><br>
        </div>
        @endif
        @endforeach
    </div>
<section>
</section>
@endsection


