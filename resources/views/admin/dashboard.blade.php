@extends('layouts.backend.app', ['title' => 'Dashboard'])

@section('content')
    <div class="grid grid-cols-1 w-full mb-8">
        <span class="p-4 bg-gray-200 drop-shadow-md">
           Selamat Datang, <strong>{{ Auth::user()->name }}</strong>
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

    <div class="w-full">
        <div class="bg-white border border-gray-100 shadow-md shadow-black/5 p-6 rounded-md lg:col-span-2">
            <div class="flex justify-between mb-4 items-start">
                <div class="font-medium">Order Statistics</div>
            </div>
            <div class="">
                <div id="chart-menu" class="my-3"></div>
            </div>
        </div>
    </div>
@endsection


@push('js')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            window.ApexCharts && (new ApexCharts(document.getElementById('chart-menu'), {
                chart: {
                    type: "donut",
                    fontFamily: 'inherit',
                    height: 500,
                    sparkline: {
                        enabled: true
                    },
                    animations: {
                        enabled: true
                    },
                },
                fill: {
                    opacity: 1,
                },
                series: @json($total),
                labels: @json($label),
                grid: {
                    strokeDashArray: 4,
                },
                colors: ["#206bc4", "#79a6dc", "#bfe399", "#7891b3", "#2596be"],
                legend: {
                    show: true,
                    position: 'top'
                },
                tooltip: {
                    fillSeriesColor: true
                },
                dataLabels: {
                    enabled: true,
                },
                animations: {
                    enabled: true,
                    easing: 'easeinout',
                    speed: 800,
                    animateGradually: {
                        enabled: true,
                        delay: 150
                    },
                    dynamicAnimation: {
                        enabled: true,
                        speed: 350
                    }
                }
            })).render();
        });
    </script>
@endpush
