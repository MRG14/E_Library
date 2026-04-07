<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home | {{ config('app.name', 'E Library Default') }}</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="w-full bg-white flex flex-col">
        <!--Ini Header Start-->
            <nav class="w-full h-20 flex flex-row  bg-gray-100 px-5 lg:px-10 items-center">
                <div class="h-fit p-2 border">
                    E LIBRARY
                </div>

                <ul class="hidden lg:flex flex-row gap-7.5 ms-auto items-center">
                    <li>
                        <a href="/">Home</a>
                    </li>
                    <li>
                       <a href="/books">Books</a>
                    </li>
                    <li>
                        <a href="/categories">Categories</a>
                    </li>
                    <li>
                        <button class="bg-blue-500 p-2">Login</button>
                    </li>
                </ul>

                <div class="w-10 h-10 bg-gray-500 ms-auto inline lg:hidden">

                </div>
            </nav>
        <!--Header End-->

        <!--Book Section Start----> 
            <section id="book-section" class="w-full p-5 lg:p-10 flex flex-col">

                <input type="search" class="w-full lg:w-90 h-10 bg-gray-300 p-2.5 font-light text-base" placeholder="Search Book Here">

                <!--ini Bagian bawah/list buku-->
                <div class="mt-5 lg:mt-10 grid grid-cols-1 lg:grid-cols-4 gap-5 lg:gap-10">
                    @for ($index = 0; $index < 4; $index++)
                        <div class="w-full h-60 lg:h-100 bg-gray-400">
                        </div>
                    @endfor
                </div>
            </section>
        <!--Book Section End-->

        <!--Footer Start-->
            <footer class="w-full px-5 lg:px-10 pt-5 lg:pt-10 pb-5 flex flex-col">
                <div class="w-full grid grid-cols-1 lg:grid-cols-4 gap-10 lg:gap-0 ">
                    <!--Grid Kiri-->
                        <div class="flex flex-col lg:col-span-2">
                            <div class="w-fit h-fit p-2 border">
                                E LIBRARY
                            </div>
                            <p class="font-light mt-4 text-base">
                                PlaceHolder Text
                            </p>
                        </div>

                    <!--Grid Tengah-->
                        <div class="flex flex-col">
                            <span class="font-bold lg:font-light text-base lg:text-2xl uppercase">
                                Links
                            </span>
                            <a href="#" class="mt-3 lg:mt-4 font-light">
                                Link 1
                            </a>
                            <a href="#" class="font-light">
                                Link 2
                            </a>
                        </div>
                        
                    <!--Grid Kanan-->
                        <div class="flex flex-col">
                            <span class="font-bold lg:font-light text-base lg:text-2xl uppercase">
                                Contact
                            </span>
                            <a href="#" class="mt-3 #lg:mt-4 font-light text-base">
                                Contact 1
                            </a>
                            <a href="#" class="font-light">
                                Contact 2
                            </a>
                        </div>

                </div>

                <span class="font-light text-xs mt-5  lg:mt-10 mx-auto">
                    &copy; Copyright 2026 Mr.G Corps
                </span>
            </footer>
        <!--Footer end-->

    </body>
</html>