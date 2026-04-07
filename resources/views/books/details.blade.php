<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>BookDetail | {{ config('app.name', 'E Library Default') }}</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="w-full bg-white flex flex-col">
        <!--Ini Header-->
        <x-header></x-header>

        <!--Content Book Details:Start-->
            <section class="w-full flex flex-col lg:flex-row p-5 lg:p-10 gap-5 lg:gap-10">
                <div class=" w-full lg:w-90 h-72 lg:h-112.5 bg-gray-400 flex items-center justify-center shrink-0">
                    Book Image
                </div>

                <div class="w-full flex flex-col">
                    <!--Title-->
                    <h1 class="font-bold text-2xl lg:text-4xl uppercase">
                        Book Title
                    </h1>

                    <!--Published Information-->
                    <div class="flex flex-row mt-2 gap-2 items-center">
                        <div class="w-6 h-6 bg-gray-400">
                        </div>
                        <span class="text-xs lg:text-base">Published Information</span>
                    </div>

                    <!--Creator Name-->
                    <div class="flex flex-row mt-2 gap-2 items-center">
                        <div class="w-6 h-6 bg-gray-400">
                        </div>
                        <span class="text-xs lg:text-base">Creator Name</span>
                    </div>

                    <!--Total Views-->
                    <div class="flex flex-row mt-2 gap-2 items-center">
                        <div class="w-6 h-6 bg-gray-400">
                        </div>
                        <span class="text-xs lg:text-base">Total Views</span>
                    </div>
                    <hr class="my-5">
                    <!--Description Book-->
                     <p class="text-xs lg:text-base">
                        Description Book Header. Over fact all son tell this any his. No insisted confined of weddings to returned to debating rendered. Keeps order fully so do party means young. Table nay him jokes quick. In felicity up to graceful mistaken horrible consider. Abode never think to at. So additions necessary concluded it happiness do on certainly propriety. On in green taken do offer witty of.
                    </p>

                    <button class="mt-5 p-2.5 bg-blue-500 font-bold w-full lg:w-fit text-xs lg:text-base">
                        BACA ONLINE
                    </button>
                </div>
            </section>
         <!--Content Book Details:End-->

        <!--ini Footer-->
        <x-footer></x-footer>
    </body>
</html>