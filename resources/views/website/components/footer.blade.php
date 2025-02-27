<footer class="relative bg-blueGray-200 pt-8 pb-6">
    <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20 h-20"
        style="transform: translateZ(0)">
        <svg class="absolute -bottom-1 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none"
            version="1.1" viewBox="0 0 2560 100" x="0" y="0">
            <polygon class="text-blueGray-200 fill-current" points="2560 0 2560 100 0 100"></polygon>
        </svg>
    </div>
    <div class="container mx-auto px-4">
        <div class="flex flex-wrap text-center lg:text-right">
            <div class="w-full lg:w-6/12 px-4">
                <h4 class="text-3xl font-semibold">
                    با ما در ارتباط باشید!
                </h4>
                <h5 class="text-lg mt-0 mb-2 text-blueGray-600">
                    ما را در این پلتفرم‌ها دنبال کنید؛ پاسخگوی شما در ۱ تا ۲ روز کاری خواهیم بود.
                </h5>
                <div class="mt-6 lg:mb-0 mb-6">
                    <button
                        class="bg-white text-green-600 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
                        type="button">
                        <i class="fab fa-whatsapp"></i>
                    </button>
                    <button
                        class="bg-white text-blue-700 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
                        type="button">
                        <i class="fab fa-facebook-square"></i>
                    </button>
                    <button
                        class="bg-white text-pink-700 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
                        type="button">
                        <i class="fab fa-instagram"></i>
                    </button>
                    <button
                        class="bg-white text-sky-600 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
                        type="button">
                        <i class="fab fa-telegram"></i>
                    </button>
                </div>
            </div>
            <div class="w-full lg:w-6/12 px-4">
                <div class="flex flex-wrap items-top mb-6">
                    <div class="w-full lg:w-4/12 px-4 ml-auto">
                        <span class="block uppercase text-blueGray-500 text-sm font-semibold mb-2">
                            لینک‌های مفید
                        </span>
                        <ul class="list-unstyled">
                            <li>
                                <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm"
                                    href="{{ route('home') }}">
                                    خانه
                                </a>
                            </li>
                            <li>
                                <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm"
                                    href="{{ route('about') }}">
                                    درباره ما
                                </a>
                            </li>
                            <li>
                                <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm"
                                    href="{{ route('services') }}">
                                    خدمات ما
                                </a>
                            </li>
                            <li>
                                <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm"
                                    href="{{ route('contact') }}">
                                    ارتباط با ما
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="w-full lg:w-8/12 px-4">
                        <div class="flex lg:flex-row flex-col items-center gap-2 mt-4 lg:mt-0">
                            <img class="block lg:inline mx-auto lg:mx-0 w-14 h-14" src="{{ asset('img/favicon.ico') }}"
                                alt="brand logo">
                            <h2 class="text-xl font-semibold text-blueGray-700 mb-0 ml-2">
                                شرکت تولیدی پوشاک زرین
                            </h2>
                        </div>
                        <p class="text-sm text-blueGray-700 mt-2 mb-0">
                            با انتخاب خیاطی و پوشاک زرین، لباسی خواهید داشت که نه تنها مطابق با مد روز است، بلکه کاملاً
                            منحصربه‌فرد و باکیفیت طراحی شده تا شما در هر مراسمی بدرخشید.
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</footer>
