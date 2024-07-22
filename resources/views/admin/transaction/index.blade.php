@extends('layouts.backend.app', ['title' => 'Transaction'])

@section('content')
    <div class="relative overflow-x-auto sm:rounded-lg ">
        <div class="p-4 text-2xl font-bold uppercase text-gray-900">
            <div class="mb-7 text-center">
                List Category
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
                        INVOICE
                    </th>
                    <th scope="col" class="px-6 py-3">
                        NAME
                    </th>
                    <th scope="col" class="px-6 py-3">
                        PHONE
                    </th>
                    <th scope="col" class="px-6 py-3">
                        TOTAL
                    </th>
                    <th scope="col" class="px-6 py-3">
                        STATUS
                    </th>
                    <th scope="col" class="px-6 py-3">
                        RESERVATION DATE
                    </th>
                    <th scope="col" class="px-6 py-3">
                        ORDER DATE
                    </th>
                    <th scope="col" class="px-6 py-3">
                        ACTION
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach ($transactions as $i => $transaction)
                    <tr class="bg-white border-b">
                        <th class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            {{ $transactions->firstItem() + $i }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $transaction->invoice }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $transaction->user->name }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $transaction->phone }}
                        </td>
                        <td class="px-6 py-4">
                            <sup>Rp</sup> {{ moneyFormat($transaction->grand_total) }}
                        </td>
                        <td class="px-6 py-4">
                            @if ($transaction->status == 'pending')
                                <span class="bg-pink-600 text-gray-100 text-xs font-medium py-1 px-2 rounded-lg">{{ $transaction->status }}</span>
                            @elseif($transaction->status == 'success')
                                <span class="bg-indigo-500 text-gray-100 text-xs font-medium py-1 px-2 rounded-lg">{{ $transaction->status }}</span>
                            @else
                                <span class="bg-yellow-300 text-gray-600 text-xs font-medium py-1 px-2 rounded-lg">{{ $transaction->status }}</span>
                            @endif
                        </td>
                        <td class="px-6 py-4">
                            {{ $transaction->reserv_date }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $transaction->created_at }}
                        </td>
                        <td class="px-6 py-4">
                            <x-button-detail :url="route('admin.transaction.show', $transaction->id)" />
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="mt-7">{{ $transactions->links() }}</div>
        </div>
    </div>
@endsection
