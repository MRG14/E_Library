<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Categories | {{ config('app.name', 'E Library Default') }}</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="w-full bg-white flex flex-col">
        <!--Ini Header-->
        <x-header></x-header>

        <!--Book Section Start----> 
            <section id="category" class="w-full p-5 lg:p-10 flex flex-col">
                <!--Ini bagian atas section-->
                <div class="flex flex-row items-center">
                    <h2 class="font-bold text-2xl lg:text-4xl">
                        Section Title
                    </h2>
                </div>

                <!--ini Bagian bawah/list buku-->
                <div class="mt-5 lg:mt-10 grid grid-cols-1 lg:grid-cols-2 gap-5 lg:gap-10">
                    @for ($index = 0; $index < 4; $index++)
                        <x-category-item></x-category-item>
                    @endfor
                </div>

            </section>
        <!--Book Section End-->
        
        <!--ini Footer-->
        <x-footer></x-footer>
    </body>
</html>