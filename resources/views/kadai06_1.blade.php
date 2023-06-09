@extends("layouts.kadai")
@section("pageTitle","課題 6_1")
@section("title","Blade のテンプレートで表示する")
@section("content")

<h3 class="text-xl border-b-2 border-sky-400 pb-2 mb-10">投稿記事一覧</h3>
<a href="/kadai06_1/create">挿入</a>
@foreach ($articles as $a)
<div class="bg-white py-6 sm:py-8 lg:py-12">
    <div class="max-w-screen-2xl px-4 md:px-8 mx-auto">
      <div class="flex justify-between items-end gap-4 mb-6">
        <h2 class="text-gray-800 text-2xl lg:text-3xl font-bold">{{$a['title']}}</h2>
      </div>

      <div class="grid sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-x-4 md:gap-x-6 gap-y-6">
        <!-- product - start -->
        <div>
          <a href="#" class="group h-96 block bg-gray-100 rounded-lg overflow-hidden shadow-lg mb-2 lg:mb-3">
        @isset($a['thumbnails']['name'])
            <img src="{{ asset('/storage/article_images/'.$a['thumbnails']['name']) }}" loading="lazy" alt="写真" class="w-full h-full object-cover object-center group-hover:scale-110 transition duration-200" />
        @endisset
          </a>
          <div class="flex flex-col">
            <span class="text-gray-500"></span>
            <a href="#" class="text-gray-800 hover:text-gray-500 text-lg lg:text-xl font-bold transition duration-100">{{$a['body']}}</a>
          </div>
          <div>{{ $a['created_at'] }}</div>
        </div>

        <!-- product - end -->
      </div>
      <form action="/kadai06_1/{{ $a['id'] }}" method="POST">
        @method('DELETE')
        @csrf
        <input type="submit" class="" onclick="return confirm('レコードを削除します。よろしいですか？')" value="削除">
      </form>
      <a href="/kadai06_1/{{$a->id}}/edit">更新</a>
    </div>
  </div>
@endforeach
{{ $articles->links() }}

<section>
</section>
@endsection
