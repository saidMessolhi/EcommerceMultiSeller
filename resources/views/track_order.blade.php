@extends('layouts.app')

@section('content')
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900 text-gray-800 dark:text-white py-10 px-4">
        <div class="max-w-3xl mx-auto bg-white dark:bg-gray-800 rounded-xl shadow p-6">
            <h2 class="text-2xl font-bold mb-6 text-center">🚚 تتبع الطلب</h2>

            <form action="#" method="GET" class="mb-6">
                <div class="flex gap-4">
                    <input type="text" name="order_number" placeholder="رقم الطلب"
                        class="flex-1 p-2 rounded border dark:bg-gray-700 dark:border-gray-600">
                    <button class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">🔍 تتبع</button>
                </div>
            </form>

            <!-- مثال لحالة الطلب -->
            <div class="bg-gray-100 dark:bg-gray-700 p-4 rounded">
                <p class="font-semibold mb-2">رقم الطلب: <span class="text-blue-600">#123456</span></p>
                <ul class="space-y-2">
                    <li class="flex items-center">
                        <span class="text-green-500">✔️</span>
                        <span class="ml-2">تم استلام الطلب</span>
                    </li>
                    <li class="flex items-center">
                        <span class="text-yellow-500">⏳</span>
                        <span class="ml-2">قيد التحضير</span>
                    </li>
                    <li class="flex items-center opacity-50">
                        <span class="">🚚</span>
                        <span class="ml-2">قيد الشحن</span>
                    </li>
                    <li class="flex items-center opacity-50">
                        <span>📦</span>
                        <span class="ml-2">تم التسليم</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection
