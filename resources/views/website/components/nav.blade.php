<nav
    class="top-0 fixed z-50 w-full flex flex-wrap items-center justify-between px-2 py-3 navbar-expand-lg bg-white shadow">
    <div class="container px-4 mx-auto flex flex-wrap items-center justify-between">
        <div class="w-full relative flex justify-between lg:w-auto lg:static lg:block lg:justify-start">
            <a class="text-blueGray-700 text-sm font-bold leading-relaxed inline-block mr-4 py-2 whitespace-nowrap uppercase"
                href="./index.html">شرکت تولیدی پوشاک زرین</a><button
                class="cursor-pointer text-xl leading-none px-3 py-1 border border-solid border-transparent rounded bg-transparent block lg:hidden outline-none focus:outline-none"
                type="button" onclick="toggleNavbar('example-collapse-navbar')">
                <i class="fas fa-bars"></i>
            </button>
        </div>
        <div class="lg:flex flex-grow items-center bg-white lg:bg-opacity-0 lg:shadow-none hidden"
            id="example-collapse-navbar">
            <ul class="flex flex-col lg:flex-row list-none lg:mr-auto items-center">

                <li class="flex items-center">
                    <a class="hover:text-blueGray-500 text-blueGray-700 px-3 py-4 lg:py-2 flex gap-1 items-center text-xs uppercase font-bold"
                        href="{{ route('home') }}">
                        <i class="text-blueGray-400 fa-solid fa-house text-lg leading-lg"></i>
                        <span class=" inline-block ml-2">صفحه اصلی</span>
                    </a>
                </li>
                <li class="flex items-center">
                    <a class="hover:text-blueGray-500 text-blueGray-700 px-3 py-4 lg:py-2 flex gap-1 items-center text-xs uppercase font-bold"
                        href="{{ route('about') }}">
                        <i class="text-blueGray-400 fa-solid fa-building text-lg leading-lg"></i>
                        <span class="inline-block ml-2">درباره ما</span>
                    </a>
                </li>
                <li class="flex items-center">
                    <a class="hover:text-blueGray-500 text-blueGray-700 px-3 py-4 lg:py-2 flex gap-1 items-center text-xs uppercase font-bold"
                        href="{{ route('services') }}">
                        <i class="text-blueGray-400 fa-solid fa-bell-concierge text-lg leading-lg"></i>
                        <span class="inline-block ml-2">خدمات ما</span>
                    </a>
                </li>
                <li class="flex items-center">
                    <a class="hover:text-blueGray-500 text-blueGray-700 px-3 py-4 lg:py-2 flex gap-1 items-center text-xs uppercase font-bold"
                        href="{{ route('contact') }}">
                        <i class="text-blueGray-400 fa-solid fa-phone-flip text-lg leading-lg"></i>
                        <span class="inline-block ml-2">تماس با ما</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
