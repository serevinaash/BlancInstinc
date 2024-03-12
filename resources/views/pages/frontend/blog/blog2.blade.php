@extends("layouts.frontend")
@section("content")
<div class="bg-gray-50">

    <main class="w-full flex justify-center flex-wrap sm:flex-row-reverse gap-6 p-4 md:pt-10">


        <div class="px-4 max-w-[640px]">

    
            <h1
                class="md:text-start text-center pt-2 font-extrabold text-[36px] md:text-[50px] leading-10 md:leading-[54px]">
                #1 blanc instinc
                <br>
                        </h1>

            <p class="md:text-start text-center py-8 text-xl md:text-2xl font-bold text-gray-600">
            Blanc Instinc is a representation of aroma by combining art with a wild
     young and free 🔥Let’s makin in hot 💥
            </p>


            <div class="flex flex-col items-center md:items-start">

                <!-- <img src="./dist/static/playstore.svg" class="h-32 py-6" alt=""> -->

                

                <div class="flex items-center gap-6 mt-4 pl-1">
                    <a class="text-gray-700 hover:text-orange transition-colors"
                        href="https://www.instagram.com/blancinstinc/">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="h-8">
                            <path fill="currentColor"
                                d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z">
                            </path>
                        </svg>
                    </a>
                    
                   
                </div>

            </div>


        </div>


        <div class="relative max-w-lg flex justify-center items-center">

            <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" width="320" height="640"
                style="box-shadow: 10px 10px 5px 12px rgb(209, 218, 218)"
                class="rounded rounded-xl border border-4 border-black" type="text/html"
                src="{{ url('/frontend/images/content/v.mp4') }}">
            </iframe>

            <span class="absolute -right-1 top-28 border border-4 border-black h-10 rounded-md"></span>
            <span class="absolute -right-1 top-[220px] border border-4 border-black h-24 rounded-md"></span>

            <!-- <img src="./dist/static/watch_on_youtube.png" class="h-[600px]" alt=""> -->
        </div>


    </main>

</div>

@endsection