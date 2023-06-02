@extends("layouts.kadai")
@section("pageTitle","課題 4_1")
@section("title","Blade のテンプレートで表示する")
@section("content")

@foreach ($result as $key => $value)
    {{ $userinfo[$key] }}{{ $value }}<br>
@endforeach
<a href="/kadai04_1">入力フォームに戻る</a>
@endsection
