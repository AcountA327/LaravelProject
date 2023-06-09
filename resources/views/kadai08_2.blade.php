@extends("layouts.kadai")
@section("pageTitle","課題 8_1")
@section("title","データベース処理")
@section("content")

<div class="bg-white py-6 sm:py-8 lg:py-12">
    <div class="max-w-screen-2xl px-4 md:px-8 mx-auto">
        <!-- text - start -->
        <div class="mb-10 md:mb-16">
            <h2 class="text-gray-800 text-2xl lg:text-3xl font-bold text-center mb-4 md:mb-6">記事の投稿</h2>
            {{-- <p class="max-w-screen-md text-gray-500 md:text-lg text-center mx-auto">This is a section of some simple filler text, also known as placeholder text. It shares some characteristics of a real written text but is random or otherwise generated.</p> --}}
        </div>
        <!-- text - end -->
        <!-- form - start -->
        <form action="/kadai06_1/{{ $article['id'] }}" method="POST" class="max-w-screen-md grid sm:grid-cols-2 gap-4 mx-auto">
            @method('PUT')
            @csrf
            <div>
                <label for="first-name" class="inline-block text-gray-800 text-sm sm:text-base mb-2">タイトル*</label>
                <input name="title" value="{{ $article['title'] }}"
                    class="w-full bg-gray-50 text-gray-800 border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2" />
                @error('title')
                    <p>{{ $message }}</p>
                @enderror
            </div>
            <div class="sm:col-span-2">
                <label for="message" class="inline-block text-gray-800 text-sm sm:text-base mb-2">本文*</label>
                <textarea name="body"
                    class="w-full h-64 bg-gray-50 text-gray-800 border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2">{{ $article['body'] }}</textarea>
                @error('title')
                    <p>{{ $message }}</p>
                @enderror
            </div>

            <input name="image" type="file">
            @error('image')
            <p class="text-xs text-pink-600">{{ $message }}</p>
            @enderror

            <div class="sm:col-span-2 flex justify-between items-center">
                <button
                    class="inline-block bg-indigo-500 hover:bg-indigo-600 active:bg-indigo-700 focus-visible:ring ring-indigo-300 text-white text-sm md:text-base font-semibold text-center rounded-lg outline-none transition duration-100 px-8 py-3">更新</button>

                <span class="text-gray-500 text-sm">*Required</span>
            </div>
            {{-- <p class="text-gray-400 text-xs">By signing up to our newsletter you agree to our <a href="#" class="hover:text-indigo-500 active:text-indigo-600 underline transition duration-100">Privacy Policy</a>.</p> --}}
        </form>
        <!-- form - end -->
    </div>
</div>



<section>
</section>
@endsection
