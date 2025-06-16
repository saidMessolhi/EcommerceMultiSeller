
@extends('layouts.app')

@section('content')
<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        نسيت كلمة المرور؟ لا تقلق. فقط أدخل بريدك الإلكتروني وسنرسل لك رابطًا لإعادة تعيين كلمة المرور.
    </div>

    @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
    @endif

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <label for="email" class="block text-sm font-medium text-gray-700 dark:text-white">البريد الإلكتروني</label>
            <input id="email" class="mt-1 block w-full rounded border-gray-300 dark:border-gray-600 dark:bg-gray-800 dark:text-white" type="email" name="email" required autofocus />
        </div>

        <div class="flex items-center justify-end mt-4">
            <button class="px-4 py-2 bg-red-600 text-white rounded hover:bg-red-700">
                إرسال رابط إعادة التعيين
            </button>
        </div>
    </form>
</x-guest-layout>

@endsection
