<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Home | {{ config('app.name', 'E Library Default') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="w-full bg-white flex flex-col">
    <!--Ini Header-->
    {{-- <x-header></x-header> --}}

    <!--Content Section:Start-->
    <section class="w-full h-screen flex items-center justify-center bg-gray-500 px-5 lg:p-0">
        <form class="w-full lg:w-100 px-5 py-20 bg-white flex flex-col">
            <!--Ini untuk Logo-->
            <div class="w-fit h-fit p-2 border mx-auto">
                E LIBRARY
            </div>

            <!--Label content-->
            <label class="mt-10 text-xs lg:text-base">
                Name
            </label>
            <input class="w-full h-10 mt-2 bg-gray-400 p-2 text-xs lg:text-base"/>

            <label class="mt-4 text-xs lg:text-base">
                Email
            </label>
            <input class="w-full h-10 mt-2 bg-gray-400 p-2 text-xs lg:text-base"/>

            <label class="mt-4 text-xs lg:text-base">
                Password
            </label>
            <input class="w-full h-10 mt-2 bg-gray-400 p-2 text-xs lg:text-base"/>

            <button class="w-full h-10 bg-blue-400 text-white font-bold uppercase mt-4 text-xs lg:text-base">Sign In</button>

            <div class="flex flex-row gap-1 items-center justify-center mt-4 text-xs">
                <a href="/login">Login</a>
                <span>|</span>
                <a href="/forgot-password">Forgot Password</a>
            </div>
        </form>
    </section>
    <!--Content Section:End-->

    <!--ini Footer-->
    {{-- <x-footer></x-footer> --}}
</body>

</html>