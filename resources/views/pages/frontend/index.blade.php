@extends("layouts.frontend")
@section("content")
<!-- START: HERO -->
<section class="flex items-center hero">
      <div
        class="w-full absolute z-20 inset-0 md:relative md:w-1/2 text-center flex flex-col justify-center hero-caption"
      >
        <h1 class="text-3xl md:text-5xl leading-tight font-semibold">
        Blend Of <br class="" />Fragrance
        </h1>
        <h2 class="px-8 text-base md:px-0 md:text-lg my-6 tracking-wide">
        Pada akhirnya ini bukan hanya soal aroma, tapi juga soal mengingatkan akan sumber kekuatan 
        dalam diri sendiri mengajak untuk
          <br class="hidden lg:block" />percaya pada naluri bawaan dan lebih bebas berekspresi tanpa ragu
        </h2>
        <div>
          <a
            href="#browse-the-room"
            class="bg-pink-400 text-black hover:bg-black hover:text-pink-400 rounded-full px-8 py-3 mt-4 inline-block flex-none transition duration-200"
            >Explore Now</a
          >
        </div>
      </div>
      <div class="w-full inset-0 md:relative md:w-1/2">
        <div class="relative hero-image">
      
          <img
            src="{{url("/frontend/images/content/background2.jpg")}}"
            alt="hero 1"
            class="absolute inset-0 md:relative w-full h-full object-cover object-center"
          />
        </div>
      </div>
</section>
<!-- END: HERO -->

<!-- START: BROWSE THE ROOM -->
<section class="flex bg-gray-100 py-16 px-4" id="browse-the-room">
      <div class="container mx-auto">
        <div class="flex flex-start mb-4">
          <h3 class="text-2xl capitalize font-semibold">
            browse the parfume <br class="" />that we parfume for you
          </h3>
        </div>
        <div class="grid grid-rows-2 grid-cols-9 gap-4">
          <div
            class="relative col-span-9 row-span-1 md:col-span-4 card"
            style="height: 180px"
          >
            <div class="card-shadow rounded-xl">
              <img
                src="/frontend/images/content/bannerg.png"
                alt=""
                class="w-full h-full object-cover object-center overlay overflow-hidden rounded-xl"
              />
            </div>
            <div
              class="overlay left-0 top-0 bottom-0 flex justify-center flex-col pl-48 md:pl-72"
            >
            </div>
            <a href="#" class="stretched-link">
              <!-- fake children -->
            </a>
          </div>
          <div
            class="relative col-span-9 row-span-1 md:col-span-2 md:row-span-2 card"
          >
            <div class="card-shadow rounded-xl">
              <img
                src="/frontend/images/content/igee.png"
                alt=""
                class="w-full h-full object-cover object-center overlay overflow-hidden rounded-xl"
              />
            </div>
            <div
              class="overlay right-0 left-0 top-0 bottom-0 md:bottom-auto flex justify-center md:items-center flex-col pl-48 md:pl-0 pt-0 md:pt-12"
            >
            <h5 class="text-lg font-semibold">Instagram</h5>
            </div>
            <a href="https://www.instagram.com/blancinstinc" class="stretched-link">
              <!-- fake children -->
            </a>
          </div>
          <div
            class="relative col-span-9 row-span-1 md:col-span-3 md:row-span-2 card"
          >
            <div class="card-shadow rounded-xl">
              <img
                src="/frontend/images/content/reval.png"
                alt=""
                class="w-full h-full object-cover object-center overlay overflow-hidden rounded-xl"
              />
            </div>
            <div
              class="overlay right-0 left-0 top-0 bottom-0 md:bottom-auto flex justify-center md:items-center flex-col pl-48 md:pl-0 pt-0 md:pt-12"
            >
            </div>
            <a href="#" class="stretched-link">
              <!-- fake children -->
            </a>
          </div>
          <div class="relative col-span-9 row-span-1 md:col-span-4 card">
            <div class="card-shadow rounded-xl">
              <img
                src="/frontend/images/content/s.png"
                alt=""
                class="w-full h-full object-cover object-center overlay overflow-hidden rounded-xl"
              />
            </div>
            <div
              class="overlay left-0 top-0 bottom-0 flex justify-center flex-col pl-48 md:pl-72"
            >
             </div>
            <a href="https://shopee.co.id/blancinstinc" class="stretched-link">
              <!-- fake children -->
            </a>
          </div>
        </div>
      </div>
</section>
<!-- END: BROWSE THE ROOM -->


<div class="text-center p-10">
    <h1 class="font-bold text-4xl mb-4">Parfum For You</h1>
 
</div>

<!-- ✅ Grid Section - Starts Here 👇 -->
<div class="text-center p-10">
<section id="Projects" class="w-fit mx-auto grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 justify-items-center justify-center gap-y-20 gap-x-14 mt-10 mb-5 ">
    
    @foreach($products as $product)
        <!--   ✅ Product card - Starts Here 👇 -->
        <div class="w-72 bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl">
            <a href="{{ route('details', $product->slug) }}">
                <img src="{{ $product->galleries()->exists() ? Storage::url($product->galleries->first()->url) : 'placeholder_image_url' }}" alt="{{ $product->name }}" class="h-80 w-72 object-cover rounded-t-xl" />
                <div class="px-4 py-3 w-72">
                    <span class="text-gray-400 mr-3 uppercase text-xs">Brand</span>
                    <p class="text-lg font-bold text-black truncate block capitalize">{{ $product->name }}</p>
                    <div class="flex items-center">
                        <p class="text-lg font-semibold text-black cursor-auto my-3">IDR {{ number_format($product->price) }}</p>
                        <div class="ml-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-bag-plus" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M8 7.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-1.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5z" />
                                <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <!--   🛑 Product card - Ends Here  -->
    @endforeach
    
</section>

<!-- 🛑 Grid Section - Ends Here -->


<!-- END: CLIENTS -->
@endsection