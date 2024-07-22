<div class="fixed left-0 top-0 w-64 h-full bg-emerald-700 p-4 z-40 sidebar-menu transition-transform">
    <a href="/" class="flex items-center text-center pb-4 border-b-2 border-b-emerald-800 text-gray-200">
        <svg  xmlns="http://www.w3.org/2000/svg"  width="30"  height="30"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-christmas-tree ml-7"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 3l4 4l-2 1l4 4l-3 1l4 4h-14l4 -4l-3 -1l4 -4l-2 -1z" /><path d="M14 17v3a1 1 0 0 1 -1 1h-2a1 1 0 0 1 -1 -1v-3" /></svg>
        <span class="text-xl font-bold ml-2">Vill Garden</span>
    </a>

    <ul class="mt-4">
        @role('admin')
        <li class="mb-1 group {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
            <a href="{{ route('admin.dashboard') }}" class="flex items-center py-2 px-4 text-gray-200 hover:bg-emerald-800 hover:text-gray-100 rounded-md group-[.active]:bg-emerald-800 group-[.active]:text-white group-[.selected]:bg-emerald-800 group-[.selected]:text-gray-100 " >
                <svg  xmlns="http://www.w3.org/2000/svg"  width="22"  height="22"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="1.7"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-home-2"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l-2 0l9 -9l9 9l-2 0" /><path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" /><path d="M10 12h4v4h-4z" /></svg>
                <span class="ml-2 text-sm">Dashboard</span>
            </a>
        </li>
        <li class="mt-5 mb-1 group {{ request()->routeIs('admin.category*') ? 'active' : '' }}">
            <a href="{{ route('admin.category.index') }}" class="flex items-center py-2 px-4 text-gray-200 hover:bg-emerald-800 hover:text-gray-100 rounded-md group-[.active]:bg-emerald-800 group-[.active]:text-white group-[.selected]:bg-emerald-800 group-[.selected]:text-gray-100 ">
                <svg  xmlns="http://www.w3.org/2000/svg"  width="22"  height="22"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="1.7"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-category-2"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 4h6v6h-6z" /><path d="M4 14h6v6h-6z" /><path d="M17 17m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" /><path d="M7 7m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" /></svg>
                <span class="ml-2 text-sm">Category</span>
            </a>
        </li>
        <li class="mb-1 group {{ request()->routeIs('admin.menu*') ? 'active' : '' }}">
            <a href="{{ route('admin.menu.index') }}" class="flex items-center py-2 px-4 text-gray-200 hover:bg-emerald-800 hover:text-gray-100 rounded-md group-[.active]:bg-emerald-800 group-[.active]:text-white group-[.selected]:bg-emerald-800 group-[.selected]:text-gray-100  ">
                <svg  xmlns="http://www.w3.org/2000/svg"  width="22"  height="22"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="1.7"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-tools-kitchen-3"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 4v17m-3 -17v3a3 3 0 1 0 6 0v-3" /><path d="M17 8m-3 0a3 4 0 1 0 6 0a3 4 0 1 0 -6 0" /><path d="M17 12v9" /></svg>
                <span class="ml-2 text-sm">Menu</span>
            </a>
        </li>
        <li class="mb-1 group {{ request()->routeIs('admin.review*') ? 'active' : '' }}">
            <a href="{{ route('admin.review.index') }}" class="flex items-center py-2 px-4 text-gray-200 hover:bg-emerald-800 hover:text-gray-100 rounded-md group-[.active]:bg-emerald-800 group-[.active]:text-white group-[.selected]:bg-emerald-800 group-[.selected]:text-gray-100  ">
                <svg  xmlns="http://www.w3.org/2000/svg"  width="22"  height="22"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="1.7"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-message-2-star"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 9h8" /><path d="M8 13h4.5" /><path d="M10 19l-1 -1h-3a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v4.5" /><path d="M17.8 20.817l-2.172 1.138a.392 .392 0 0 1 -.568 -.41l.415 -2.411l-1.757 -1.707a.389 .389 0 0 1 .217 -.665l2.428 -.352l1.086 -2.193a.392 .392 0 0 1 .702 0l1.086 2.193l2.428 .352a.39 .39 0 0 1 .217 .665l-1.757 1.707l.414 2.41a.39 .39 0 0 1 -.567 .411l-2.172 -1.138z" /></svg>
                <span class="ml-2 text-sm">Review</span>
            </a>
        </li>
        <li class="mt-5 mb-1 group {{ request()->routeIs('admin.mymenu*') ? 'active' : '' }}">
            <a href="{{ route('admin.mymenu') }}" class="flex items-center py-2 px-4 text-gray-200 hover:bg-emerald-800 hover:text-gray-100 rounded-md group-[.active]:bg-emerald-800 group-[.active]:text-white group-[.selected]:bg-emerald-800 group-[.selected]:text-gray-100 ">
                <svg  xmlns="http://www.w3.org/2000/svg"  width="22"  height="22"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="1.7"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-tools-kitchen-3"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 4v17m-3 -17v3a3 3 0 1 0 6 0v-3" /><path d="M17 8m-3 0a3 4 0 1 0 6 0a3 4 0 1 0 -6 0" /><path d="M17 12v9" /></svg>
                <span class="ml-2 text-sm">My Orders</span>
            </a>
        </li>
        <li class="mt-5 mb-1 group {{ request()->routeIs('admin.transaction*') ? 'active' : '' }}">
            <a href="{{ route('admin.transaction.index') }}" class="flex items-center py-2 px-4 text-gray-200 hover:bg-emerald-800 hover:text-gray-100 rounded-md group-[.active]:bg-emerald-800 group-[.active]:text-white group-[.selected]:bg-emerald-800 group-[.selected]:text-gray-100 ">
                <svg  xmlns="http://www.w3.org/2000/svg"  width="22"  height="22"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="1.7"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-credit-card-pay"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 19h-6a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v4.5" /><path d="M3 10h18" /><path d="M16 19h6" /><path d="M19 16l3 3l-3 3" /><path d="M7.005 15h.005" /><path d="M11 15h2" /></svg>
                <span class="ml-2 text-sm">Transaction</span>
            </a>
        </li>
        <li class="mt-5 mb-1 group {{ request()->routeIs('admin.user.index') ? 'active' : '' }}">
            <a href="{{ route('admin.user.index') }}" class="flex items-center py-2 px-4 text-gray-200 hover:bg-emerald-800 hover:text-gray-100 rounded-md group-[.active]:bg-emerald-800 group-[.active]:text-white group-[.selected]:bg-emerald-800 group-[.selected]:text-gray-100  ">
                <svg  xmlns="http://www.w3.org/2000/svg"  width="22"  height="22"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="1.7"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-users"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" /><path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" /><path d="M16 3.13a4 4 0 0 1 0 7.75" /><path d="M21 21v-2a4 4 0 0 0 -3 -3.85" /></svg>
                <span class="ml-2 text-sm">Users</span>
            </a>
        </li>
        <li class="mb-1 group {{ request()->routeIs('admin.user.profile*') ? 'active' : '' }}">
            <a href="{{ route('admin.user.profile') }}" class="flex items-center py-2 px-4 text-gray-200 hover:bg-emerald-800 hover:text-gray-100 rounded-md group-[.active]:bg-emerald-800 group-[.active]:text-white group-[.selected]:bg-emerald-800 group-[.selected]:text-gray-100  ">
                <svg  xmlns="http://www.w3.org/2000/svg"  width="22"  height="22"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="1.7"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-user-circle"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" /><path d="M12 10m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" /><path d="M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855" /></svg>
                <span class="ml-2 text-sm">Profile</span>
            </a>
        </li>
        @endrole

        @role('cashier|member')
        <li class="mb-1 group {{ request()->routeIs('member.dashboard') ? 'active' : '' }}">
            <a href="{{ route('member.dashboard') }}" class="flex items-center py-2 px-4 text-gray-200 hover:bg-emerald-800 hover:text-gray-100 rounded-md group-[.active]:bg-emerald-800 group-[.active]:text-white group-[.selected]:bg-emerald-800 group-[.selected]:text-gray-100 ">
                <svg  xmlns="http://www.w3.org/2000/svg"  width="22"  height="22"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="1.7"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-home-2"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l-2 0l9 -9l9 9l-2 0" /><path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" /><path d="M10 12h4v4h-4z" /></svg>
                <span class="ml-2 text-sm">Dashboard</span>
            </a>
        </li>
        @role('cashier')
        <li class="mb-1 group {{ request()->routeIs('member.menu*') ? 'active' : '' }}">
            <a href="{{ route('member.menu.index') }}" class="flex items-center py-2 px-4 text-gray-200 hover:bg-emerald-800 hover:text-gray-100 rounded-md group-[.active]:bg-emerald-800 group-[.active]:text-white group-[.selected]:bg-emerald-800 group-[.selected]:text-gray-100  ">
                <svg  xmlns="http://www.w3.org/2000/svg"  width="22"  height="22"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="1.7"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-tools-kitchen-3"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 4v17m-3 -17v3a3 3 0 1 0 6 0v-3" /><path d="M17 8m-3 0a3 4 0 1 0 6 0a3 4 0 1 0 -6 0" /><path d="M17 12v9" /></svg>
                <span class="ml-2 text-sm">Menu</span>
            </a>
        </li>
        @endcan
        <li class="mt-5 mb-1 group {{ request()->routeIs('member.mymenu*') ? 'active' : '' }}">
            <a href="{{ route('member.mymenu') }}" class="flex items-center py-2 px-4 text-gray-200 hover:bg-emerald-800 hover:text-gray-100 rounded-md group-[.active]:bg-emerald-800 group-[.active]:text-white group-[.selected]:bg-emerald-800 group-[.selected]:text-gray-100 ">
                <svg  xmlns="http://www.w3.org/2000/svg"  width="22"  height="22"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="1.7"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-tools-kitchen-3"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 4v17m-3 -17v3a3 3 0 1 0 6 0v-3" /><path d="M17 8m-3 0a3 4 0 1 0 6 0a3 4 0 1 0 -6 0" /><path d="M17 12v9" /></svg>
                <span class="ml-2 text-sm">My Orders</span>
            </a>
        </li>
        <li class="mt-5 mb-1 group {{ request()->routeIs('member.transaction*') ? 'active' : '' }}">
            <a href="{{ route('member.transaction.index') }}" class="flex items-center py-2 px-4 text-gray-200 hover:bg-emerald-800 hover:text-gray-100 rounded-md group-[.active]:bg-emerald-800 group-[.active]:text-white group-[.selected]:bg-emerald-800 group-[.selected]:text-gray-100 ">
                <svg  xmlns="http://www.w3.org/2000/svg"  width="22"  height="22"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="1.7"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-credit-card-pay"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 19h-6a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v4.5" /><path d="M3 10h18" /><path d="M16 19h6" /><path d="M19 16l3 3l-3 3" /><path d="M7.005 15h.005" /><path d="M11 15h2" /></svg>
                <span class="ml-2 text-sm">Transaction</span>
            </a>
        </li>
        <li class="mb-1 group {{ request()->routeIs('member.profile.index*') ? 'active' : '' }}">
            <a href="{{ route('member.profile.index') }}" class="flex items-center py-2 px-4 text-gray-200 hover:bg-emerald-800 hover:text-gray-100 rounded-md group-[.active]:bg-emerald-800 group-[.active]:text-white group-[.selected]:bg-emerald-800 group-[.selected]:text-gray-100  ">
                <svg  xmlns="http://www.w3.org/2000/svg"  width="22"  height="22"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="1.7"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-user-circle"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" /><path d="M12 10m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" /><path d="M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855" /></svg>
                <span class="ml-2 text-sm">Profile</span>
            </a>
        </li>
        @endrole
        <li class="mt-5 mb-1 group {{ request()->routeIs('logout') ? 'active' : '' }}">
            <a href="#" class="flex items-center py-2 px-4 text-gray-200 hover:bg-emerald-800 hover:text-gray-100 rounded-md " onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <svg  xmlns="http://www.w3.org/2000/svg"  width="22"  height="22"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="1.7"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-logout-2"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 8v-2a2 2 0 0 1 2 -2h7a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-7a2 2 0 0 1 -2 -2v-2" /><path d="M15 12h-12l3 -3" /><path d="M6 15l-3 -3" /></svg>
                <span class="ml-2 text-sm">Sign Out</span>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </a>
        </li>
    </ul>
</div>
<div class="fixed top-0 left-0 w-full h-full bg-black/50 z-40 md:hidden sidebar-overlay"></div>
