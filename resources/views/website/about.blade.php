<x-website-layout>
    <div class="relative pt-16 pb-32 flex content-center items-center justify-center min-h-screen-75">
        <div class="absolute top-0 w-full h-full bg-top bg-cover"
            style="
              background-image: url('{{ asset('img/coverPhoto.webp') }}');
            ">
            <span id="blackOverlay" class="w-full h-full absolute opacity-60 bg-black"></span>
        </div>
        <div class="container relative mx-auto">
            <div class="items-center flex flex-wrap">
                <div class="w-full lg:w-6/12 px-4 ml-auto mr-auto text-center">
                    <div class="">
                        <h1 class="text-white font-semibold text-5xl">
                            درباره ما
                        </h1>
                        <p class="mt-4 text-lg text-blueGray-200">
                            خدمات خیاطی زرین شامل دوخت انواع کت و شلوار، کت و دامن، و همچنین لباس‌های سنتی و افغانی
                            مانند یخن قاق‌های دیزاین‌دار است. تیم ما با دقت و توجه به جزئیات، طرح‌هایی شیک و منحصر به
                            فرد را ارائه می‌دهد که هم‌گام با مد روز و نیازهای مشتریان است. ما به طراحی‌هایی توجه داریم
                            که نه تنها زیبا و خاص باشند، بلکه راحتی و کیفیت دوخت نیز در اولویت قرار گیرد.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="top-auto -bottom-1 left-0 right-0 w-full absolute pointer-events-none overflow-hidden h-70-px"
            style="transform: translateZ(0px)">
            <svg class="absolute -bottom-1 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none"
                version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                <polygon class="text-blueGray-200 fill-current" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
    </div>
    <section class="pb-20 bg-blueGray-200 -mt-24">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap">
                <div class="lg:pt-12 pt-6 w-full md:w-4/12 px-4 text-center">
                    <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                        <div class="px-4 py-5 flex-auto">
                            <div
                                class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-red-400">
                                <i class="fas fa-award"></i>
                            </div>
                            <h6 class="text-xl font-semibold">تجربه طولانی و حرفه‌ای</h6>
                            <p class="mt-2 mb-4 text-blueGray-500">
                                با بیش از ده سال تجربه، خیاطی زرین در طراحی و دوخت لباس‌های خاص و زیبا، پیشرو است و
                                هزاران مشتری راضی دارد.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-4/12 px-4 text-center">
                    <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                        <div class="px-4 py-5 flex-auto">
                            <div
                                class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-lightBlue-400">
                                <i class="fas fa-retweet"></i>
                            </div>
                            <h6 class="text-xl font-semibold">دوخت با کیفیت بالا</h6>
                            <p class="mt-2 mb-4 text-blueGray-500">
                                ما در خیاطی زرین به دوختی دقیق و با کیفیت بالا متعهد هستیم. هر لباس با دقت و هنر خیاطان
                                ماهر ما آماده می‌شود.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="pt-6 w-full md:w-4/12 px-4 text-center">
                    <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                        <div class="px-4 py-5 flex-auto">
                            <div
                                class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-emerald-400">
                                <i class="fas fa-fingerprint"></i>
                            </div>
                            <h6 class="text-xl font-semibold">تعهد به رضایت مشتری</h6>
                            <p class="mt-2 mb-4 text-blueGray-500">
                                در خیاطی زرین، مشتریان اولویت ما هستند. ما همواره تلاش می‌کنیم تا با ارائه خدمات برتر،
                                لبخند رضایت را بر چهره شما ببینیم.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-wrap items-center mt-32">
                <div class="w-full md:w-5/12 px-4 mr-auto ml-auto">
                    <div
                        class="text-blueGray-500 p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-white">
                        <i class="fas fa-user-friends text-xl"></i>
                    </div>
                    <h3 class="text-3xl mb-2 font-semibold leading-normal">
                        شرکت تولیدی پوشاک زرین
                    </h3>
                    <p class="text-lg font-light leading-relaxed mt-4 mb-4 text-blueGray-600">
                        خیاطی زرین در سال ۱۳۹۵ به سرپرستی مصطفی ابراهیمی تأسیس شد و از همان ابتدا با هدف ارائه بهترین
                        خدمات در زمینه خیاطی شروع به فعالیت کرد. با تلاش و پشتکار مداوم، این خیاطی توانست در طول سال‌های
                        گذشته جایگاه ویژه‌ای در میان مشتریان خود پیدا کند.
                    </p>
                    <p class="text-lg font-light leading-relaxed mt-0 mb-4 text-blueGray-600">
                        اکنون خیاطی زرین به عنوان یکی از بهترین
                        خیاطی‌ها در افغانستان شناخته می‌شود و هزاران مشتری راضی دارد که به کیفیت و دقت کار این مجموعه
                        اعتماد دارند. افتخار خیاطی زرین، ایجاد لباس‌هایی با طراحی منحصر به فرد و دوختی بی‌نقص است که
                        همواره رضایت مشتریان را جلب کرده است.
                    </p>
                </div>
                <div class="w-full md:w-4/12 px-4 mr-auto ml-auto">
                    <div
                        class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded-lg bg-blueGray-700">
                        <img alt="..." src="{{ asset('img/smallPhoto.webp') }}"
                            class="w-full align-middle rounded-t-lg" />
                        <blockquote class="relative p-8 mb-4">
                            <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 583 95"
                                class="absolute left-0 w-full block h-95-px -top-94-px">
                                <polygon points="-30,95 583,95 583,65" class="text-blueGray-700 fill-current"></polygon>
                            </svg>
                            <h4 class="text-xl font-bold text-white">
                                لباس‌هایی با کیفیت، طراحی‌های بی‌نظیر
                            </h4>
                            <p class="text-md font-light mt-2 text-white">
                                خیاطی زرین با بیش از یک دهه تجربه درخشان در صنعت دوخت و دوز، به یکی از معتبرترین و
                                محبوب‌ترین مراکز طراحی و دوخت لباس در میان مشتریان خود تبدیل شده است. از آغاز فعالیت تا
                                به امروز، خیاطی زرین با بهره‌گیری از هنر دست خیاطان ماهر و استفاده از بهترین متریال‌ها،
                                توانسته است هزاران مشتری راضی را جذب کند.
                            </p>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="relative py-20">
        <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20 h-20"
            style="transform: translateZ(0px)">
            <svg class="absolute -bottom-1 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none"
                version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                <polygon class="text-white fill-current" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
        <div class="container mx-auto px-4">
            <div class="items-center flex flex-wrap">
                <div class="w-full md:w-4/12 ml-auto mr-auto px-4">
                    <img alt="..." class="max-w-full rounded-lg shadow-lg" src="{{ asset('img/cloth2.jpg') }}" />
                </div>
                <div class="w-full md:w-5/12 ml-auto mr-auto px-4">
                    <div class="md:pr-12">
                        <div
                            class="text-blueGray-600 p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-blueGray-400">
                            <i class="fas fa-rocket text-xl"></i>
                        </div>
                        <h3 class="text-3xl font-semibold">جلب نگاه‌ها با هنر و زیبایی محلی</h3>
                        <p class="mt-4 text-lg leading-relaxed text-blueGray-500">
                            هدف خیاطی زرین همواره ارائه بهترین کیفیت و جلب رضایت مشتریان بوده و ما با افتخار می‌گوییم که
                            در این مسیر هزاران مشتری راضی را در کنار خود داریم. برای ما مهم است که هر مشتری با لباسی که
                            دقیقاً مطابق با سلیقه و نیازش طراحی و دوخته شده، خیاطی ما را ترک کند.
                        </p>
                        <ul class="list-none mt-6">
                            <li class="py-2">
                                <div class="flex items-center">
                                    <div>
                                        <span
                                            class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-blueGray-600 bg-blueGray-200 mr-3">
                                            <i class="fas fa-fingerprint"></i>
                                        </span>
                                    </div>
                                    <div>
                                        <h4 class="text-blueGray-500">
                                            دوخت و دوز کت و شلوارهای رسمی و نیمه‌رسمی با توجه به سایز و استایل هر مشتری.
                                        </h4>
                                    </div>
                                </div>
                            </li>
                            <li class="py-2">
                                <div class="flex items-center">
                                    <div>
                                        <span
                                            class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-blueGray-600 bg-blueGray-200 mr-3"><i
                                                class="fab fa-html5"></i></span>
                                    </div>
                                    <div>
                                        <h4 class="text-blueGray-500">طراحی و دوخت لباس‌های مجلسی و کت دامن برای
                                            خانم‌ها، متناسب با مراسم‌های مختلف.
                                        </h4>
                                    </div>
                                </div>
                            </li>
                            <li class="py-2">
                                <div class="flex items-center">
                                    <div>
                                        <span
                                            class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-blueGray-600 bg-blueGray-200 mr-3"><i
                                                class="far fa-paper-plane"></i></span>
                                    </div>
                                    <div>
                                        <h4 class="text-blueGray-500"> دوخت لباس‌های سنتی و محلی افغانی مانند یخن
                                            قاق‌های دیزاین‌دار با تنوع در رنگ و طرح.
                                        </h4>
                                    </div>
                                </div>
                            </li>
                            <li class="py-2">
                                <div class="flex items-center">
                                    <div>
                                        <span
                                            class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-blueGray-600 bg-blueGray-200 mr-3"><i
                                                class="far fa-paper-plane"></i></span>
                                    </div>
                                    <div>
                                        <h4 class="text-blueGray-500">
                                            خدمات سفارشی‌سازی و طراحی ویژه برای افرادی که به دنبال طرح‌های خاص و
                                            منحصربه‌فرد هستند.
                                        </h4>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-website-layout>
