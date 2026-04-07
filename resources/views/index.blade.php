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
        <x-header></x-header>

        <!--Hero Section Start---->
            <section id="hero-section" class="w-full h-screen flex flex-col items-center justify-center gap-5">

                <h1 class="font-bold text-2xl lg:text-4xl uppercase text-center">
                    Your Tagline here
                </h1>
                <p class="text-xs lg:text-xl">
                    Description For Paragraph here
                </p>
                <button class="bg-blue-500 w-fit p-2 font-bold text-xs lg:text-base">
                    Sign Up now
                </button>

            </section>
        <!--Hero Section End-->

        <!--Book Section Start----> 
            <section id="book-section" class="w-full p-5 lg:p-10 flex flex-col">
                <!--Ini bagian atas section-->
                <div class="flex flex-row items-center">
                    <h2 class="font-bold text-2xl lg:text-4xl">
                        Section Title
                    </h2>
                    <a href="/books" class="ms-auto hidden lg:inline">
                        See More
                    </a>
                </div>

                <!--ini Bagian bawah/list buku-->
                <div class="mt-5 lg:mt-10 grid grid-cols-1 lg:grid-cols-4 gap-5 lg:gap-10">
                    @for ($index = 0; $index < 8; $index++)
                        <x-book-item></x-book-item>
                    @endfor
                </div>

                <!--for mobile device-->
                <a href="/books" class=" inline mt-5 mx-auto lg:hidden">
                    See More
                </a>
            </section>
        <!--Book Section End-->
        
        <!--ini Footer-->
        <x-footer></x-footer>
    </body>
</html>