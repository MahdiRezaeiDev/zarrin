<x-app-layout>
    <x-slot:title>
        کاربران
    </x-slot:title>
    <div class="px-4 md:px-10 mx-auto w-full md:py-16">
        <div class="flex flex-wrap pt-8">
            <div class="w-full mb-12 px-4">
                <div class="bg-white relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded">
                    <div class="rounded-t mb-0 px-4 py-3 border-0">
                        <div class="flex flex-wrap items-center">
                            <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                                <h3 class="font-semibold text-lg text-blueGray-700">
                                    ایجاد حساب کاربری جدید
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="block w-full overflow-x-auto">
                        <div class="py-7">
                            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                                <div class="overflow-hidden shadow-sm sm:rounded-lg p-6">
                                    <form method="POST" action="{{ route('users.store') }}">
                                        @csrf

                                        <!-- Name -->
                                        <div>
                                            <x-input-label for="name" :value="__('نام و نام خانوادگی')" />
                                            <x-text-input id="name" class="block mt-1 w-full" type="text"
                                                name="name" :value="old('name')" required autofocus
                                                autocomplete="name" />
                                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                        </div>

                                        <!-- Email Address -->
                                        <div class="mt-4">
                                            <x-input-label for="email" :value="__('ایمیل آدرس')" />
                                            <x-text-input id="email" class="block mt-1 w-full" type="email"
                                                name="email" :value="old('email')" required autocomplete="username" />
                                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                        </div>

                                        <!-- Account Type -->
                                        <div class="mt-4">
                                            <x-input-label for="email" :value="__('نوعیت حساب کاربری')" />
                                            <select
                                                class="w-full mt-1 border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                                                name="type" id="type">
                                                <option selected value="مدیر مالی">مالی</option>
                                                <option selected value="خیاط">خیاط</option>
                                                <option value="مدیر سامانه">مدیر</option>
                                            </select>
                                            <x-input-error :messages="$errors->get('type')" class="mt-2" />
                                        </div>

                                        <!-- Password -->
                                        <div class="mt-4">
                                            <x-input-label for="password" :value="__('رمز عبور')" />

                                            <x-text-input id="password" class="block mt-1 w-full" type="password"
                                                name="password" required autocomplete="new-password" />

                                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                        </div>

                                        <!-- Confirm Password -->
                                        <div class="mt-4">
                                            <x-input-label for="password_confirmation" :value="__('تایید رمز عبور')" />

                                            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                                type="password" name="password_confirmation" required
                                                autocomplete="new-password" />

                                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                        </div>

                                        <div class="flex items-center justify-start mt-4">
                                            <x-primary-button class="me-4">
                                                {{ __('ایجاد حساب کاربری') }}
                                            </x-primary-button>
                                            @if (session('status'))
                                                <script>
                                                    Swal.fire({
                                                        icon: 'success',
                                                        title: 'موفق!',
                                                        text: "{{ session('status') }}",
                                                        timer: 2000,
                                                        showConfirmButton: false
                                                    });
                                                </script>
                                            @endif
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
