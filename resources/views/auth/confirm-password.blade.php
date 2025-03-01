<x-guest-layout>
    <!-- Session Status -->
    <div class="w-full lg:w-4/12 px-4">
        <div
            class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-200 border-0">
            <div class="flex-auto px-4 lg:px-10 p-10">
                <div class="text-blueGray-700 text-center mb-3 font-bold">
                    <h2 class="text-xl">{{ __('تایید رمز عبور') }}</h2>
                    <p class="my-4 text-sm text-gray-600">
                        {{ __('این یک منطقه امن برنامه است. لطفاً قبل از ادامه رمز عبور خود را تأیید کنید.') }}
                    </p>
                    <x-auth-session-status class="mb-4" :status="session('status')" />
                </div>
                <form method="POST" action="{{ route('password.confirm') }}">
                    @csrf
                    <!-- Password -->
                    <div>
                        <x-input-label for="password" :value="__('رمز عبور')" />

                        <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                            autocomplete="current-password" />

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <div class="flex justify-start mt-4">
                        <x-primary-button>
                            {{ __('تایید') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
