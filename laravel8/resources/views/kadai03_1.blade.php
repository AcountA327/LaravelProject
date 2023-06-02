@extends("layouts.kadai")
@section("pageTitle","課題 3_1")
@section("title","Blade のテンプレートで表示する")
@section("content")
<h3 class="text-3xl font-bold py-5 mb-5 border-b-2 border-black">カレッジ</h3>
@foreach ($collages as $cal)
    <a href={{ $cal["url"] }}><h4 class="text-xl font-bold text-pink-600 mb-2">{{ $cal["name"] }}</h4></a>
    @foreach ($cal["course"] as $ca)
        <ul>
            <li>{{ $ca }}</li>
        <ul>
    @endforeach
    <br>
@endforeach
@endsection
