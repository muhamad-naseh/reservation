@extends('layouts.coba.app', ['title' => 'tabel 1'])

@section('content')
    <div class="relative overflow-x-auto sm:rounded-lg ">
        <div class="p-4 text-2xl font-bold uppercase text-gray-900">
            <div class="mb-7 text-center">
                List Menu
            </div>
            <a href="#">
                <button type="button" class="flex items-center text-gray-900 bg-white hover:bg-gray-100 border border-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 drop-shadow-md">
                    <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-plus"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 5l0 14" /><path d="M5 12l14 0" /></svg>
                    <span class="ml-2 whitespace-nowrap font-semibold">Add Data</span>
                </button>
            </a>
        </div>

        <div class="p-4 drop-shadow-md">
            <table class="w-full text-sm text-left text-gray-500 p-3">
                <thead class="text-xs text-gray-700 uppercase bg-gray-100 ">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Product name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Color
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Category
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Price
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
                </thead>
                <tbody>
                <tr class="bg-white border-b">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        Apple MacBook Pro 17"
                    </th>
                    <td class="px-6 py-4">
                        Silver
                    </td>
                    <td class="px-6 py-4">
                        Laptop
                    </td>
                    <td class="px-6 py-4">
                        $2999
                    </td>
                    <td class="px-6 py-4">
                        <a href="#" class="text-sm font-medium text-blue-600 hover:underline">Detail</a>
                        <a href="#" class="text-sm font-medium text-yellow-500 hover:underline ml-2 mr-2">Edit</a>
                        <a href="#" class="text-sm font-medium text-pink-700 hover:underline">hapus</a>
                    </td>
                </tr>
                <tr class="bg-white border-b">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        Apple MacBook Pro 17"
                    </th>
                    <td class="px-6 py-4">
                        Silver
                    </td>
                    <td class="px-6 py-4">
                        Laptop
                    </td>
                    <td class="px-6 py-4">
                        $2999
                    </td>
                    <td class="px-6 py-4">
                        <a href="#" class="text-sm font-medium text-blue-600 hover:underline">Detail</a>
                        <a href="#" class="text-sm font-medium text-yellow-500 hover:underline ml-2 mr-2">Edit</a>
                        <a href="#" class="text-sm font-medium text-pink-700 hover:underline">hapus</a>
                    </td>
                </tr>
                <tr class="bg-white border-b">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        Apple MacBook Pro 17"
                    </th>
                    <td class="px-6 py-4">
                        Silver
                    </td>
                    <td class="px-6 py-4">
                        Laptop
                    </td>
                    <td class="px-6 py-4">
                        $2999
                    </td>
                    <td class="px-6 py-4">
                        <a href="#" class="text-sm font-medium text-blue-600 hover:underline">Detail</a>
                        <a href="#" class="text-sm font-medium text-yellow-500 hover:underline ml-2 mr-2">Edit</a>
                        <a href="#" class="text-sm font-medium text-pink-700 hover:underline">hapus</a>
                    </td>
                </tr>
                </tbody>
            </table>
            <div class="mt-7">fahfh</div>
        </div>
    </div>
@endsection
