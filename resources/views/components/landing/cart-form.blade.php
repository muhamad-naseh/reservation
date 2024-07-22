@props(['user', 'total'])
<form action="{{ route('checkout.store') }}" method="get">
    <div class="border rounded-lg overflow-hidden">
        <div class="bg-white border-b px-4 py-3 text-gray-700 font-medium flex items-center gap-1">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-receipt w-5 h-5" width="24"
                 height="24" viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor" fill="none"
                 stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path
                    d="M5 21v-16a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v16l-3 -2l-2 2l-2 -2l-2 2l-2 -2l-3 2m4 -14h6m-6 4h6m-2 4h2">
                </path>
            </svg>
            Konfirmasi Pesanan
        </div>
        <div class="p-4 bg-white">
            <div class="flex flex-col gap-4">
                <div class="flex flex-col gap-y-2">
                    <label class="text-base text-gray-700 font-medium">
                        Nama Lengkap
                    </label>
                    <input type="text"
                           class="rounded-md border p-2 text-sm text-gray-700 focus:outline-none bg-gray-100 cursor-not-allowed"
                           value="{{ $user->name }}" name="name" readonly="">
                </div>
                <div class="flex flex-col gap-y-2">
                    <label class="text-base text-gray-700 font-medium">
                        Email
                    </label>
                    <input type="email"
                           class="rounded-lg border p-2 text-sm text-gray-700 focus:outline-none bg-gray-100 cursor-not-allowed"
                           value="{{ $user->email }}" name="email" readonly="">
                </div>

                <div class="flex flex-col gap-y-2">
                    <label for="phone" class="block mb-2 text-sm font-medium text-slate-700 after:content-['*'] after:text-pink-600 after:ml-0.5">No. Telpon</label>
                    <input type="text" name="phone" id="phone" value="{{ old('phone') }}" placeholder=" " autocomplete="off"
                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5
                    focus:outline-none focus:ring-1 focus:ring-emerald-800 focus:border-emerald-800  placeholder:text-slate-400
                    invalid:text-pink-600 invalid:focus:border-pink-700 invalid:focus:ring-pink-700 peer @error('phone') is-invalid @enderror"
                    />
                    @error('phone')
                    <p class="text-pink-500 text-sm font-normal invisible peer-invalid:visible">
                        {{ $message }}
                    </p>
                    @enderror
                </div>

                <div class="flex flex-col gap-y-2">
                    <label for="reserv_date" class="block mb-2 text-sm font-medium text-slate-700 after:content-['*'] after:text-pink-600 after:ml-0.5">No. Telpon</label>
                    <input type="datetime-local" name="reserv_date" id="reserv_date" value="{{ old('phone') }}" placeholder=" " autocomplete="off"
                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5
                    focus:outline-none focus:ring-1 focus:ring-emerald-800 focus:border-emerald-800  placeholder:text-slate-400
                    invalid:text-pink-600 invalid:focus:border-pink-700 invalid:focus:ring-pink-700 peer @error('reserv_date') is-invalid @enderror"
                    />
                    @error('reserv_date')
                    <p class="text-pink-500 text-sm font-normal invisible peer-invalid:visible">
                        {{ $message }}
                    </p>
                    @enderror
                </div>

                <div class="flex flex-col gap-y-2">
                    <label class="text-base text-gray-700 font-medium">
                        Total Bayar
                    </label>
                    <input type="text"
                           class="rounded-lg border p-2 text-sm text-gray-700 focus:outline-none bg-gray-100 cursor-not-allowed"
                           value="{{ $total }}" name="grand_total" readonly="">
                </div>

            </div>
        </div>
    </div>
    <div class="my-3">
        <button class="text-white bg-emerald-900 hover:bg-slate-900 rounded-lg w-full p-2">
            Lanjutkan Ke Pembayaran
        </button>
    </div>
</form>
