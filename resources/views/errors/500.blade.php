<x-error-layout>
    <x-slot:title>
        500
    </x-slot:title>
    <section class="bg-white h-screen flex justify-center items-center">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
            <div class="mx-auto max-w-screen-sm text-center">
                <h1 class="mb-4 text-7xl tracking-tight font-extrabold lg:text-9xl text-rose-600">500</h1>
                <p class="mb-4 text-3xl tracking-tight font-bold text-gray-900 md:text-4xl">خطای سرور!</p>
                <p class="mb-7 text-sm font-semibold text-gray-500">
                    مشکلی در سرور رخ داده است. لطفاً بعداً دوباره تلاش کنید یا با مدیر سیستم تماس بگیرید.
                </p>
                <a href="{{ route('home') }}"
                    class="inline-flex text-white bg-sky-800 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                    برگشت به صفحه اصلی
                </a>
            </div>
        </div>
    </section>
</x-error-layout>
