@extends('layouts.auth.app', ['title' => 'Register'])

@section('content')
    <form class="space-y-6" action="{{ route('register') }}" method="post">
        @csrf
        <div>
            <label for="name" class="block mb-2 text-sm font-medium text-slate-700 after:content-['*'] after:text-pink-600 after:ml-0.5">Your name</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}" placeholder="John Mark"
                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5
                    focus:outline-none focus:ring-1 focus:ring-emerald-800 focus:border-emerald-800  placeholder:text-slate-400
                    invalid:text-pink-600 invalid:focus:border-pink-700 invalid:focus:ring-pink-700 peer @error('email') is-invalid @enderror"
            />
            @error('name')
            <div class="text-pink-500 text-sm font-normal invisible peer-invalid:visible">
                {{ $message }}
            </div>
            @enderror
        </div>

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

        <div>
            <label for="password" class="block mb-2 text-sm font-medium text-slate-700 after:content-['*'] after:text-pink-600 after:ml-0.5">Your password</label>
            <input type="password" name="password_confirmation" id="password" placeholder="••••••••"
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

        <button type="submit" class="w-full text-white bg-emerald-700 hover:bg-emerald-900 focus:ring-4 focus:outline-none focus:ring-emerald-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Create account</button>
        <div class="text-sm font-medium text-gray-500 ">
            Already have on? <a href="{{ route('login') }}" class="text-emerald-900 font-medium hover:underline ">Sign In your account</a>
        </div>
    </form>

{{--    <div class="card-body">--}}
{{--        <p class="login-box-msg">Sign up to start your session</p>--}}

{{--        <form action="{{ route('register') }}" method="post">--}}
{{--            @csrf--}}
{{--            <div class="input-group mb-3">--}}
{{--                <input type="name" class="form-control @error('name') is-invalid @enderror" placeholder="Full Name"--}}
{{--                       name="name" value="{{ old('name') }}">--}}
{{--                <div class="input-group-append">--}}
{{--                    <div class="input-group-text">--}}
{{--                        <span class="fas fa-user"></span>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                @error('name')--}}
{{--                <div class="invalid-feedback">--}}
{{--                    {{ $message }}--}}
{{--                </div>--}}
{{--                @enderror--}}
{{--            </div>--}}
{{--            <div class="input-group mb-3">--}}
{{--                <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email"--}}
{{--                       name="email" value="{{ old('email') }}">--}}
{{--                <div class="input-group-append">--}}
{{--                    <div class="input-group-text">--}}
{{--                        <span class="fas fa-envelope"></span>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                @error('email')--}}
{{--                <div class="invalid-feedback">--}}
{{--                    {{ $message }}--}}
{{--                </div>--}}
{{--                @enderror--}}
{{--            </div>--}}
{{--            <div class="input-group mb-3">--}}
{{--                <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password"--}}
{{--                       name="password">--}}
{{--                <div class="input-group-append">--}}
{{--                    <div class="input-group-text">--}}
{{--                        <span class="fas fa-lock"></span>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                @error('password')--}}
{{--                <div class="invalid-feedback">--}}
{{--                    {{ $message }}--}}
{{--                </div>--}}
{{--                @enderror--}}
{{--            </div>--}}
{{--            <div class="input-group mb-3">--}}
{{--                <input type="password" class="form-control @error('password') is-invalid @enderror"--}}
{{--                       placeholder="Password Confirmation" name="password_confirmation">--}}
{{--                <div class="input-group-append">--}}
{{--                    <div class="input-group-text">--}}
{{--                        <span class="fas fa-check"></span>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                @error('password')--}}
{{--                <div class="invalid-feedback">--}}
{{--                    {{ $message }}--}}
{{--                </div>--}}
{{--                @enderror--}}
{{--            </div>--}}
{{--            <button type="submit" class="btn btn-primary btn-block">Sign In</button>--}}
{{--        </form>--}}
{{--        <div class="mt-4">--}}
{{--            <p class="mb-0">--}}
{{--                <a href="{{ route('login') }}" class="text-center">Already have one</a>--}}
{{--            </p>--}}
{{--        </div>--}}
{{--    </div>--}}
@endsection
