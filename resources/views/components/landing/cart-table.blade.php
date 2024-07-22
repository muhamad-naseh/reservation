@props(['carts', 'total'])
<div class="border rounded-lg overflow-hidden">
    <div class="bg-white border-b px-4 py-3 text-gray-700 font-medium flex items-center gap-1">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-basket w-5 h-5" width="24"
             height="24" viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor" fill="none"
             stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <polyline points="7 10 12 4 17 10"></polyline>
            <path d="M21 10l-2 8a2 2.5 0 0 1 -2 2h-10a2 2.5 0 0 1 -2 -2l-2 -8z"></path>
            <circle cx="12" cy="15" r="2"></circle>
        </svg>
        Keranjang Saya
    </div>
    <div class="overflow-x-auto relative" id="keranjang">
        <table class="w-full text-sm text-left text-gray-500 divide-y divide-gray-200 ">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="px-4 py-3 w-0">#</th>
                    <th scope="col" class="px-4 py-3">Nama Barang</th>
                    <th scope="col" class="px-4 py-3 ">Harga</th>
                    <th scope="col" class="px-4 py-3 text-center">Quantity</th>
                    <th scope="col" class="px-4 py-3 text-right">Jumlah</th>
                    <th scope="col" class="px-4 py-3" style="width: 60px">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 bg-white">
            @forelse ($carts as $i=> $cart)
                <tr>
                    <td class="py-3 px-4 whitespace-nowrap">
                        {{ $i + 1 }}
                    </td>

                    <td class="py-3 px-4 whitespace-nowrap">
                        {{ $cart->menu->name }}
                    </td>

                    <td class="py-3 px-4 whitespace-nowrap font-mono" id="{{ $cart->price }}">
                        <sup>Rp</sup> {{ moneyFormat($cart->price) }}
                    </td>


                        <td class="py-3 px-4 whitespace-nowrap">
                            <form class="input-group mb-1 mt-1 flex" action="{{ route('cart.update', $cart->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                            <div class="input-group mb-1 mt-1 flex">
                                <button class="input-group-text decrement-btn" type="submit">
                                    <svg  xmlns="http://www.w3.org/2000/svg"  width="15"  height="15"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"
                                          stroke-width="4"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-minus">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l14 0" />
                                    </svg>
                                </button>
                                <input type="text" class="form-control bg-blue text-center text-bold input-qty"
                                       style="width: 40px" value="{{ $cart->qty }}" data-id="{{$cart->id}}" data-price="{{$cart->price}}" name="qty" aria-label="Amount (to the nearest dollar)">
                                <button class="input-group-text increment-btn" type="submit">
                                    <svg  xmlns="http://www.w3.org/2000/svg"  width="15"  height="15"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"
                                          stroke-width="4"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-plus">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 5l0 14" /><path d="M5 12l14 0" />
                                    </svg>
                                </button>
                            </div>
                            </form>
                        </td>

                    <td class="py-3 px-4 whitespace-nowrap text-right font-mono" id="jumlah">
                        <sup>Rp</sup> <span id="total-{{$cart->id}}">{{ moneyFormat($cart->total) }}</span>
                    </td>

                    <td class="py-3 px-4 whitespace-nowrap text-right text-red-500">
                        <a href="#" onclick="deleteData({{ $cart->id }})">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                 class="icon icon-tabler icon-tabler-eraser w-5 h-5" width="24" height="24"
                                 viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor" fill="none"
                                 stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path
                                    d="M19 20h-10.5l-4.21 -4.3a1 1 0 0 1 0 -1.41l10 -10a1 1 0 0 1 1.41 0l5 5a1 1 0 0 1 0 1.41l-9.2 9.3">
                                </path>
                                <path d="M18 13.3l-6.3 -6.3"></path>
                            </svg>
                        </a>
                        <form id="delete-form-{{ $cart->id }}" action="{{ route('cart.destroy', $cart->id) }}"
                              method="POST" style="display:none;">
                            @csrf
                            @method('DELETE')
                        </form>
                    </td>
                    @empty
                        <td class="py-3 px-4 whitespace-nowrap" colspan="6">
                            <div class="flex items-center justify-center h-96">
                                <div class="text-center flex flex-col items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-basket"
                                         width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                         stroke="currentColor" fill="none" stroke-linecap="round"
                                         stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <polyline points="7 10 12 4 17 10"></polyline>
                                        <path d="M21 10l-2 8a2 2.5 0 0 1 -2 2h-10a2 2.5 0 0 1 -2 -2l-2 -8z">
                                        </path>
                                        <circle cx="12" cy="15" r="2"></circle>
                                    </svg>
                                    <div class="mt-5">
                                        Keranjang Anda Kosong
                                    </div>
                                </div>
                            </div>
                        </td>
                </tr>
            @endforelse
                <tr classname="bg-blue-50 text-blue-900 font-semibold">
                    <td class="py-3 px-4 whitespace-nowrap"></td>
                    <td class="py-3 px-4 whitespace-nowrap">Total</td>
                    <td class="py-3 px-4 whitespace-nowrap"></td>
                    <td class="py-3 px-4 whitespace-nowrap"></td>
                    <td class="py-3 px-4 whitespace-nowrap text-right text-green-500 font-mono">
                        <sup>Rp</sup> {{ moneyFormat($total) }}
                    </td>
                    <td class="py-3 px-4 whitespace-nowrap"></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@push('js')
    <script type="text/javascript">
        $(document).ready( function () {

            $('.decrement-btn').each(function () {
                $(this).click(function (e) {
                    const input = $(this).parent().find('input[name=qty]');
                    let currentValue = parseInt(input.val());
                    if(currentValue>1){
                        input.val(--currentValue).change()
                    }
                })
            })
            $('.increment-btn').each(function () {
                $(this).click(function (e) {
                    const input = $(this).parent().find('input[name=qty]');
                    let currentValue = parseInt(input.val());
                    input.val(++currentValue).change()
                })
            })

            $('input[name=qty]').each(function () {
                $(this).change(function () {
                    console.log($(this).data('price'))
                })
            })

            // $('#plus').click( function (e) {
            //     e.preventDefault();
            //
            //     var qty = $(this).closest('#keranjang').find('#input-qty').val();
            //
            //     var value = parseInt(qty, 10);
            //     value = isNaN(value) ? 0 : value;
            //
            //     if(value < 10) {
            //         value++;
            //         $(this).closest('#keranjang').find('#input-qty').val(value);
            //     }
            //
            // });
            //
            // $('#min').click( function (e) {
            //     e.preventDefault();
            //
            //     var qty = $(this).closest('#keranjang').find('#input-qty').val();
            //
            //     var value = parseInt(qty, 10);
            //     value = isNaN(value) ? 0 : value;
            //
            //     if(value > 0) {
            //         value--;
            //         $(this).closest('#keranjang').find('#input-qty').val(value);
            //     }

            // });

        });
    </script>
@endpush
