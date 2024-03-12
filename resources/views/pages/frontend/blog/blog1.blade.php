@extends("layouts.frontend")
@section("content")

<section class="container mx-auto p-10 md:py-20 px-0 md:p-10 md:px-0">
    <section class="relative px-10 md:p-0 transform duration-500 hover:shadow-2xl cursor-pointer hover:-translate-y-1 ">
        <img class="xl:max-w-6xl" src="{{ url('/frontend/images/content/b-1.jpg') }}" alt="">
        <div class="content bg-white p-2 pt-8 md:p-12 pb-12 lg:max-w-lg w-full lg:absolute top-48 right-5">
            <div class="flex justify-between font-bold text-sm">
                <p>Product Review</p>
                <p class="text-gray-400">17th March, 2023</p>
            </div>
            <h2 class="text-3xl font-semibold mt-4 md:mt-10">blanc instinc</h2>
            <p class="my-3 text-justify font-medium text-gray-700 leading-relaxed">Our tips for wearing perfume like a pro. Bonus: they’re super easy and long lasting!
<br>
#parfum #inspiredparfum #inspiredparfume #lokalbrand #parfume #parfummurah #parfumcowok #parfumcewek #parfumviral #parfumunisex #minyakwangi #blancinstinct #tips</p>
            <button class="mt-2 md:mt-5 p-3 px-5 bg-black text-white font-bold text-sm hover:bg-purple-800">Read
          More</button>
        </div>
    </section>
</section>

@endsection
