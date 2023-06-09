@extends("layouts.kadai")
@section("pageTitle","課題 5_1")
@section("title","Blade のテンプレートで表示する")
@section("content")
    <h3 class="text-3xl font-bold py-5 mb-5 border-b-2 border-black">カレッジ</h3>
    <img src="{{ asset('/storage/kadai05_images/'.$image) }}" alt="写真">
    <div>
        <a href="/kadai05_1">入力フォームに戻る</a>
    </div>
<section>
</section>
@endsection
