@extends('layouts.backend.app', ['title' => 'Category'])

@section('content')
    <div class="relative overflow-x-auto sm:rounded-lg ">
        <div class="p-4 text-2xl font-bold uppercase text-gray-900">
            <div class="mb-7 text-center">
                List Category
            </div>
            <a href="{{ route('admin.category.create') }}">
                <button type="button" class="flex items-center text-gray-900 bg-white hover:bg-gray-100 border border-gray-200 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 drop-shadow-md">
                    <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-plus"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 5l0 14" /><path d="M5 12l14 0" /></svg>
                    <span class="ml-2 whitespace-nowrap font-semibold">Add Data</span>
                </button>
            </a>
        </div>

        <div class="p-4 drop-shadow-md">
            <table class="w-full text-sm text-left text-gray-500 p-3">
                <thead class="text-xs text-gray-700 uppercase bg-gray-100 ">
                    <tr>
                        <th scope="col" class="px-6 py-3 rounded-s-lg">
                            #
                        </th>
                        <th scope="col" class="px-6 py-3 rounded-s-lg">
                            NAME
                        </th>
                        <th scope="col" class="px-6 py-3 rounded-s-lg">
                            ACTION
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $i => $category)
                    <tr class="bg-white border-b">
                        <th class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            {{ $categories->firstItem() + $i }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $category->name }}
                        </td>

                        <td class="px-6 py-4">
                            <x-button-edit :url="route('admin.category.edit', $category->id)" />
                            <x-button-delete :id="$category->id" :url="route('admin.category.destroy', $category->id)" />
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="mt-7">{{ $categories->links() }}</div>
        </div>
    </div>
@endsection
