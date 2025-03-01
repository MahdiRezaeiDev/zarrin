<x-guest-layout>
    <!-- Session Status -->
    <div class="w-full lg:w-4/12 px-4">
        <div
            class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-200 border-0">
            <div class="flex-auto px-4 lg:px-10 p-10">
                <div class="text-blueGray-700 text-center mb-3 font-bold">
                    <h2 class="text-xl">{{ __('بازیابی رمز عبور') }}</h2>
                    <p class="my-4 text-sm text-gray-600">
                        {{ __('رمز عبور خود را فراموش کرده اید؟ مشکلی نیست فقط آدرس ایمیل خود را به ما اطلاع دهید و ما یک لینک بازنشانی رمز عبور را برای شما ایمیل می کنیم که به شما امکان می دهد رمز جدیدی را انتخاب کنید.') }}
                    </p>
                    <x-auth-session-status class="mb-4" :status="session('status')" />
                </div>
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <!-- Email Address -->
                    <div>
                        <x-input-label for="email" :value="__('ایمیل آدرس')" />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                            :value="old('email')" required autofocus />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <div class="flex items-center justify-start mt-4">
                        <x-primary-button>
                            {{ __('ایمیل لینک بازیابی رمز عبور') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
