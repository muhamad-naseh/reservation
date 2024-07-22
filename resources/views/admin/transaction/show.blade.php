@extends('layouts.backend.app', ['title' => 'Transaction Detail'])

@section('content')
    <div class="p-2 mt-5">
        <div class="px-4 py-6 sm:px-0 bg-gray-100">
            <p class=" ml-4 max-w-2xl text-lg leading-6 text-gray-500 font-bold uppercase">Transaction Detail</p>
        </div>
        <div class=" border-t border-gray-100">
            <dl class="divide-y divide-gray-100">
                <div class="px-4 py-6 sm:grid sm:grid-cols-4 sm:gap-4 sm:px-0">
                    <dt class="ml-4 text-sm font-medium leading-6 text-gray-900">No. Voice</dt>
                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-3 sm:mt-0">{{ $transaction->invoice }}</dd>
                </div>
                <div class="px-4 py-6 sm:grid sm:grid-cols-4 sm:gap-4 sm:px-0">
                    <dt class="ml-4 text-sm font-medium leading-6 text-gray-900">Full Name</dt>
                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-3 sm:mt-0">{{ $transaction->user->name }}</dd>
                </div>
                <div class="px-4 py-6 sm:grid sm:grid-cols-4 sm:gap-4 sm:px-0">
                    <dt class="ml-4 text-sm font-medium leading-6 text-gray-900">Email address</dt>
                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-3 sm:mt-0">{{ $transaction->user->email }}</dd>
                </div>
                <div class="px-4 py-6 sm:grid sm:grid-cols-4 sm:gap-4 sm:px-0">
                    <dt class="ml-4 text-sm font-medium leading-6 text-gray-900">Phone</dt>
                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-3 sm:mt-0">{{ $transaction->phone }}</dd>
                </div>
                <div class="px-4 py-6 sm:grid sm:grid-cols-4 sm:gap-4 sm:px-0">
                    <dt class="ml-4 text-sm font-medium leading-6 text-gray-900">Status</dt>
                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-3 sm:mt-0">
                        @if ($transaction->status == 'success')
                            <button class="bg-indigo-500 text-gray-100 text-xs font-medium py-1 px-2 rounded-lg" disabled>
                                Pembayaran Telah Diverifikasi Sistem
                            </button>
                        @elseif($transaction->status == 'pending')
                            <button id="pay-button" class="bg-yellow-300 text-gray-600 text-xs font-medium py-1 px-2 rounded-lg">
                                Lanjutkan Pembayaran
                            </button>
                        @else
                            <button class="bg-pink-600 text-gray-100 text-xs font-medium py-1 px-2 rounded-lg" disabled>
                                pembayaran untuk pesanan Anda sudah kedaluwarsa
                            </button>
                        @endif
                    </dd>
                </div>
            </dl>
        </div>
    </div>

    <div class="relative overflow-x-auto mt-10">
        <table class="w-full text-sm text-left text-gray-500 ">
            <thead class="text-xs text-gray-700 uppercase bg-gray-100">
                <tr>
                    <th scope="col" class="px-6 py-3 rounded-s-lg">
                        No.
                    </th>
                    <th scope="col" class="px-6 py-3 rounded-s-lg">
                        Menu
                    </th>
                    <th scope="col" class="px-6 py-3 rounded-e-lg">
                        Price
                    </th>
                    <th scope="col" class="px-6 py-3 rounded-e-lg">
                        Qty
                    </th>
                    <th scope="col" class="px-6 py-3 rounded-e-lg">
                        Total
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                <tr class="border-b">
                    <td class="px-6 py-4">
                        {{ $loop->iteration }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $order->menu->name }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $order->price }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $order->qty }}
                    </td>
                    <td class="px-6 py-4">
                        <sup>Rp</sup> {{ $order->total }}
                    </td>
                </tr>
                @endforeach
            </tbody>
                <tfoot>
                    <tr class="font-semibold text-gray-900 border-b">
                        <th scope="row" class="px-6 py-3 text-base">Total</th>
                        <td class="px-6 py-3"></td>
                        <td class="px-6 py-3"></td>
                        <td class="px-6 py-3">3</td>
                        <td class="px-6 py-3"><sup>Rp </sup>{{ moneyFormat($transaction->grand_total) }}</td>
                    </tr>
                </tfoot>
        </table>
    </div>
@endsection

@push('js')
    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js"
            data-client-key="{{ config('services.midtrans.serverKey') }}"></script>
    <script type="text/javascript">
        var payButton = document.getElementById('pay-button');
        payButton.addEventListener('click', function() {
            window.snap.pay('{{ $snapToken }}');
        });
    </script>
@endpush
