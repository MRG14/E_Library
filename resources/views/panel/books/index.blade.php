<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Panel Semua Karya | {{ config('app.name', 'E Library Default') }}</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="w-full bg-white flex flex-col">
        <!--Ini Header-->
        <x-header></x-header>
        
        <!--Section:start-->
            <section class="w-full h-screen flex flex-row gap-10 px-10 items-center">
                <!--Ini sidebar panel-->
                <aside class="w-3/12 h-fit pt-10 px-5 pb-5 bg-gray-200 shrink-0 flex flex-col">
                    <!--Ini Avatar:start-->
                    <div class="w-25 h-25 border-4 border-blue-400 rounded-full mx-auto overflow-hidden p-2">
                        <div class="w-full h-full bg-blue-400 rounded-full">
                        </div>
                    </div>
                    <!--Ini Avatar:end-->

                    <span class="uppercase font-bold text-base mx-auto mt-3">
                        Username
                    </span>

                    <ul class="flex flex-col w-full mt-5">
                        <li class="font-bold text-xs text-white p-2 bg-blue-500">
                            Semua Karya
                        </li>
                        <li class="font-bold text-xs p-2">
                            Manajemen Pengguna
                        </li>
                        <li class="font-bold text-xs p-2">
                            Pengaturan Data
                        </li>
                        <li class="font-bold text-xs p-2">
                            Pengaturan Kata sandi
                        </li>
                        <li class="font-bold text-xs p-2">
                            Keluar
                        </li>
                    </ul>
                </aside>

                <!--ini main panel-->
                <main class="w-full h-8/12 bg-gray-500 flex flex-col p-5">
                    <div class="w-full flex flex-row items-center">
                        <h1 class="font-bold text-2xl">
                            Semua Karya
                        </h1>

                        <button class="bg-blue-500 p-2 font-bold ms-auto">tambah data</button>
                    </div>

                    <!--Table Form:Start-->
                        <div class="overflow-x-auto mt-5">
                            <table class="w-full h-full">
                                <thead class="bg-gray-300 text-left">
                                    <tr>
                                        <th class="py-2">Action</th>
                                        <th class="py-2">Title</th>
                                        <th class="py-2">Slug</th>
                                        <th class="py-2">Category</th>
                                        <th class="py-2">Status</th>
                                        <th class="py-2">Approve At</th>
                                        <th class="py-2">Created At</th>
                                        <th class="py-2">Created By</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @for ($index=0; $index<10; $index++)
                                        <tr>
                                            <td>Review Button</td>
                                            <td>Judul 1</td>
                                            <td>judul-buku-123</td>
                                            <td>Edukasi</td>
                                            <td>Active</td>
                                            <td>8 April 2026 | 09.30</td>
                                            <td>8 April 2026 | 09.30</td>
                                            <td>John Doe</td>
                                        </tr>
                                    @endfor
                                </tbody>
                            </table>
                        </div>
                    <!--Table Form:End-->
                </main>
            </section>
        <!--Section:end-->
    </body>
</html>