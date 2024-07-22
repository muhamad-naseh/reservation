@extends('layouts.frontend.app', ['title' => 'Menu'])

@section('content')
    <!-- hero section -->
{{--    @include('components.landing.hero-section')--}}
    <!-- search section -->
    <x-landing.search-section :url="route('menu.index')" />
    <!-- menu section -->
    <div class="w-full bg-gray-100 p-3 ">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-5 container mx-auto my-5 items-start">
                @foreach ($menus as $menu)
                    <x-landing.menu-item :menu="$menu" />
                @endforeach
            </div>
    </div>
@endsection
