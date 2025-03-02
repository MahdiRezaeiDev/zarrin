<nav
    class="absolute top-0 right-0 w-full z-10 bg-blueGray-600 hidden md:flex-row md:flex-nowrap md:justify-end md:flex items-center p-4">
    <div class="w-full mx-autp items-center flex justify-between md:flex-nowrap flex-wrap md:px-10 px-4">
        <a class="text-white text-sm uppercase md:inline-block font-semibold">
            {{ $title }}
        </a>
        <ul class="flex-col md:flex-row list-none items-center hidden md:flex">
            <a class="text-blueGray-500 block" href="#" onclick="openDropdown(event,'user-dropdown')">
                <div class="items-center flex">
                    <span
                        class="w-12 h-12 text-sm text-white bg-blueGray-200 inline-flex items-center justify-center rounded-full">
                        <i class="fa fa-user"></i>
                    </span>
                </div>
            </a>
            <div class="hidden bg-white text-base z-50 float-right list-none text-right rounded shadow-lg min-w-48 overflow-hidden"
                id="user-dropdown">
                <div
                    class="flex justify-between items-center p-4 font-normal w-full whitespace-nowrap bg-blueGray-700 text-white">
                    <p class="text-xs">حساب کاربری:</p>
                    <p class="text-xs">{{ auth()->user()->name }}</p>
                </div>
                <a href="{{ route('profile.edit') }}"
                    class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">
                    پروفایل کاربری
                </a>
                <a href="{{ route('profile.edit') }}"
                    class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">
                    تنظیمات
                </a>

                <div class="h-0 my-2 border border-solid border-blueGray-100"></div>
                <form class="px-4 pb-2" method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="outline-none focus:outline-none focus:border-none" type="submit">
                        {{ __('خروج') }}
                    </button>
                </form>
            </div>
        </ul>
    </div>
</nav>
