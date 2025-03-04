<x-app-layout>
    <x-slot:title>
        کاربران
    </x-slot:title>

    <div class="px-4 md:px-10 mx-auto w-full md:py-16 h-screen">
        <div class="flex flex-wrap pt-8">
            <div class="w-full mb-12 px-4">
                <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded">
                    <div class="rounded-t mb-0 px-4 py-3 border-0">
                        <div class="flex flex-wrap items-center">
                            <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                                <h3 class="font-semibold text-lg text-blueGray-700">
                                    لیست کاربران ثبت شده
                                </h3>
                            </div>
                            <a href="{{ route('users.create') }}"
                                class="bg-blueGray-600 text-white active:bg-blueGray-700 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150"
                                type="button">
                                ایجاد حساب کاربری
                            </a>
                        </div>
                    </div>
                    <div class="block w-full overflow-x-auto">
                        <!-- Projects table -->
                        <table class="items-center w-full bg-transparent border-collapse">
                            <thead>
                                <tr>
                                    <th
                                        class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-right bg-blueGray-50 text-blueGray-500 border-blueGray-100">
                                        نام نام خانوادگی
                                    </th>
                                    <th
                                        class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-right bg-blueGray-50 text-blueGray-500 border-blueGray-100">
                                        ایمیل آدرس
                                    </th>
                                    <th
                                        class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-right bg-blueGray-50 text-blueGray-500 border-blueGray-100">
                                        نوعیت حساب
                                    </th>
                                    <th
                                        class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-right bg-blueGray-50 text-blueGray-500 border-blueGray-100">
                                        عملیات
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $index => $user)
                                    <tr>
                                        <th
                                            class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-right flex items-center">
                                            <span class="ml-3 font-bold text-blueGray-600">
                                                {{ $user->name }}
                                            </span>
                                        </th>
                                        <td
                                            class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            {{ $user->email }}
                                        </td>
                                        <td
                                            class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            <i class="fas fa-circle text-green-600 mr-2"></i>
                                            {{ $user->type }}
                                        </td>
                                        <td
                                            class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 flex gap-2">
                                            <a href="{{ route('users.edit', $user->id) }}"
                                                class="bg-sky-300 hover:bg-sky-400 w-16 text-center rounded-sm p-2 text-blueGray-700">
                                                ویرایش
                                            </a>
                                            <form onsubmit="confirmDelete(event, this)"
                                                action="{{ route('users.destroy', $user->id) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button type="submit"
                                                    class="bg-rose-300 hover:bg-rose-400 w-16 text-center rounded-sm p-2 text-blueGray-700">
                                                    حذف
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'موفق!',
                text: "{{ session('success') }}",
                timer: 2000,
                showConfirmButton: false
            });
        </script>
    @endif
    @if (session('error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'خطا!',
                text: "{{ session('error') }}",
                timer: 2000,
                showConfirmButton: false
            });
        </script>
    @endif

    <script>
        function confirmDelete(event, form) {
            event.preventDefault();
            Swal.fire({
                title: 'آیا مطمئن هستید؟',
                text: "بعد از حذف حساب کاربری اطلاعات دیگر در دسترس نخواهد بود!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'بله، حذف کن!',
                cancelButtonText: 'انصراف'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit(); // Directly submit the form
                }
            });
        }
    </script>
</x-app-layout>
