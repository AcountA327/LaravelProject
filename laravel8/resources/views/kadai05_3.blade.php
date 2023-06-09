@extends("layouts.kadai")
@section("pageTitle","課題 5_3")
@section("title","Blade のテンプレートで表示する")
@section("content")

<div class="bg-white py-6 sm:py-8 lg:py-12">
    <div class="max-w-screen-2xl px-4 md:px-8 mx-auto">
      <!-- text - start -->
      <div class="mb-10 md:mb-16">
        <h2 class="text-gray-800 text-2xl lg:text-3xl font-bold text-center mb-4 md:mb-6">Collections</h2>

        <p class="max-w-screen-md text-gray-500 md:text-lg text-center mx-auto">This is a section of some simple filler text, also known as placeholder text. It shares some characteristics of a real written text but is random or otherwise generated.</p>
      </div>
      <!-- text - end -->

      <div class="grid sm:grid-cols-2 gap-6">
        <!-- product - start -->
        @foreach ($photoshow as $value)
        <a href="#" class="group h-80 flex items-end bg-gray-100 rounded-lg overflow-hidden shadow-lg relative p-4">
          <img src="{{ asset('/storage/kadai05_images/'.$value) }}" loading="lazy" alt="Photo by Fakurian Design" class="w-full h-full object-cover object-center absolute inset-0 group-hover:scale-110 transition duration-200" />

          <div class="bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50 absolute inset-0 pointer-events-none"></div>
          @endforeach
          <div class="flex flex-col relative">
            <span class="text-gray-300">Home</span>
            <span class="text-white text-lg lg:text-xl font-semibold">Decoration</span>
          </div>
        </a>
        <!-- product - end -->

        <!-- product - start -->
        <a href="#" class="group h-80 flex items-end bg-gray-100 rounded-lg overflow-hidden shadow-lg relative p-4">
          <img src="https://images.unsplash.com/photo-1620241608701-94ef138c7ec9?auto=format&q=75&fit=crop&w=750" loading="lazy" alt="Photo by Fakurian Design" class="w-full h-full object-cover object-center absolute inset-0 group-hover:scale-110 transition duration-200" />

          <div class="bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50 absolute inset-0 pointer-events-none"></div>

          <div class="flex flex-col relative">
            <span class="text-gray-300">Modern</span>
            <span class="text-white text-lg lg:text-xl font-semibold">Furniture</span>
          </div>
        </a>
        <!-- product - end -->
      </div>
    </div>
  </div>
@endsection
