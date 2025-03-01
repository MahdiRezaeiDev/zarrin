<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <div class="w-full lg:w-4/12 px-4">
        <div
            class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-200 border-0">
            <div class="flex-auto px-4 lg:px-10 p-10">
                <div class="text-blueGray-700 text-center mb-3 font-bold">
                    <h2 class="text-xl">ورود به حساب کاربری</h2>
                </div>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="relative w-full mb-3">
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                            for="grid-password">ایمیل آدرس</label>
                            <input type="email" name="email"placeholder="ایمیل آدرس"
                            class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"/>
                    </div>
                    <div class="relative w-full mb-3">
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"for="grid-password">رمز عبور</label>
                            <input type="password" placeholder="رمز عبور" name="password"
                            class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"0 />
                    </div>
                    <div>
                        <label class="inline-flex items-center cursor-pointer">
                            <input id="remember_me" name="remember" type="checkbox"
                                class="form-checkbox border-0 rounded text-blueGray-700 ml-1 w-5 h-5 ease-linear transition-all duration-150" />
                                <span class="ml-2 text-sm font-semibold text-blueGray-600">مرا به خاطر بسپار</span>
                            </label>
                    </div>
                    <div class="text-center mt-6">
                        <button
                            class="bg-blueGray-800 text-white active:bg-blueGray-600 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 w-full ease-linear transition-all duration-150"
                            type="submit">
                            ورود به حساب کاربری 
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="flex flex-wrap mt-6">
            <div class="w-1/2">
                <a href="#pablo" class="text-blueGray-200 underline">
                    <small>رمز عبور خود را فراموش کرده اید؟</small>
                </a>
            </div>
        </div>
    </div>
</x-guest-layout>
