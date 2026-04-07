<!--Ini Header Start-->
<nav class="w-full h-20 flex flex-row  bg-gray-100 px-5 lg:px-10 items-center">
    <!--Ini untuk Logo-->
    <div class="h-fit p-2 border">
        E LIBRARY
    </div>

    <!--Ini untuk Menu Desktop:start-->
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
                <a href="/login" class="bg-blue-500 p-2">Login</a>
            </li>
        </ul>
    <!--Ini untuk Menu Desktop:end-->

    <!--Menu mobile:start-->
        <div class="w-10 h-10 bg-gray-500 ms-auto inline lg:hidden" onclick="showMenu(true)">
        </div>
    <!--Menu mobile:start-->
</nav>
<!--Header End-->

<div id="mobile-menu-layout" class="hidden w-full h-screen bg-white p-5 fixed top-0 left-0">
    <div class="w-10 h-10 bg-gray-400 ms-auto" onclick="showMenu(false)">
    </div>

    <ul class="flex flex-col gap-4">
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
</div>