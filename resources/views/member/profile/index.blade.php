@extends('layouts.backend.app', ['title' => 'Profile'])

@section('content')
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-6">
        <div class="bg-white border border-gray-100 shadow-md shadow-black/5 p-6 rounded-md h-96">
            <div class="flex flex-col items-center pb-10">
                <img class="w-24 h-24 mb-2 rounded-full shadow-lg mt-7 object-cover" src="{{ $user->avatar }}" alt="avatar image"/>
                <span class="text-lg text-gray-700 font-bold">{{ $user->name }}</span>
            </div>
            <div class="flex items-center border-b p-3">
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-phone"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" /></svg>
                <span class="ml-4">{{ $user->phone }}</span>
            </div>
            <div class="flex items-center border-b p-3">
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-home"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l-2 0l9 -9l9 9l-2 0" /><path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" /><path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" /></svg>
                <span class="ml-4">{{ $user->address }}</span>
            </div>
        </div>

        <div class="bg-white border border-gray-100 shadow-md shadow-black/5 p-6 rounded-md col-span-2">
            <div class="flex justify-between mb-4 items-start">
                <div class="font-medium uppercase">Data Personal</div>
            </div>
            <div class="flex items-center mb-4 order-tab">
                <button type="button" data-tab="user" data-tab-page="page_1" class="bg-gray-50 text-sm font-medium text-gray-400 py-2 px-4 rounded-tl-md rounded-bl-md hover:text-gray-600 active">Profile</button>
                <button type="button" data-tab="user" data-tab-page="page_2" class="bg-gray-50 text-sm font-medium text-gray-400 py-2 px-4 rounded-tr-md rounded-br-md hover:text-gray-600">Password</button>
            </div>

            <div class="overflow-x-auto">
                <form class="relative w-full p-4" data-tab-for="user" data-page="page_1"
                      action="{{ route('member.profile.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-5">
                        <label for="user_avatar" class="block mb-2 text-sm font-medium text-gray-900 " >Avatar</label>
                        <input type="file" id="user_avatar" name="avatar" value="{{ $user->avatar }}" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 " aria-describedby="user_avatar_help"  >
                    </div>

                    <div class="mb-5">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 ">Name</label>
                        <input type="text" id="name" name="name" value="{{ $user->name }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                    </div>

                    <div class="mb-5">
                        <label for="username" class="block mb-2 text-sm font-medium text-gray-900 ">Username</label>
                        <input type="text" id="username" name="username" value="{{ $user->username }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                    </div>

                    <div class="mb-5">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Email</label>
                        <input type="email" id="email" name="email" value="{{ $user->email }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " disabled>
                    </div>

                    <div class="mb-5">
                        <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 ">Phone</label>
                        <input type="text" id="phone" name="phone" value="{{ $user->phone }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                    </div>

                    <div class="mb-5">
                        <label for="address" class="block mb-2 text-sm font-medium text-gray-900 ">Address</label>
                        <input type="text" id="address" name="address" value="{{ $user->address }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                    </div>

                    <div class="mb-5">
                        <button type="submit" class="flex items-center text-gray-900 bg-white hover:bg-gray-100 border border-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 drop-shadow-md">
                            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-device-floppy"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6 4h10l4 4v10a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2" /><path d="M12 14m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M14 4l0 4l-6 0l0 -4" /></svg>
                            <span class="ml-2 whitespace-nowrap font-semibold">Save Data</span>
                        </button>
                    </div>
                </form>

                <form class="relative w-full p-4 hidden" data-tab-for="user" data-page="page_2"
                      action="{{ route('member.profile.password', $user->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-5">
                        <label for="current_password" class="block mb-2 text-sm font-medium text-gray-900 ">Current Password</label>
                        <input type="password" id="current_password" name="current_password" value="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                    </div>

                    <div class="mb-5">
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 ">Password</label>
                        <input type="password" id="password" name="password" value="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                    </div>

                    <div class="mb-5">
                        <label for="password_confirmation" class="block mb-2 text-sm font-medium text-gray-900 ">Password Confirrmation</label>
                        <input type="password" id="password_confirmation" name="password_confirmation" value="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                    </div>

                    <div class="mb-5">
                        <button type="submit" class="flex items-center text-gray-900 bg-white hover:bg-gray-100 border border-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 drop-shadow-md">
                            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-device-floppy"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6 4h10l4 4v10a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2" /><path d="M12 14m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M14 4l0 4l-6 0l0 -4" /></svg>
                            <span class="ml-2 whitespace-nowrap font-semibold">Save Data</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
