@extends("layouts.frontend")
@section("content")

<div class="relative bg-gray-50 px-6 pt-16 pb-20 lg:px-8 lg:pt-24 lg:pb-28">
  <div class="absolute inset-0">
    <div class="h-1/3 bg-white sm:h-2/3"></div>
  </div>
  <div class="relative mx-auto max-w-7xl">
    <div class="text-center">
      <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">blancinstinc</h2>
      <p class="mx-auto mt-3 max-w-2xl text-xl text-gray-500 sm:mt-4">
      𝘽𝙡𝙚𝙣𝙙 𝙊𝙛 𝙁𝙧𝙖𝙜𝙧𝙖𝙣𝙘𝙚 𝙄𝙣𝙨𝙥𝙞𝙧𝙚𝙙 𝙗𝙮 𝙄𝙣𝙨𝙩𝙞𝙣𝙘
🇲🇨 Local Supported</p>
    </div>
    <div class="mx-auto mt-12 grid max-w-lg gap-5 lg:max-w-none lg:grid-cols-3">

      <div class="flex flex-col overflow-hidden rounded-lg shadow-lg">
        <div class="flex-shrink-0">
        <img class="h-48 w-full object-cover" src="{{ url('/frontend/images/content/b-1.jpg') }}" alt="">
      </div>
        <div class="flex flex-1 flex-col justify-between bg-white p-6">
          <div class="flex-1">
            <p class="text-sm font-medium text-indigo-600">
              <a href="{{route("blog1")}}" class="hover:underline">Article</a>
            </p>

            <a href="{{route("blog1")}}" class="mt-2 block">
              <p class="text-xl font-semibold text-gray-900">Apply blanc instinc</p>
                <p class="mt-3 text-base text-gray-500">Our tips for wearing perfume like a pro. Bonus: they’re super easy and long lasting!

#parfum #inspiredparfum #inspiredparfume #lokalbrand #parfume #parfummurah #parfumcowok #parfumcewek #parfumviral #parfumunisex #minyakwangi #blancinstinct #tips</p>
            </a>
          </div>

        </div>
      </div>

      <div class="flex flex-col overflow-hidden rounded-lg shadow-lg">
        <div class="flex-shrink-0">
          <img class="h-48 w-full object-cover" src="{{ url('/frontend/images/content/b-3.jpg') }}" alt="">
        </div>
        <div class="flex flex-1 flex-col justify-between bg-white p-6">
          <div class="flex-1">
            <p class="text-sm font-medium text-indigo-600">
              <a href="{{route("blog2")}}" class="hover:underline">Video</a>
            </p>
            <a href="{{route("blog2")}}" class="mt-2 block">
              <p class="text-xl font-semibold text-gray-900">our vidio</p>
              <p class="mt-3 text-base text-gray-500">Blanc Instinc is a representation of aroma by combining art with a wild, young and free 🔥

                    Let’s makin in hot 💥

                    #lokalbrand #parfume #blancinstinct #extraitdeparfum.</p>
            </a>
          </div>
          <div class="mt-6 flex items-center">
            <div class="flex-shrink-0">
              <a href="{{route("blog3")}}">
                <span class="sr-only">Brenna Goyette</span>
             </a>
            </div>
            
          </div>
        </div>
      </div>

      <div class="flex flex-col overflow-hidden rounded-lg shadow-lg">
        <div class="flex-shrink-0">
          <img class="h-48 w-full object-cover" src="{{ url('/frontend/images/content/b-2.jpg') }}" alt="">
        </div>
        <div class="flex flex-1 flex-col justify-between bg-white p-6">
          <div class="flex-1">
            <p class="text-sm font-medium text-indigo-600">
              <a href="{{route("blog3")}}" class="hover:underline">Our Gallery</a>
            </p>
            <a href="#{{route("blog3")}}" class="mt-2 block">
              <p class="text-xl font-semibold text-gray-900">Gallery blanc instinc</p>
              <p class="mt-3 text-base text-gray-500">Kualitas nggak kalah sama yang mahal-mahal. Yuk, coba dan bikin harimu makin keren!
</p>
            </a>
          </div>
          <div class="mt-6 flex items-center">
            <div class="flex-shrink-0">
              <a href="#">
                <span class="sr-only">Daniela Metz</span>
                <img class="h-10 w-10 rounded-full" src="{{ url('/frontend/images/content/b-6.jpg') }}" alt="">
              </a>
            </div>
            <div class="ml-3">
              <p class="text-sm font-medium text-gray-900">
                <a href="#" class="hover:underline">Daniela Metz</a>
              </p>
              <div class="flex space-x-1 text-sm text-gray-500">
                <time datetime="2020-02-12">Feb 12, 2020</time>
                <span aria-hidden="true">·</span>
                <span>11 min read</span>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

@endsection