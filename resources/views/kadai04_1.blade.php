@extends("layouts.kadai")
@section("pageTitle","課題 4_1")
@section("title","Blade のテンプレートで表示する")
@section("content")
<h3 class="text-3xl font-bold py-5 mb-5 border-b-2 border-black">カレッジ</h3>

<section>
    <h3 class="text-xl border-b-2 border-sky-400 pb-2 mb-10">質問の投稿</h3>
    <form action="/kadai04_1" method="POST">
        @csrf
        <div class="flex justify-between items-stretch mb-5">
            <div class="flex flex-col w-6/12 mr-5">
                <div class="flex flex-col w-full">
                    <label class="text-gray-700 text-sm">名前<em class="text-xs text-pink-600">必須</em></label>
                    <input type="text" name="name" value="{{ old('name') }}" class="w-full h-10 px-3 text-lg border-2 border-gray-200 outline-none">
                    @error('name')
                    <p class="text-xs text-pink-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex flex-col w-full">
                    <label class="text-gray-700 text-sm">学籍番号<em class="text-xs text-pink-600">必須</em></label>
                    <input type="text" name="student_id" value="{{ old('student_id') }}" maxlength="7" class="w-full h-10 px-3 text-lg border-2 border-gray-200 outline-none">
                    @error('student_id')
                    <p class="text-xs text-pink-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex flex-col w-full">
                    <label class="text-gray-700 text-sm">メールアドレス</label>
                    <input type="text" name="email" value="{{ old('email') }}" class="w-full h-10 px-3 text-lg border-2 border-gray-200 outline-none">
                    @error('email')
                    <p class="text-xs text-pink-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex flex-col w-full">
                    <label class="text-gray-700 text-sm">コース</label>
                    <select name="course" class="w-full h-10 px-3 border-2 border-gray-200 outline-none">
                    @foreach( $courses as $course )
                        <option value="{{ $course['id'] }}">{{ $course['name'] }}</option>
                    @endforeach
                    </select>
                </div>
            </div>
            <div class="flex flex-col items-stretch flex-grow">
                <label class="text-gray-700 text-sm">メッセージ</label>
                <textarea name="note" class="w-full h-full text-lg px-2 py-2 border-2 border-gray-200"></textarea>
            </div>
        </div>
        <div class="flex justify-end">
            <button type="submit" class="text-white text-center leading-10 bg-pink-600 px-10 hover:bg-pink-500 rounded-md">送信</button>
        </div>
    </form>

</section>
@endsection
