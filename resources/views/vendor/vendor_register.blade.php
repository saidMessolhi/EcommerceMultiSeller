@extends('layouts.app')

@section('content')
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900 flex items-center justify-center p-4">
        <div class="bg-white dark:bg-gray-800 shadow rounded-lg w-full max-w-md p-6 space-y-5">
            <h2 class="text-2xl font-bold text-center text-gray-800 dark:text-white">🛍️ تسجيل كبائع</h2>

            <form action="#" method="POST" class="space-y-4">
                @csrf

                <div>
                    <label class="block text-right text-gray-700 dark:text-gray-300 mb-1">الاسم الكامل</label>
                    <input type="text" name="name"
                        class="w-full rounded border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white"
                        required>
                </div>

                <div>
                    <label class="block text-right text-gray-700 dark:text-gray-300 mb-1">البريد الإلكتروني</label>
                    <input type="email" name="email"
                        class="w-full rounded border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white"
                        required>
                </div>

                <div>
                    <label class="block text-right text-gray-700 dark:text-gray-300 mb-1">كلمة المرور</label>
                    <input type="password" name="password"
                        class="w-full rounded border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white"
                        required>
                </div>

                <div>
                    <label class="block text-right text-gray-700 dark:text-gray-300 mb-1">اسم المتجر</label>
                    <input type="text" name="store_name"
                        class="w-full rounded border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white"
                        required>
                </div>

                <div>
                    <label class="block text-right text-gray-700 dark:text-gray-300 mb-1">رقم الهاتف</label>
                    <input type="text" name="phone"
                        class="w-full rounded border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white"
                        required>
                </div>

                <button type="submit" class="w-full bg-red-600 hover:bg-red-700 text-white py-2 rounded shadow">
                    ✅ تسجيل كبائع
                </button>

                <div class="text-sm text-center text-gray-600 dark:text-gray-400 mt-2">
                    لديك حساب؟ <a href="{{ route('loginUser') }}" class="text-red-600 hover:underline">تسجيل الدخول</a>
                </div>
            </form>
        </div>
    </div>
@endsection
