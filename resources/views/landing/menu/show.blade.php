@extends('layouts.frontend.app', ['title' => 'Menu Detail'])

@section('content')
    <div class="w-full bg-gray-100 p-5 md:p-20">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-3 items-center gap-4 md:gap-20">
                <div class="md:col-span-2">
                    <div class="flex flex-row gap-4 text-xs justify-center md:justify-start mt-10">
                        <div class="text-slate-400 flex items-center gap-2 ">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-users w-5 h-5"
                                 width="24" height="24" viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor"
                                 fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <circle cx="9" cy="7" r="4"></circle>
                                <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                <path d="M21 21v-2a4 4 0 0 0 -3 -3.85"></path>
                            </svg>
                            {{ $enrolled }} Buyer
                        </div>
                        <div class="text-slate-400 flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-message-2 w-5 h-5"
                                 width="24" height="24" viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor"
                                 fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path
                                    d="M12 20l-3 -3h-2a3 3 0 0 1 -3 -3v-6a3 3 0 0 1 3 -3h10a3 3 0 0 1 3 3v6a3 3 0 0 1 -3 3h-2l-3 3">
                                </path>
                                <line x1="8" y1="9" x2="16" y2="9"></line>
                                <line x1="8" y1="13" x2="14" y2="13"></line>
                            </svg> {{ $menu->reviews()->count() }} Review
                        </div>
                    </div>
                    <h1 class="text-lg font-bold leading-none tracking-tight lg:text-3xl py-4 text-center md:text-start">
                        {{ $menu->name }}
                    </h1>
                    <p class="text-sm text-center md:text-base md:text-justify text-gray-400">{{ $menu->description }}
                    </p>
                    <div class="mt-5">
                        <h1 class="text-3xl md:text-6xl text-green-500 font-mono text-center md:text-start">
                            <sup>Rp</sup>{{ $menu->price }}
                        </h1>
                        <div class="flex flex-row gap-4 items-center my-6 justify-center md:justify-start">
                            <form action="{{ route('cart.store', $menu->id) }}" method="POST">
                                @csrf
                                <button type="submit"
                                        class="px-4 py-2 rounded-lg bg-green-800 text-white hover:scale-110 hover:duration-200 flex items-center gap-2 text-sm border border-green-600">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                         class="icon icon-tabler icon-tabler-basket w-5 h-5" width="24"
                                         height="24" viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor"
                                         fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <polyline points="7 10 12 4 17 10"></polyline>
                                        <path d="M21 10l-2 8a2 2.5 0 0 1 -2 2h-10a2 2.5 0 0 1 -2 -2l-2 -8z"></path>
                                        <circle cx="12" cy="15" r="2"></circle>
                                    </svg>
                                    Beli Sekarang
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div
                    class="flex text-center justify-center items-center row-start-1 md:row-auto mx-auto sm:mx-0 md:col-span-1">
                    <img src={{ $menu->image }} alt="{{ $menu->title }}" class="w-1/2 md:w-3/4 rounded-lg" />
                </div>
            </div>
        </div>
    </div>
@endsection
