@extends('layouts.coba.app', ['title' => 'formulir'])

@section('content')
    <div class="p-4 text-2xl font-bold uppercase text-gray-900">
        <div class="text-center">
            Add Menu
        </div>
    </div>
    <form class="relative w-full p-4">
        <div class="mb-5">
            <label for="select" class="block mb-2 text-sm font-medium text-gray-900">Select your country</label>
            <select id="select" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">

                <option>United States</option>
                <option>Canada</option>
                <option>France</option>
                <option>Germany</option>
            </select>
        </div>

        <div class="mb-5">
            <label for="input" class="block mb-2 text-sm font-medium text-gray-900 ">Base input</label>
            <input type="text" id="input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
        </div>

        <div class="mb-5">
            <label class="block mb-2 text-sm font-medium text-gray-900 " for="user_avatar">Upload file</label>
            <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 " aria-describedby="user_avatar_help" id="user_avatar" type="file">
        </div>

        <div class="mb-5">
            <label for="message" class="block mb-2 text-sm font-medium text-gray-900 ">Your message</label>
            <textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Description..."></textarea>
        </div>

        <div class="mb-5">
            <button type="button" class="flex items-center text-gray-900 bg-white hover:bg-gray-100 border border-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 drop-shadow-md">
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-device-floppy"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6 4h10l4 4v10a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2" /><path d="M12 14m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M14 4l0 4l-6 0l0 -4" /></svg>
                <span class="ml-2 whitespace-nowrap font-semibold">Save Data</span>
            </button>
        </div>
    </form>
@endsection
