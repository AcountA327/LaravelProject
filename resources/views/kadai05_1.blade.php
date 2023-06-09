@extends("layouts.kadai")
@section("pageTitle","課題 5_1")
@section("title","Blade のテンプレートで表示する")
@section("content")
    <h3 class="text-3xl font-bold py-5 mb-5 border-b-2 border-black">カレッジ</h3>
    <form action="/kadai05_1" method="POST" enctype="multipart/form-data" novalidate>
    @csrf
    <div><input type="file" class="form-control" name="image"></div>
    @error('image')
        <p class="text-xs text-pink-600">{{ $message }}</p>
    @enderror
    <div class="flex justify-end">
        <button type="submit" class="text-white text-center leading-10 bg-pink-600 px-10 hover:bg-pink-500 rounded-md">送信</button>
    </div>
    </form>
<section>
</section>
@endsection
