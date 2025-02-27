<nav
    class="absolute top-0 right-0 w-full z-10 bg-transparent md:flex-row md:flex-nowrap md:justify-end flex items-center p-4">
    <div class="w-full mx-autp items-center flex justify-between md:flex-nowrap flex-wrap md:px-10 px-4">
        <a class="text-white text-sm uppercase md:inline-block font-semibold" href="./index.html">
            داشبورد
        </a>
        <ul class="flex-col md:flex-row list-none items-center hidden md:flex">
            <a class="text-blueGray-500 block" href="#pablo" onclick="openDropdown(event,'user-dropdown')">
                <div class="items-center flex">
                    <span
                        class="w-12 h-12 text-sm text-white bg-blueGray-200 inline-flex items-center justify-center rounded-full">
                        <i class="fa fa-user"></i>
                    </span>
                </div>
            </a>
            <div class="hidden bg-white text-base z-50 float-left py-2 list-none text-right rounded shadow-lg min-w-48"
                id="user-dropdown">
                <a href="#pablo"
                    class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">
                    پروفایل کاربری
                </a>
                <a href="#pablo"
                    class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">
                    تنظیمات
                </a>
                <a href="#pablo"
                    class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">
                    بخش های مختلف
                </a>
                <div class="h-0 my-2 border border-solid border-blueGray-100"></div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit">
                        {{ __('خروج') }}
                    </button>
                </form>
            </div>
        </ul>
    </div>
</nav>
