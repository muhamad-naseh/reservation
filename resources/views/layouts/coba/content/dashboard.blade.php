@extends('layouts.coba.app', ['title' => 'Dashboard'])

@section('content')
    <div class="grid grid-cols-1">
        <span class="p-4">
           {{ Auth::user()->name }}
        </span>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-6">
        <div class="bg-white rounded-lg border border-gray-100 pt-5 shadow-md shadow-black/5">
            <div class="flex justify-between mb-6">
                <div class="mx-5">
                    <div class="text-3xl font-semibold mb-1"><sup>Rp</sup> {{ moneyFormat($revenue) }}</div>
                    <div class="text-sm font-medium text-gray-400">Revenue</div>
                </div>
            </div>
            <div class=" flex flex-col items-center text-sm font-medium text-gray-600 relative mt-10 p-2 bg-gray-100">
                <span class="flex items-center">
                    more info
                <svg  xmlns="http://www.w3.org/2000/svg"  width="20"  height="20"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="1"  stroke-linecap="round"  stroke-linejoin="round"  class="ml-2 icon icon-tabler icons-tabler-outline icon-tabler-circle-arrow-right"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 3a9 9 0 1 0 0 18a9 9 0 0 0 0 -18" /><path d="M16 12l-4 -4" /><path d="M16 12h-8" /><path d="M12 16l4 -4" /></svg>
                </span>
            </div>
        </div>
        <div class="bg-white rounded-lg border border-gray-100 pt-5 shadow-md shadow-black/5">
            <div class="flex justify-between mb-6">
                <div class="mx-5">
                    <div class="text-3xl font-semibold mb-1">{{ $menu }}</div>
                    <div class="text-sm font-medium text-gray-400">Menu</div>
                </div>
            </div>
            <div class=" flex flex-col items-center text-sm font-medium text-gray-600 relative mt-10 p-2 bg-gray-100">
                <span class="flex items-center">
                    more info
                <svg  xmlns="http://www.w3.org/2000/svg"  width="20"  height="20"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="1"  stroke-linecap="round"  stroke-linejoin="round"  class="ml-2 icon icon-tabler icons-tabler-outline icon-tabler-circle-arrow-right"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 3a9 9 0 1 0 0 18a9 9 0 0 0 0 -18" /><path d="M16 12l-4 -4" /><path d="M16 12h-8" /><path d="M12 16l4 -4" /></svg>
                </span>
            </div>
        </div>
        <div class="bg-white rounded-lg border border-gray-100 pt-5 shadow-md shadow-black/5">
            <div class="flex justify-between mb-6">
                <div class="mx-5">
                    <div class="text-3xl font-semibold mb-1">{{ $review }}</div>
                    <div class="text-sm font-medium text-gray-400">Review</div>
                </div>
            </div>
            <div class=" flex flex-col items-center text-sm font-medium text-gray-600 relative mt-10 p-2 bg-gray-100">
                <span class="flex items-center">
                    more info
                <svg  xmlns="http://www.w3.org/2000/svg"  width="20"  height="20"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="1"  stroke-linecap="round"  stroke-linejoin="round"  class="ml-2 icon icon-tabler icons-tabler-outline icon-tabler-circle-arrow-right"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 3a9 9 0 1 0 0 18a9 9 0 0 0 0 -18" /><path d="M16 12l-4 -4" /><path d="M16 12h-8" /><path d="M12 16l4 -4" /></svg>
                </span>
            </div>
        </div>
        <div class="bg-white rounded-lg border border-gray-100 pt-5 shadow-md shadow-black/5">
            <div class="flex justify-between mb-6">
                <div class="mx-5">
                    <div class="text-3xl font-semibold mb-1">{{ $transaction }}</div>
                    <div class="text-sm font-medium text-gray-400">Transaction</div>
                </div>
            </div>
            <div class=" flex flex-col items-center text-sm font-medium text-gray-600 relative mt-10 p-2 bg-gray-100">
                <span class="flex items-center">
                    more info
                <svg  xmlns="http://www.w3.org/2000/svg"  width="20"  height="20"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="1"  stroke-linecap="round"  stroke-linejoin="round"  class="ml-2 icon icon-tabler icons-tabler-outline icon-tabler-circle-arrow-right"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 3a9 9 0 1 0 0 18a9 9 0 0 0 0 -18" /><path d="M16 12l-4 -4" /><path d="M16 12h-8" /><path d="M12 16l4 -4" /></svg>
                </span>
            </div>
        </div>
        <div class="bg-white rounded-lg border border-gray-100 pt-5 shadow-md shadow-black/5">
            <div class="flex justify-between mb-6">
                <div class="mx-5">
                    <div class="text-3xl font-semibold mb-1">{{ $member }}</div>
                    <div class="text-sm font-medium text-gray-400">Member</div>
                </div>
            </div>
            <div class=" flex flex-col items-center text-sm font-medium text-gray-600 relative mt-10 p-2 bg-gray-100">
                <span class="flex items-center">
                    more info
                <svg  xmlns="http://www.w3.org/2000/svg"  width="20"  height="20"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="1"  stroke-linecap="round"  stroke-linejoin="round"  class="ml-2 icon icon-tabler icons-tabler-outline icon-tabler-circle-arrow-right"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 3a9 9 0 1 0 0 18a9 9 0 0 0 0 -18" /><path d="M16 12l-4 -4" /><path d="M16 12h-8" /><path d="M12 16l4 -4" /></svg>
                </span>
            </div>
        </div>
        <div class="bg-white rounded-lg border border-gray-100 pt-5 shadow-md shadow-black/5">
            <div class="flex justify-between mb-6">
                <div class="mx-5">
                    <div class="text-3xl font-semibold mb-1">{{ $cashier }}</div>
                    <div class="text-sm font-medium text-gray-400">Cashier</div>
                </div>
            </div>
            <div class=" flex flex-col items-center text-sm font-medium text-gray-600 relative mt-10 p-2 bg-gray-100">
                <span class="flex items-center">
                    more info
                <svg  xmlns="http://www.w3.org/2000/svg"  width="20"  height="20"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="1"  stroke-linecap="round"  stroke-linejoin="round"  class="ml-2 icon icon-tabler icons-tabler-outline icon-tabler-circle-arrow-right"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 3a9 9 0 1 0 0 18a9 9 0 0 0 0 -18" /><path d="M16 12l-4 -4" /><path d="M16 12h-8" /><path d="M12 16l4 -4" /></svg>
                </span>
            </div>
        </div>

    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-6">
        <div class="bg-white border border-gray-100 shadow-md shadow-black/5 p-6 rounded-md lg:col-span-2">
            <div class="flex justify-between mb-4 items-start">
                <div class="font-medium">Order Statistics</div>
            </div>
            <div class="bg-slate-500">
                <canvas id="chart-course" class="my-3"></canvas>
            </div>
        </div>
    </div>
@endsection
