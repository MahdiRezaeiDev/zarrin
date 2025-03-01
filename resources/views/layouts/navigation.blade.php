<nav
    class="md:right-0 md:block md:fixed md:top-0 md:bottom-0 md:overflow-y-auto md:flex-row md:flex-nowrap md:overflow-hidden shadow-xl bg-white flex flex-wrap items-center justify-between relative md:w-64 z-10 py-4 px-6">
    <div
        class="md:flex-col md:items-stretch md:min-h-full md:flex-nowrap px-0 flex flex-wrap items-center justify-between w-full mx-auto">
        <button
            class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent"
            type="button" onclick="toggleNavbar('example-collapse-sidebar')">
            <i class="fas fa-bars"></i>
        </button>
        <a class="md:block text-right md:pb-2 text-blueGray-600 ml-0 inline-block whitespace-nowrap text-sm uppercase font-bold p-4 px-0"
            href="{{ route('dashboard') }}">
            شرکت تولیدی پوشاک زرین
        </a>
        <ul class="md:hidden items-center flex flex-wrap list-none">
            <li class="inline-block relative">
                <a class="text-blueGray-500 block py-1 px-3" href="#"
                    onclick="openDropdown(event,'notification-dropdown')">
                    <i class="fas fa-bell"></i>
                </a>
                <div class="hidden bg-white text-base z-50 float-left py-2 list-none text-right rounded shadow-lg min-w-48"
                    id="notification-dropdown">
                    <a href="{{ route('profile.edit') }}"
                        class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">
                        پروفایل کاربری
                    </a>
                    <a href="{{ route('profile.edit') }}"
                        class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">
                        تنظیمات
                    </a>
                    <div class="h-0 my-2 border border-solid border-blueGray-100"></div>
                    <span
                        class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <button class="outline-none focus:outline-none focus:border-none" type="submit"
                                onclick="event.preventDefault();">
                                {{ __('خروج') }}
                            </button>
                        </form>
                    </span>
                </div>
            </li>
        </ul>
        <div class="md:flex md:flex-col md:items-stretch md:opacity-100 md:relative md:mt-4 md:shadow-none shadow absolute top-0 left-0 right-0 z-40 overflow-y-auto overflow-x-hidden h-auto items-center flex-1 rounded hidden"
            id="example-collapse-sidebar">
            <div class="md:min-w-full md:hidden block pb-4 mb-4 border-b border-solid border-blueGray-200">
                <div class="flex flex-wrap">
                    <div class="w-6/12">
                        <a class="md:block text-left md:pb-2 text-blueGray-600 mr-0 inline-block whitespace-nowrap text-sm uppercase font-bold p-4 px-0"
                            href="../../index.html">
                            شرکت تولیدی پوشاک زرین
                        </a>
                    </div>
                    <div class="w-6/12 flex justify-end">
                        <button type="button"
                            class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent"
                            onclick="toggleNavbar('example-collapse-sidebar')">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
            </div>

            <ul class="md:flex-col md:min-w-full flex flex-col list-none">
                <li class="items-center {{ $title == 'داشبورد' ? 'bg-blueGray-200' : '' }} ">
                    <a href="{{ route('dashboard') }}"
                        class="text-xs uppercase py-3 font-bold block text-blueGray-700 hover:text-blueGray-500">
                        <i class="fas fa-tv mr-2 text-sm opacity-75"></i>
                        داشبورد
                    </a>
                </li>

                <li class="items-center {{ $title == '' ? '' : '' }}">
                    <a href="{{ route('profile.edit') }}"
                        class="text-xs uppercase py-3 font-bold block text-blueGray-700 hover:text-blueGray-500">
                        <i class="fas fa-tools mr-2 text-sm text-blueGray-300"></i>
                        تنظیمات
                    </a>
                </li>

                <li class="items-center {{ $title == '' ? '' : '' }}">
                    <a href="./tables.html"
                        class="text-xs uppercase py-3 font-bold block text-blueGray-700 hover:text-blueGray-500">
                        <i class="fas fa-table mr-2 text-sm text-blueGray-300"></i>
                        جداول
                    </a>
                </li>

                <li class="items-center {{ $title == '' ? '' : '' }}">
                    <a href="./maps.html"
                        class="text-xs uppercase py-3 font-bold block text-blueGray-700 hover:text-blueGray-500">
                        <i class="fas fa-map-marked mr-2 text-sm text-blueGray-300"></i>
                        نقشه ها
                    </a>
                </li>
                <li class="items-center {{ $title == 'ویرایش حساب کاربری' ? 'bg-blueGray-200' : '' }}">
                    <a href="{{ route('profile.edit') }}"
                        class="text-xs uppercase py-3 font-bold block text-blueGray-700 hover:text-blueGray-500">
                        <i class="fa-solid fa-user mr-2 text-sm text-blueGray-300"></i>
                        حساب کاربری
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
