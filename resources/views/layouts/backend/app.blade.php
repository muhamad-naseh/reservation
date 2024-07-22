<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title }} - {{ config('app.name') }}</title>

    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css"  rel="stylesheet" />
    <style type="text/css">
        @media (min-width: 768px){
            .main.active{
                margin-left: 0px;
                width: 100%;
            }
        }
    </style>
</head>
<body class="text-gray-800 font-inter">

<!-- start: Sidebar -->
@include('layouts.backend.partials.sidebar')
<!-- end: Sidebar -->

<!-- start: Main -->
<main class="w-full md:w-[calc(100%-256px)] md:ml-64 bg-gray-50 min-h-screen transition-all main">
    @include('layouts.backend.partials.navbar')

    <div class="p-6">
        @yield('content')
    </div>
</main>`
<!-- end: Main -->

<!-- start: Sweet alert -->
@include('sweetalert::alert')
<!-- end: Sweet alert -->

{{--<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>--}}

<script src="https://unpkg.com/@popperjs/core@2"></script>

<script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@include('layouts.backend.partials.script')

<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
@stack('js')
</body>
</html>
