<div class="relative overflow-x-auto sm:rounded-lg ">
    <div class="p-4 text-2xl font-bold uppercase text-gray-900">
        <div class="mb-7 text-center">
            My Orders
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
                    NAME
                </th>
                <th scope="col" class="px-6 py-3">
                    ACTION
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach ($menus as $i => $ata)
                <tr class="bg-white border-b">
                    <th class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        {{ $categories->firstItem() + $i }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $category->name }}
                    </td>

                    <td class="px-6 py-4">
                        <x-button-edit :url="route('admin.category.edit', $category->id)" />
                        <x-button-delete :id="$category->id" :url="route('admin.category.destroy', $category->id)" />
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="mt-7">{{ $categories->links() }}</div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card card-dark">
            <div class="card-header">
                <h1 class="card-title">
                    MY MENU
                </h1>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.mymenu') }}" method="GET" class="mb-3 mt-3">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search by menu title..."
                               value="{{ request()->search }}" name="search">
                        <span class="input-group-append">
                                <button type="button" class="btn btn-info">
                                    <i class="fas fa-search"></i> Search
                                </button>
                            </span>
                    </div>
                </form>
                <hr>
                @forelse ($menus as $data)
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <img src="{{ $data->menu->image }}" class="mr-3 shadow-custom w-100">
                        </div>
                        <div class="col-md-9 mb-3 text-dark">
                            <h5 class="mt-2">{{ $data->menu->name }}</h5>
                            <!--mobile -->
                            <div class="d-block d-md-none d-lg-none mt-3">
                                <button type="button" class="btn btn-primary btn-md mb-2 w-100" data-toggle="modal" data-target="#modal default{{ $data->menu->id }}">
                                    <i class="fas fa-comments mr-1"></i> Review Menu
                                </button>
                                <div class="modal fade" id="modal-default{{ $data->menu->id }}">
                                    <div class="modal-dialog">
                                        <form action="{{ route('admin.review', $data->menu->id) }}" method="POST">
                                            @csrf
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Review Menu</h4>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <x-select name="rating" title="Rating">
                                                        <option value="1">1 </option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                    </x-select>
                                                    <x-textarea title="Review" name="review" value="{{ old('review') }}" placeholder="" />
                                                </div>
                                                <div class="modal-footer justify-content-between">
                                                    <button type="button" class="btn btn-default"
                                                            data-dismiss="modal">Close</button>
                                                    <button class="btn btn-success" type="submit">
                                                        <i class="fas fa-check mr-1"></i> Save Review
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- end mobile -->
                            <!-- desktop -->
                            <div class="d-none d-md-block d-lg-block mt-3">
                                <button type="button" class="btn btn-primary btn-md mb-2 w-100" data-toggle="modal" data-target="#modal default{{ $data->menu->id }}">
                                    <i class="fas fa-comments mr-1"></i> Review Menu
                                </button>
                                <div class="modal fade" id="modal-default{{ $data->menu->id }}">
                                    <div class="modal-dialog">
                                        <form action="{{ route('admin.review', $data->menu->id) }}" method="POST">
                                            @csrf
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Review Menu</h4>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <x-select name="rating" title="Rating">
                                                        <option value="1">1 </option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                    </x-select>
                                                    <x-textarea title="Review" name="review"
                                                                value="{{ old('review') }}" placeholder="" />
                                                </div>
                                                <div class="modal-footer justify-content-between">
                                                    <button type="button" class="btn btn-default"
                                                            data-dismiss="modal">Close</button>
                                                    <button class="btn btn-success" type="submit">
                                                        <i class="fas fa-check mr-1"></i> Save Review
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="modal fade" id="modal-default{{ $data->menu->id }}">
                                    <div class="modal-dialog">
                                        <form action="" method="POST">
                                            @csrf
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Review MENU</h4>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <x-select name="rating" title="Rating">
                                                        <option value="1">1 </option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                    </x-select>
                                                    <x-textarea title="Review" name="review"
                                                                value="{{ old('review') }}" placeholder="" />
                                                </div>
                                                <div class="modal-footer justify-content-between">
                                                    <button type="button" class="btn btn-default"
                                                            data-dismiss="modal">Close</button>
                                                    <button class="btn btn-success" type="submit">
                                                        <i class="fas fa-check mr-1"></i> Save Review
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- end desktop -->
                            <hr>
                            <div class="mt-2">
                                Licensed to :
                                <p>
                                    <b>{{ $data->transaction->user->name }}</b>
                                    <i>({{ $data->transaction->user->email }})</i>
                                    — {{ $data->transaction->created_at->format('d-m-Y H:i:s') }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <hr>
                @empty
                    <div class="row">
                        <div class="col-12 d-flex justify-content-center">
                            <img src="{{ asset('menu.svg') }}" class="img-fluid" width="60%">
                        </div>
                    </div>
                @endforelse
                <div class="d-flex justify-content-end">{{ $menus->links() }}</div>
            </div>
        </div>
    </div>
</div>

<!-- Modal toggle -->
<button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center " type="button">
    Toggle modal
</button>

<!-- Main modal -->
<div id="authentication-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow ">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t ">
                <h3 class="text-xl font-semibold text-gray-900 ">
                    Sign in to our platform
                </h3>
                <button type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="authentication-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5">
                <form class="space-y-4" action="#">
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Your email</label>
                        <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="name@company.com" required />
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 ">Your password</label>
                        <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " required />
                    </div>
                    <div class="flex justify-between">
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 " required />
                            </div>
                            <label for="remember" class="ms-2 text-sm font-medium text-gray-900 ">Remember me</label>
                        </div>
                        <a href="#" class="text-sm text-blue-700 hover:underline ">Lost Password?</a>
                    </div>
                    <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">Login to your account</button>
                    <div class="text-sm font-medium text-gray-500 ">
                        Not registered? <a href="#" class="text-blue-700 hover:underline ">Create account</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
