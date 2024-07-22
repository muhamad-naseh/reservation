<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>

    @vite('resources/css/app.css')
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="bg-gray-200">

<div class="w-full max-w-sm mx-auto my-60 p-4 bg-white border border-gray-200 rounded-lg drop-shadow-lg sm:p-6 md:p-8">
    <div class="mb-10 ml-32">
        <a href="#" class=" text-emerald-900">
            <svg  xmlns="http://www.w3.org/2000/svg"  width="40"  height="40"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"
                  stroke-width="2.5" stroke-linecap="round"  stroke-linejoin="round"class="icon icon-tabler icons-tabler-outline icon-tabler-christmas-tree">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 3l4 4l-2 1l4 4l-3 1l4 4h-14l4 -4l-3 -1l4 -4l-2 -1z" />
                <path d="M14 17v3a1 1 0 0 1 -1 1h-2a1 1 0 0 1 -1 -1v-3" />
            </svg>
        </a>
    </div>
    @yield('content')
</div>


<script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>
</body>

</html>
