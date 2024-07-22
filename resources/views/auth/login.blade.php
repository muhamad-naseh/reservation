@extends('layouts.auth.app', ['title' => 'Login'])

@section('content')
    <form class="space-y-6" action="{{ route('login') }}" method="post">
        @csrf

        <div>
            <label for="email" class="block mb-2 text-sm font-medium text-slate-700 after:content-['*'] after:text-pink-600 after:ml-0.5">Your email</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}" placeholder="name@company.com"
                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5
                    focus:outline-none focus:ring-1 focus:ring-emerald-800 focus:border-emerald-800  placeholder:text-slate-400
                    invalid:text-pink-600 invalid:focus:border-pink-700 invalid:focus:ring-pink-700 peer @error('email') is-invalid @enderror"
            />
            @error('email')
            <p class="text-pink-500 text-sm font-normal invisible peer-invalid:visible">
                {{ $message }}
            </p>
            @enderror
        </div>

        <div>
            <label for="password" class="block mb-2 text-sm font-medium text-slate-700 after:content-['*'] after:text-pink-600 after:ml-0.5">Your password</label>
            <input type="password" name="password" id="password" placeholder="••••••••"
                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5
                    focus:outline-none focus:ring-1 focus:ring-emerald-800 focus:border-emerald-800  placeholder:text-slate-400
                    invalid:text-pink-600 invalid:focus:border-pink-700 invalid:focus:ring-pink-700 peer @error('password') is-invalid @enderror"
            />

            @error('password')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <button type="submit" class="mt-4 w-full text-white bg-emerald-700 hover:bg-emerald-900 focus:ring-4 focus:outline-none focus:ring-emerald-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Login to your account</button>
        <div class="text-sm font-medium text-gray-500 ">
            Not registered? <a href="{{ route('register') }}" class="text-emerald-900 font-medium hover:underline ">Create account</a>
        </div>
    </form>

@endsection
