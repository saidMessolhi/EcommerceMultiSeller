@extends('layouts.app')

@section('content')
<div class="flex justify-center items-center min-h-screen bg-gray-100 dark:bg-gray-900">
  <div class="w-full max-w-md bg-white dark:bg-gray-800 p-6 rounded shadow">
    <h2 class="text-2xl font-bold mb-6 text-center text-red-600">🔐 تسجيل الدخول</h2>

    <form action="{{ route('login') }}" method="POST" class="space-y-4">
      @csrf

      <div>
        <label class="block text-gray-700 dark:text-gray-200 mb-1">📧 البريد الإلكتروني</label>
        <input type="email" name="email" class="w-full border rounded px-4 py-2 dark:bg-gray-700 dark:text-white" required>
      </div>

      <div>
        <label class="block text-gray-700 dark:text-gray-200 mb-1">🔑 كلمة المرور</label>
        <input type="password" name="password" class="w-full border rounded px-4 py-2 dark:bg-gray-700 dark:text-white" required>
      </div>

      <div class="flex items-center justify-between text-sm">
        <label class="flex items-center">
          <input type="checkbox" name="remember" class="mr-2">
          تذكرني
        </label>
        <a href="#" class="text-red-500 hover:underline">نسيت كلمة المرور؟</a>
      </div>

      <button type="submit" class="w-full bg-red-600 hover:bg-red-700 text-white py-2 rounded">
        دخول
      </button>

      <p class="text-center text-sm mt-4">
        ليس لديك حساب؟ <a href="{{ route('registerUser') }}" class="text-red-600 hover:underline">إنشاء حساب</a>
      </p>
    </form>
  </div>
</div>
@endsection
