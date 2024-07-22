<section class="bg-white ">
    <div class="grid max-w-screen-2xl px-4 pt-20 pb-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12 lg:pt-28">
        <div class="mr-auto place-self-center lg:col-span-7">
            <h1 class="max-w-2xl mb-4 text-4xl font-extrabold leading-none tracking-tight text-emerald-900 md:text-5xl xl:text-6xl ">Discover Your <br>Favourite Caffe.</h1>
            <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-lg ">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
            <div class="space-y-4 sm:flex sm:space-y-0 sm:space-x-4">
                <a href="{{ route('menu.index') }}" class="inline-flex items-center justify-center w-full px-5 py-3 text-sm font-medium text-center text-gray-900 border border-gray-200 rounded-lg sm:w-auto hover:bg-gray-100 focus:ring-4 focus:ring-gray-100">
                    Explore More
                </a>
            </div>
        </div>
        <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
            <img src="{{ asset('storage/hero/image5.png') }}" alt="hero image" >
        </div>
    </div>
</section>
<section class="bg-white">
    <div class="max-w-screen-2xl px-4 pb-5 mx-auto mt-5 ">
        <div class="grid grid-cols-12 gap-2 invisible lg:visible ">
            <div class="font-light text-gray-500">
                The best menu
            </div>
            <div class="col-span-10 mt-3">
                <hr>
            </div>
            <div class="font-light text-gray-500 inline-flex items-center">
                explore
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="1"  stroke-linecap="round"
                      stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-circle-arrow-down ml-2"><path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" /><path d="M8 12l4 4" /><path d="M12 8v8" /><path d="M16 12l-4 4" />
                </svg>
            </div>
        </div>
    </div>
</section>
