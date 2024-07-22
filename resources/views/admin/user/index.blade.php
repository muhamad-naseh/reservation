@extends('layouts.backend.app', ['title' => 'User'])

@section('content')

    <div class="relative overflow-x-auto sm:rounded-lg ">
        <div class="p-4 text-2xl font-bold uppercase text-gray-900">
            <div class="mb-7 text-center">
                Data User
            </div>
        </div>

        <div class="p-4 shadow-md">
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
                        EMAIL
                    </th>
                    <th scope="col" class="px-6 py-3">
                        ROLE
                    </th>
                    <th scope="col" class="px-6 py-3">
                        ACTION
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach ($users as $i => $user)
                    <tr class="bg-white border-b">
                        <th class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            {{ $users->firstItem() + $i }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $user->name }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $user->email }}
                        </td>
                        <td class="px-6 py-4">
                            @foreach ($user->roles as $role)
                                {{ $role->name }}
                            @endforeach
                        </td>

                        <td class="px-6 py-4">
                            <button data-modal-target="authentication-modal{{ $user->id }}" data-modal-toggle="authentication-modal{{ $user->id }}" class="text-sm font-medium text-yellow-500 hover:underline ml-2 mr-2" type="button">
                              Edit
                            </button>

                            <!-- Main modal -->
                            <div id="authentication-modal{{ $user->id }}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                <div class="relative p-4 w-full max-w-md max-h-full">
                                    <!-- Modal content -->
                                    <div class="relative bg-white rounded-lg shadow">
                                        <!-- Modal header -->
                                        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                                            <h3 class="text-xl font-semibold text-g">
                                                {{ $user->name }}
                                            </h3>
                                            <button type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="authentication-modal{{ $user->id }}">
                                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                                </svg>
                                                <span class="sr-only">Close modal</span>
                                            </button>
                                        </div>
                                        <!-- Modal body -->
                                        <div class="p-4 md:p-5">
                                            <form class="space-y-4" action="{{ route('admin.user.update', $user->id) }}" method="post">
                                                @csrf
                                                @method('PUT')
                                                <div>
                                                    <label for="role" class="block mb-2 text-sm font-medium text-slate-700 after:content-['*'] after:text-pink-600 after:ml-0.5">Role</label>
                                                    <select id="role" name="roles[]"
                                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5
                                                            focus:outline-none focus:ring-1 focus:ring-emerald-800 focus:border-emerald-800  placeholder:text-slate-400
                                                            invalid:text-pink-600 invalid:focus:border-pink-700 invalid:focus:ring-pink-700 peer @error('role') is-invalid @enderror"
                                                    >
                                                        @foreach ($roles as $role)
                                                            <option value="{{ $role->name }}" @selected($user->roles()->find($role->id))>
                                                                {{ $role->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    @error('role')
                                                    <p class="text-pink-500 text-sm font-normal invisible peer-invalid:visible">
                                                        {{ $message }}
                                                    </p>
                                                    @enderror
                                                </div>
                                                <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">Save Role</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <x-button-delete :id="$user->id" :url="route('admin.user.destroy', $user->id)" />
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="mt-7">{{ $users->links() }}</div>
        </div>
    </div>
@endsection
