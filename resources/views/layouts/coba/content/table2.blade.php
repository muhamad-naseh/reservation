@extends('layouts.coba.app', ['title' => 'Table 2'])

@section('content')
    <div class="p-2 mt-5">
        <div class="px-4 py-6 sm:px-0 bg-gray-100">
            <p class=" ml-4 max-w-2xl text-lg leading-6 text-gray-500 font-bold uppercase">Transaction Detail</p>
        </div>
        <div class=" border-t border-gray-100">
            <dl class="divide-y divide-gray-100">
                <div class="px-4 py-6 sm:grid sm:grid-cols-4 sm:gap-4 sm:px-0">
                    <dt class="ml-4 text-sm font-medium leading-6 text-gray-900">Full name</dt>
                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-3 sm:mt-0">Margot Foster</dd>
                </div>
                <div class="px-4 py-6 sm:grid sm:grid-cols-4 sm:gap-4 sm:px-0">
                    <dt class="ml-4 text-sm font-medium leading-6 text-gray-900">Application for</dt>
                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-3 sm:mt-0">Backend Developer</dd>
                </div>
                <div class="px-4 py-6 sm:grid sm:grid-cols-4 sm:gap-4 sm:px-0">
                    <dt class="ml-4 text-sm font-medium leading-6 text-gray-900">Email address</dt>
                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-3 sm:mt-0">margotfoster@example.com</dd>
                </div>
                <div class="px-4 py-6 sm:grid sm:grid-cols-4 sm:gap-4 sm:px-0">
                    <dt class="ml-4 text-sm font-medium leading-6 text-gray-900">Salary expectation</dt>
                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-3 sm:mt-0">$120,000</dd>
                </div>
                <div class="px-4 py-6 sm:grid sm:grid-cols-4 sm:gap-4 sm:px-0">
                    <dt class="ml-4 text-sm font-medium leading-6 text-gray-900">About</dt>
                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-3 sm:mt-0">Fugiat ipsum ipsum deserunt culpa aute sint do nostrud anim incididunt cillum culpa consequat. Excepteur qui ipsum aliquip consequat sint. Sit id mollit nulla mollit nostrud in ea officia proident. Irure nostrud pariatur mollit ad adipisicing reprehenderit deserunt qui eu.</dd>
                </div>
            </dl>
        </div>
    </div>



    <div class="relative overflow-x-auto mt-10">
        <table class="w-full text-sm text-left text-gray-500 ">
            <thead class="text-xs text-gray-700 uppercase bg-gray-100">
                <tr>
                    <th scope="col" class="px-6 py-3 rounded-s-lg">
                        Product name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Qty
                    </th>
                    <th scope="col" class="px-6 py-3 rounded-e-lg">
                        Price
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                        Apple MacBook Pro 17"
                    </th>
                    <td class="px-6 py-4">
                        1
                    </td>
                    <td class="px-6 py-4">
                        $2999
                    </td>
                </tr>
            </tbody>
            <tfoot>
            <tr class="font-semibold text-gray-900">
                <th scope="row" class="px-6 py-3 text-base">Total</th>
                <td class="px-6 py-3">3</td>
                <td class="px-6 py-3">21,000</td>
            </tr>
            </tfoot>
        </table>
    </div>
@endsection
