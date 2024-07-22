@extends('layouts.backend.app', ['title' => 'Menu'])

@section('content')
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8 mx-auto my-5 items-start">
        @foreach($menus as $data)
            <div class="bg-white border border-gray-200 rounded-lg shadow-md">
                <a href="#">
                    <img class="rounded-t-lg" src="{{ $data->menu->image }}" alt="" />
                </a>
                <div class="p-5">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">{{ $data->menu->name }}</h5>
                    <p class="mb-3 font-normal text-gray-700 ">{{ $data->transaction->reserv_date }}</p>
                    <!-- Modal toggle -->
                    <button data-modal-target="authentication-modal{{ $data->menu->id }}" data-modal-toggle="authentication-modal{{ $data->menu->id }}" class="w-full inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 " type="button">
                        <span class="ml-28">Review</span>
                        <svg  xmlns="http://www.w3.org/2000/svg"  width="22"  height="22"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="ml-3 icon icon-tabler icons-tabler-outline icon-tabler-message-star"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 9h8" /><path d="M8 13h4.5" /><path d="M10.325 19.605l-2.325 1.395v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v4.5" /><path d="M17.8 20.817l-2.172 1.138a.392 .392 0 0 1 -.568 -.41l.415 -2.411l-1.757 -1.707a.389 .389 0 0 1 .217 -.665l2.428 -.352l1.086 -2.193a.392 .392 0 0 1 .702 0l1.086 2.193l2.428 .352a.39 .39 0 0 1 .217 .665l-1.757 1.707l.414 2.41a.39 .39 0 0 1 -.567 .411l-2.172 -1.138z" /></svg>
                    </button>

                    <!-- Main modal -->
                    <div id="authentication-modal{{ $data->menu->id }}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative p-4 w-full max-w-md max-h-full">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow">
                                <!-- Modal header -->
                                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                                    <h3 class="text-xl font-semibold text-g">
                                        Review Menu
                                    </h3>
                                    <button type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="authentication-modal{{ $data->menu->id }}">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                </div>
                                <!-- Modal body -->
                                <div class="p-4 md:p-5">
                                    <form class="space-y-4" action="{{ route('member.review', $data->menu->id) }}" method="post">
                                        @csrf
                                        <div>
                                            <label for="rating" class="block mb-2 text-sm font-medium text-slate-700 after:content-['*'] after:text-pink-600 after:ml-0.5">Rating</label>
                                            <select id="rating" name="rating"
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5
                                                focus:outline-none focus:ring-1 focus:ring-emerald-800 focus:border-emerald-800  placeholder:text-slate-400
                                                invalid:text-pink-600 invalid:focus:border-pink-700 invalid:focus:ring-pink-700 peer @error('rating') is-invalid @enderror"
                                            >
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                            @error('category_id')
                                            <p class="text-pink-500 text-sm font-normal invisible peer-invalid:visible">
                                                {{ $message }}
                                            </p>
                                            @enderror
                                        </div>
                                        <div class="mb-5">
                                            <label for="review" class="block mb-2 text-sm font-medium text-slate-700 after:content-['*'] after:text-pink-600 after:ml-0.5">Review</label>
                                            <input type="text" name="review" id="review" value="{{ old('review') }}" placeholder="review menu..."
                                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5
                                                    focus:outline-none focus:ring-1 focus:ring-emerald-800 focus:border-emerald-800  placeholder:text-slate-400
                                                    invalid:text-pink-600 invalid:focus:border-pink-700 invalid:focus:ring-pink-700 peer @error('review') is-invalid @enderror"
                                            />
                                            @error('review')
                                            <p class="text-pink-500 text-sm font-normal invisible peer-invalid:visible">
                                                {{ $message }}
                                            </p>
                                            @enderror
                                        </div>
                                        <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">Save Review</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
