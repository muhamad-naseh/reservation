<div class="py-3 px-6 bg-white flex items-center shadow-md shadow-black/5 sticky top-0 left-0 z-30">
    <button type="button" class="text-lg text-gray-600 sidebar-toggle">
        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-menu-2"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 6l16 0" /><path d="M4 12l16 0" /><path d="M4 18l16 0" /></svg>
    </button>

    <div class="ml-auto flex items-center mr-3">
        <button id="dropdownNotificationButton" data-dropdown-toggle="dropdownNotification" class="relative inline-flex items-center text-sm font-medium text-center text-gray-500 hover:text-gray-900 focus:outline-none " type="button">
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 14 20">
                <path d="M12.133 10.632v-1.8A5.406 5.406 0 0 0 7.979 3.57.946.946 0 0 0 8 3.464V1.1a1 1 0 0 0-2 0v2.364a.946.946 0 0 0 .021.106 5.406 5.406 0 0 0-4.154 5.262v1.8C1.867 13.018 0 13.614 0 14.807 0 15.4 0 16 .538 16h12.924C14 16 14 15.4 14 14.807c0-1.193-1.867-1.789-1.867-4.175ZM3.823 17a3.453 3.453 0 0 0 6.354 0H3.823Z"/>
            </svg>

            <div class="absolute block w-3.5 h-3.5 bg-red-500 border-2 border-white rounded-full -top-0.5 start-2.5 "></div>
        </button>

        <!-- Dropdown menu -->
        <div id="dropdownNotification" class="z-20 hidden w-72 max-w-sm bg-white divide-y divide-gray-100 rounded-lg drop-shadow-md mr-4" aria-labelledby="dropdownNotificationButton">
            <div class="block px-4 py-2 font-medium text-center text-gray-700 rounded-t-lg bg-gray-50 ">
                {{ Auth::user()->unreadNotifications->count() }} Notifications
            </div>

            <div class="divide-y divide-gray-100 ">
                @foreach (Auth::user()->notifications as $notification)
                    @if ($notification->read_at == null)
                        <form action="{{ route('admin.markNotification', $notification->id) }}" method="POST" >
                            @csrf
                            <button type="submit" class="block px-4 py-3 ps-3 w-full text-left hover:bg-gray-100">
                                <div class="text-gray-500 text-sm mb-1.5 ">{{ $notification->data['message'] }}</div>
                                <div class="text-xs text-blue-600 ">{{ $notification->created_at->diffForHumans() }}</div>
                            </button>
                            <button type="submit" class="block px-4 py-3 ps-3 w-full text-left hover:bg-gray-100">
                                <div class="text-gray-500 text-sm mb-1.5 ">New message from</div>
                                <div class="text-xs text-blue-600 ">a few moments ago</div>
                            </button>
                        </form>
                    @endif
                    @if($loop->last)
                            <form action="{{ route('admin.markAllRead') }}" method="post">
                                @csrf
                                <div class="block py-2 text-sm font-medium text-center text-gray-900 rounded-b-lg bg-gray-50 hover:bg-gray-100 ">
                                    <button class="inline-flex items-center ">
                                        <svg class="w-4 h-4 me-2 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 14">
                                            <path d="M10 0C4.612 0 0 5.336 0 7c0 1.742 3.546 7 10 7 6.454 0 10-5.258 10-7 0-1.664-4.612-7-10-7Zm0 10a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z"/>
                                        </svg>
                                        View all
                                    </button>
                                </div>
                            </form>
                    @endif
                @endforeach
            </div>

        </div>
    </div>
</div>
