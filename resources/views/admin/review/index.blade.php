@extends('layouts.backend.app', ['title' => 'Review'])

@section('content')
    <div class="relative overflow-x-auto sm:rounded-lg ">
        <div class="p-4 text-2xl font-bold uppercase text-gray-900">
            <div class="mb-7 text-center">
                Review Member
            </div>
        </div>

        <div class="p-4 drop-shadow-md">
            <table class="w-full text-sm text-left text-gray-500 p-3">
                <thead class="text-xs text-gray-700 uppercase bg-gray-100 ">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        #
                    </th>
                    <th scope="col" class="px-6 py-3">
                        MENU
                    </th>
                    <th scope="col" class="px-6 py-3">
                        USER
                    </th>
                    <th scope="col" class="px-6 py-3">
                        RATING
                    </th>
                    <th scope="col" class="px-6 py-3">
                        REVIEW
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach ($reviews as $i => $review)
                    <tr class="bg-white border-b">
                        <th class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            {{ $reviews->firstItem() + $i }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $review->menu->name }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $review->user->name }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $review->rating }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $review->review }}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="mt-7">{{ $reviews->links() }}</div>
        </div>
    </div>

@endsection
