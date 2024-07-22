@props(['menu'])
<div class="bg-white rounded-lg drop-shadow-lg">
    <img class="rounded-t-lg object-cover w-full h-56" src="{{ $menu->image }}" alt="product image">
    <div class="p-4 md:p-5 text-center">
        <a href="{{ route('menu.show', $menu->slug) }}"
           class="text-lg font-semibold leading-none tracking-tight hover:text-gray-500 hover:underline uppercase">
            {{ $menu->name }}
        </a>
        <div class="flex flex-row gap-3 text-xs justify-center my-4">
            <div class="text-slate-400 flex items-center gap-1 align-bottom">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-users w-5 h-5"
                     width="24" height="24" viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor"
                     fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <circle cx="9" cy="7" r="4"></circle>
                    <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                    <path d="M21 21v-2a4 4 0 0 0 -3 -3.85"></path>
                </svg>
                {{ $menu->enrolled }} Buyer
            </div>
            <div class="text-slate-400 flex items-center gap-1 align-bottom">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-message-2 w-5 h-5"
                     width="24" height="24" viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor"
                     fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path
                        d="M12 20l-3 -3h-2a3 3 0 0 1 -3 -3v-6a3 3 0 0 1 3 -3h10a3 3 0 0 1 3 3v6a3 3 0 0 1 -3 3h-2l-3 3">
                    </path>
                    <line x1="8" y1="9" x2="16" y2="9"></line>
                    <line x1="8" y1="13" x2="14" y2="13"></line>
                </svg>
                {{ $menu->reviews_count }} Review
            </div>
        </div>
        <div class="flex justify-between items-center mt-5">
            <form action="{{ route('cart.store', $menu->id) }}" method="POST">
                @csrf
                <button type="submit"
                        class="px-4 py-2 rounded-lg bg-green-800 text-white hover:scale-110 hover:duration-200 flex items-center gap-2 text-sm border border-green-600">
                    <svg xmlns="http://www.w3.org/2000/svg"
                         class="icon icon-tabler icon-tabler-basket w-5 h-5" width="24"
                         height="24" viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor"
                         fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <polyline points="7 10 12 4 17 10"></polyline>
                        <path d="M21 10l-2 8a2 2.5 0 0 1 -2 2h-10a2 2.5 0 0 1 -2 -2l-2 -8z"></path>
                        <circle cx="12" cy="15" r="2"></circle>
                    </svg>
                </button>
            </form>
            <div class="flex flex-col">
                <span class="text-base text-green-500 font-mono">
                    <sup>Rp</sup>{{ moneyFormat($menu->price) }}
                </span>
            </div>
        </div>
    </div>
</div>
