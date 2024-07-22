@extends('layouts.frontend.app', ['title' => 'Homepage'])

@section('content')
    @include('layouts.frontend.partials.hero')
    <section class="bg-gray-100 p-10 w-full">
        <div class="flex flex-col gap-2 text-center items-center mb-10">
            <h1 class="text-2xl font-extrabold leading-none tracking-tight">MENU</h1>
            <p class="text-sm text-gray-400 lg:mx-96">
                Kami menyediakan berbagai macam menu makanan dan minuman dengan harga yang terjangkau.
            </p>
            <div class="w-60 bg-slate-800 h-1 mt-2"></div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-5 container mx-auto my-5 items-start">
            @foreach ($menus as $menu)
                <x-landing.menu-item :menu="$menu" />
            @endforeach
        </div>
        <div class="flex justify-center text-center mt-14">
            <a href="{{ route('menu.index') }}" class="inline-flex items-center justify-center w-full px-5 py-3 text-sm font-medium text-center text-gray-900 border border-gray-200 rounded-lg sm:w-auto hover:bg-gray-100 focus:ring-4 focus:ring-gray-100">
                <span class="mr-1">Lihat Semua Menu</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-narrow-right w-5 h-5"
                     width="24" height="24" viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor"
                     fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <line x1="15" y1="16" x2="19" y2="12"></line>
                    <line x1="15" y1="8" x2="19" y2="12"></line>
                </svg>
            </a>
        </div>
    </section>
@endsection
