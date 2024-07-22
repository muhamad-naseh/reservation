@extends('layouts.backend.app', ['title' => 'Menu Detail'])

@section('content')
    <div class="p-2 mt-5">
        <div class="px-4 py-6 sm:px-0 bg-gray-100">
            <p class=" ml-4 max-w-2xl text-lg leading-6 text-gray-500 font-bold uppercase">Menu Detail</p>
        </div>
        <div class=" border-t border-gray-100">
            <dl class="divide-y divide-gray-100">
                <div class="px-4 py-6 sm:grid sm:grid-cols-4 sm:gap-4 sm:px-0">
                    <dt class="ml-4 text-sm font-medium leading-6 text-gray-900">Category</dt>
                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-3 sm:mt-0">{{ $menu->category->name }}</dd>
                </div>
                <div class="px-4 py-6 sm:grid sm:grid-cols-4 sm:gap-4 sm:px-0">
                    <dt class="ml-4 text-sm font-medium leading-6 text-gray-900">Name</dt>
                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-3 sm:mt-0"> {{ $menu->name }}</dd>
                </div>
                <div class="px-4 py-6 sm:grid sm:grid-cols-4 sm:gap-4 sm:px-0">
                    <dt class="ml-4 text-sm font-medium leading-6 text-gray-900">Price</dt>
                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-3 sm:mt-0"> {{ $menu->price }}</dd>
                </div>
                <div class="px-4 py-6 sm:grid sm:grid-cols-4 sm:gap-4 sm:px-0">
                    <dt class="ml-4 text-sm font-medium leading-6 text-gray-900">Image</dt>
                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-3 sm:mt-0"><img src="{{ $menu->image }}" class="img-fluid" width="500"></dd>
                </div>
                <div class="px-4 py-6 sm:grid sm:grid-cols-4 sm:gap-4 sm:px-0">
                    <dt class="ml-4 text-sm font-medium leading-6 text-gray-900">Description</dt>
                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-3 sm:mt-0"> {{ $menu->description }}</dd>
                </div>
            </dl>
        </div>
    </div>
@endsection
