<section class="w-full p-6 bg-gray-100 border-t border-dashed border-gray-300">
    <div class="flex flex-col items-center justify-center p-4 space-y-8 md:p-10 md:px-24 xl:px-48">
        <h1 class="text-2xl md:text-3xl font-bold leading-none tracking-tight text-center ">
            TUNGGU APA LAGI ?
        </h1>
        <p class="text-sm md:text-base font-medium text-center text-gray-400">
            Pesan makanan dan minuman sekarang!
        </p>
        <div class="flex flex-col space-y-4 sm:space-y-0 sm:flex-row sm:space-x-8">
            <a href="{{ route('register') }}" class="inline-flex items-center justify-center w-full px-5 py-3 text-sm font-medium text-center text-gray-900 border border-gray-200 rounded-lg sm:w-auto hover:bg-gray-100 focus:ring-4 focus:ring-gray-100">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-plus" width="24"
                     height="24" viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor" fill="none"
                     stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <circle cx="9" cy="7" r="4"></circle>
                    <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                    <path d="M16 11h6m-3 -3v6"></path>
                </svg>
                <span class="mr-1">Daftar Gratis!</span>
            </a>
        </div>
    </div>
</section>
<footer class="bg-white">
    <div class="container px-6 py-6 mx-auto">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 justify-items-center md:justify-items-start">
            <div class="text-center sm:text-start col-span-2">
                <a href="/" class=" text-2xl font-medium text-center text-gray-400">
                    Vill Garden
                </a>
                <p class="max-w-md mt-2 text-sm text-center md:text-start text-gray-400">
                    Website Reservasi Makanan dan Minuman.
                </p>
            </div>
            <div>
                <div>
                    <h3 class="text-gray-400  font-medium uppercase">Informasi</h3>
                    <a href="#" class="block mt-2 text-sm text-gray-400 hover:underline">
                        Tentang Kami
                    </a>
                    <a href="#" class="block mt-2 text-sm text-gray-400 hover:underline">FAQ</a>
                    <a href="#" class="block mt-2 text-sm text-gray-400 hover:underline">Tim Kami</a>
                </div>
            </div>
            <div>
                <div>
                    <h3 class="text-gray-400 font-medium uppercase">Komunitas</h3>
                    <a href="#" class="block mt-2 text-sm text-gray-400 hover:underline">
                        Ulasan Member
                    </a>
                    <a href="#" class="block mt-2 text-sm text-gray-400 hover:underline">Grup Telegram</a>
                    <a href="#" class="block mt-2 text-sm text-gray-400 hover:underline">Komunitas Discord</a>
                </div>
            </div>
        </div>
        <hr class="h-px my-6 bg-white border-none">
        <div>
            <p class="text-center text-gray-300">
                © Vill Garden {{ date('Y') }}
            </p>
        </div>
    </div>
</footer>
