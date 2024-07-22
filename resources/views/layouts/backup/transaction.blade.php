<div class="row">
    <div class="col-12">
        <x-input-search :url="route('admin.transaction.index')" placeholder="Search status.." />
    </div>
    <div class="col-12">
        <x-card title="LIST TRANSACTION">
            <table class="table">
                <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>INVOICE</th>
                    <th>NAMA</th>
                    <th>NO. TELPON</th>
                    <th>TOTAL</th>
                    <th>STATUS</th>
                    <th>TANGGAL PESAN</th>
                    <th>TANGGAL RESERVASI</th>
                    <th>ACTION</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($transactions as $i => $transaction)
                    <tr>
                        <td>{{ $transactions->firstItem() + $i }}</td>
                        <td>{{ $transaction->invoice }}</td>
                        <td>{{ $transaction->user->name }}</td>
                        <td>{{ $transaction->phone }}</td>
                        <td>
                            <sup>Rp</sup> {{ moneyFormat($transaction->grand_total) }}
                        </td>
                        <td>
                            @if ($transaction->status == 'pending')
                                <span class="bg-pink-700 p-1">{{ $transaction->status }}</span>
                            @elseif($transaction->status == 'success')
                                <span class="bg-indigo-600 p-1 text-indigo-900">{{ $transaction->status }}</span>
                            @else
                                <span class="bg-yellow-300 p-1">{{ $transaction->status }}</span>
                            @endif
                        </td>
                        <td>{{ $transaction->reserv_date }}</td>
                        <td>{{ $transaction->created_at }}</td>
                        <td>
                            <a href="{{ route('admin.transaction.show', $transaction->id) }}"
                               class="btn btn-primary btn-sm">
                                Detail
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </x-card>
        <div class="d-flex justify-content-end">{{ $transactions->links() }}</div>
    </div>
</div>
