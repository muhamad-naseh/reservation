@extends('layouts.backend.app', ['title' => 'Menu'])

@section('content')
    <div class="p-4 text-2xl font-bold uppercase text-gray-900">
        <div class="text-center">
            Add Menu
        </div>
    </div>
    <form action="{{ route('admin.menu.store') }}" method="post" enctype="multipart/form-data" class="relative w-full p-4">
        @csrf
        <div class="mb-5">
            <label for="category" class="block mb-2 text-sm font-medium text-slate-700 after:content-['*'] after:text-pink-600 after:ml-0.5">Select Category</label>
            <select id="category" name="category_id"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5
                    focus:outline-none focus:ring-1 focus:ring-emerald-800 focus:border-emerald-800  placeholder:text-slate-400
                    invalid:text-pink-600 invalid:focus:border-pink-700 invalid:focus:ring-pink-700 peer @error('category_id') is-invalid @enderror"
            >
                <option selected disabled>Select Category</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
            @error('category_id')
            <p class="text-pink-500 text-sm font-normal invisible peer-invalid:visible">
                {{ $message }}
            </p>
            @enderror
        </div>

        <div class="mb-5">
            <label for="name" class="block mb-2 text-sm font-medium text-slate-700 after:content-['*'] after:text-pink-600 after:ml-0.5">Name</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}" placeholder="your menu..."
                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5
                    focus:outline-none focus:ring-1 focus:ring-emerald-800 focus:border-emerald-800  placeholder:text-slate-400
                    invalid:text-pink-600 invalid:focus:border-pink-700 invalid:focus:ring-pink-700 peer @error('name') is-invalid @enderror"
            />
            @error('name')
            <p class="text-pink-500 text-sm font-normal invisible peer-invalid:visible">
                {{ $message }}
            </p>
            @enderror
        </div>

        <div class="mb-5">
            <label for="price" class="block mb-2 text-sm font-medium text-slate-700 after:content-['*'] after:text-pink-600 after:ml-0.5">Price</label>
            <input type="text" name="price" id="price" value="{{ old('price') }}" placeholder="your price..."
                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5
                    focus:outline-none focus:ring-1 focus:ring-emerald-800 focus:border-emerald-800  placeholder:text-slate-400
                    invalid:text-pink-600 invalid:focus:border-pink-700 invalid:focus:ring-pink-700 peer @error('price') is-invalid @enderror"
            />
            @error('price')
            <p class="text-pink-500 text-sm font-normal invisible peer-invalid:visible">
                {{ $message }}
            </p>
            @enderror
        </div>

        <div class="mb-5">
            <label for="image" class="block mb-2 text-sm font-medium text-slate-700 after:content-['*'] after:text-pink-600 after:ml-0.5">Upload file</label>
            <input type="file" name="image" id="image" value="{{ old('image') }}"
                   class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50
                    invalid:text-pink-600 invalid:focus:border-pink-700 invalid:focus:ring-pink-700 peer @error('image') is-invalid @enderror">
            @error('image')
            <p class="text-pink-500 text-sm font-normal invisible peer-invalid:visible">
                {{ $message }}
            </p>
            @enderror
        </div>

        <div class="mb-5">
            <label for="description" class="block mb-2 text-sm font-medium text-slate-700 after:content-['*'] after:text-pink-600 after:ml-0.5">Description Menu</label>
            <textarea name="description" id="description" rows="4" value="{{ old('description') }}" placeholder="Description menu..."
                      class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5
                    focus:outline-none focus:ring-1 focus:ring-emerald-800 focus:border-emerald-800  placeholder:text-slate-400
                    invalid:text-pink-600 invalid:focus:border-pink-700 invalid:focus:ring-pink-700 peer @error('description') is-invalid @enderror"
            ></textarea>
            @error('description')
            <p class="text-pink-500 text-sm font-normal invisible peer-invalid:visible">
                {{ $message }}
            </p>
            @enderror
        </div>

        <div class="mb-5">
            <button type="submit" class="flex items-center text-gray-900 bg-white hover:bg-gray-100 border border-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 drop-shadow-md">
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-device-floppy"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6 4h10l4 4v10a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2" /><path d="M12 14m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M14 4l0 4l-6 0l0 -4" /></svg>
                <span class="ml-2 whitespace-nowrap font-semibold">Save Data</span>
            </button>
        </div>
    </form>
@endsection
