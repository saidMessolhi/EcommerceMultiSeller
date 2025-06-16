
@extends('layouts.app')

@section('content')
<div class="flex justify-center items-center min-h-screen bg-gray-100 dark:bg-gray-900">
  <div class="w-full max-w-md bg-white dark:bg-gray-800 p-6 rounded shadow">
    <h2 class="text-2xl font-bold mb-6 text-center text-red-600">📝 إنشاء حساب</h2>

    <form action="{{ route('register') }}" method="POST" class="space-y-4">
      @csrf

      <div>
        <label class="block text-gray-700 dark:text-gray-200 mb-1">👤 الاسم الكامل</label>
        <input type="text" name="name" class="w-full border rounded px-4 py-2 dark:bg-gray-700 dark:text-white" required>
      </div>

      <div>
        <label class="block text-gray-700 dark:text-gray-200 mb-1">📧 البريد الإلكتروني</label>
        <input type="email" name="email" class="w-full border rounded px-4 py-2 dark:bg-gray-700 dark:text-white" required>
      </div>

      <div>
        <label class="block text-gray-700 dark:text-gray-200 mb-1">🔑 كلمة المرور</label>
        <input type="password" name="password" class="w-full border rounded px-4 py-2 dark:bg-gray-700 dark:text-white" required>
      </div>

      <div>
        <label class="block text-gray-700 dark:text-gray-200 mb-1">🔑 تأكيد كلمة المرور</label>
        <input type="password" name="password_confirmation" class="w-full border rounded px-4 py-2 dark:bg-gray-700 dark:text-white" required>
      </div>

      <button type="submit" class="w-full bg-red-600 hover:bg-red-700 text-white py-2 rounded">
        إنشاء حساب
      </button>

      <p class="text-center text-sm mt-4">
        لديك حساب؟ <a href="{{ route('loginUser') }}" class="text-red-600 hover:underline">تسجيل الدخول</a>
      </p>
    </form>
  </div>
</div>
@endsection
