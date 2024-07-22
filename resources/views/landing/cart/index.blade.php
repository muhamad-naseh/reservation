@extends('layouts.frontend.app', ['title' => 'Cart'])

@section('content')
    <div class="w-full p-2 md:p-16 bg-gray-200">
        <div class="container mx-auto p-3 py-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">
                <div class="col-span-12 lg:col-span-8 drop-shadow-xl">
                    <x-landing.cart-table :carts="$carts" :total="$carts->sum('total')" />
                </div>
                <div class="col-span-12 lg:col-span-4 drop-shadow-xl">
                    <x-landing.cart-form :user="auth()->user()" :total="$carts->sum('total')" />
                </div>

                <div ></div>
            </div>
        </div>
    </div>
@endsection
