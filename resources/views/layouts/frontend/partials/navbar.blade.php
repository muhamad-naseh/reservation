<header class="fixed top-0 w-full z-10 opacity-85">
    <nav class="bg-white border-gray-200 py-4">
        <div class="flex flex-wrap items-center justify-between max-w-screen-2xl px-4 mx-auto">
            <a href="#" class="flex items-center text-emerald-900">
                <svg  xmlns="http://www.w3.org/2000/svg"  width="30"  height="30"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"
                      stroke-width="2.5" stroke-linecap="round"  stroke-linejoin="round"class="icon icon-tabler icons-tabler-outline icon-tabler-christmas-tree">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 3l4 4l-2 1l4 4l-3 1l4 4h-14l4 -4l-3 -1l4 -4l-2 -1z" />
                    <path d="M14 17v3a1 1 0 0 1 -1 1h-2a1 1 0 0 1 -1 -1v-3" />
                </svg>
                <span class="self-center text-xl font-bold whitespace-nowrap ">Vill Garden</span>
            </a>
            <div class="flex items-center lg:order-2">
                @guest()
                    <a href="{{ route('login') }}" class="inline-flex items-center py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-emerald-900 lg:p-0">
                        <span class="mr-2">Login</span>
                        <svg  xmlns="http://www.w3.org/2000/svg"  width="20"  height="20"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-right"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l14 0" /><path d="M13 18l6 -6" /><path d="M13 6l6 6" /></svg>
                    </a>
                @endguest
                @auth()
                    <a href="{{ route('cart.index') }}" class="flex items-center text-emerald-900 mr-6 {{ Route::is('cart.index') ? 'text-blue-500' : '' }}">
                        <svg  xmlns="http://www.w3.org/2000/svg"  width="26"  height="26"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="3"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-shopping-cart"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M17 17h-11v-14h-2" /><path d="M6 5l14 1l-1 7h-13" /></svg>
                    </a>
                    <button type="button" id="dropdownHoverButton" data-dropdown-toggle="dropdownHover" data-dropdown-trigger="hover" class=" py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 text-center inline-flex items-center hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-emerald-900 lg:p-0 {{ activeNav('category*') }}">
                        <img src="{{ Auth::user()->avatar }}" alt="avatar"
                             class="w-8 h-8 rounded-full border border-gray-200 mr-1">
                        <span class="hidden ">{{ Auth::user()->name }}</span>
                    </button>
                        <div id="dropdownHover" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 ">
                            <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownHoverButton">
                                <li>
                                    @role('admin')
                                        <a href="{{ route('admin.dashboard') }}" class="block px-4 py-2 hover:bg-gray-100">Dashboard</a>
                                    @else
                                        <a href="{{ route('member.dashboard') }}" class="block px-4 py-2 hover:bg-gray-100">Dashboard</a>
                                    @endrole
                                </li>
                                <li>
                                    @role('admin')
                                        <a href="{{ route('admin.user.profile') }}" class="block px-4 py-2 hover:bg-gray-100">Profile</a>
                                    @else
                                        <a href="{{ route('member.profile.index') }}" class="block px-4 py-2 hover:bg-gray-100">Profile</a>
                                    @endrole
                                </li>
                                <li>
                                    <a href="{{ route('logout') }}" class="block px-4 py-2 hover:bg-gray-100" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        Logout
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                              class="d-none">
                                            @csrf
                                        </form>
                                    </a>
                                </li>
                            </ul>
                        </div>
                @endauth
                <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="mobile-menu-2" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                    <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>

            </div>
            <div class="items-center justify-between hidden w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                    <li>
                        <a href="{{ route('home') }}" class="block py-2 pl-3 pr-4 text-white bg-emerald-700 rounded lg:bg-transparent lg:text-emerald-900 lg:p-0 {{ activeNav('home') }}" aria-current="page">Home</a>
                    </li>
                    <li>
                        <button type="button" id="dropdownDelayButton" data-dropdown-toggle="dropdownDelay" data-dropdown-delay="500" data-dropdown-trigger="hover" class=" py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 text-center inline-flex items-center hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-emerald-900 lg:p-0 {{ activeNav('category*') }}">
                            Category
                            <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                            </svg>
                        </button>
                        <div id="dropdownDelay" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 ">
                            <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownDelayButton">
                                @foreach ($categories as $category)
                                <li>
                                    <a href="{{ route('category', $category->slug) }}" class="block px-4 py-2 hover:bg-gray-100">{{ $category->name }}</a>
                                </li>
                                @endforeach
                            </ul>
                        </div>

                    </li>
                    <li>
                        <a href="{{ route('menu.index') }}" class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-emerald-900 lg:p-0 {{ activeNav('menu.index') }}">Menu</a>
                    </li>
                    <li>
                        <a href="{{ route('review') }}" class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-emerald-900 lg:p-0">Review</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
