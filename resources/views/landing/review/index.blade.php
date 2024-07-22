@extends('layouts.frontend.app', ['title' => 'Review'])

@section('content')
    <!-- hero section -->
{{--    @include('components.landing.hero-section')--}}
    <!-- serach section -->
    <x-landing.search-section :url="route('review')" />
    <!-- review section -->
    <div class="w-full bg-gray-100 p-3 ">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-3 gap-4 container mx-auto my-5  items-start">
            @foreach ($reviews as $review)
                <div class="min-w-full bg-white rounded-lg shadow-lg">
                    <div class="flex justify-between p-4">
                        <div class="flex space-x-4">
                            <div>
                                <img src="{{ $review->user->avatar }}" alt=""
                                     class="object-cover w-12 h-12 rounded-full border">
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-600">{{ $review->user->name }}</h4>
                                <span class="text-xs text-gray-500">
                                        {{ Carbon\Carbon::parse($review->created_at)->diffForHumans() }}
                                    </span>
                            </div>
                        </div>
                        <div class="flex items-center space-x-2 text-yellow-500">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                 class="icon icon-tabler icon-tabler-star fill-yellow-500 w-5 h-5" width="24"
                                 height="24" viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor"
                                 fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path
                                    d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z">
                                </path>
                            </svg>
                            <span class="text-xl font-bold">
                                    {{ $review->rating }}
                                </span>
                        </div>
                    </div>
                    <div class="p-4 space-y-2 text-sm text-gray-500 border-b border-t">
                        <p class="text-justify">
                            {{ $review->review }}
                        </p>
                    </div>
                    <div class="p-4 text-gray-500 text-sm flex flex-col gap-2">
                        <p class="flex items-center gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                 class="icon icon-tabler icon-tabler-message-2 w-5 h-5" width="24" height="24"
                                 viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor" fill="none"
                                 stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path
                                    d="M12 20l-3 -3h-2a3 3 0 0 1 -3 -3v-6a3 3 0 0 1 3 -3h10a3 3 0 0 1 3 3v6a3 3 0 0 1 -3 3h-2l-3 3">
                                </path>
                                <line x1="8" y1="9" x2="16" y2="9"></line>
                                <line x1="8" y1="13" x2="14" y2="13"></line>
                            </svg>
                            Review Menu :
                        </p>
                        <a href="{{ route('menu.show', $review->menu->slug) }}"
                           class="underline underline-offset-1 font-semibold">
                            {{ $review->menu->name }}
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
