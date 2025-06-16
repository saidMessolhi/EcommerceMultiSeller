@extends('layouts.app')

@section('content')
<div class="max-w-5xl mx-auto p-4">
    <h1 class="text-2xl font-bold text-gray-800 dark:text-white mb-6">👤 حسابي</h1>

    <!-- معلومات المستخدم -->
    <div class="bg-white dark:bg-gray-800 rounded shadow p-4 mb-6">
        <h2 class="text-xl font-semibold text-gray-700 dark:text-white mb-2">معلومات المستخدم</h2>
        <p class="text-gray-600 dark:text-gray-300"><strong>الاسم:</strong> {{ Auth::user()->name }}</p>
        <p class="text-gray-600 dark:text-gray-300"><strong>البريد الإلكتروني:</strong> {{ Auth::user()->email }}</p>
        <a href="#" class="mt-3 inline-block text-sm text-red-600 hover:underline">✏️ تعديل الملف الشخصي</a>
    </div>

    <!-- سجل الطلبات -->
    <div class="bg-white dark:bg-gray-800 rounded shadow p-4">
        <h2 class="text-xl font-semibold text-gray-700 dark:text-white mb-4">📦 سجل الطلبات</h2>

        {{-- مثال على جدول الطلبات --}}
        <div class="overflow-x-auto">
            <table class="min-w-full text-right text-sm">
                <thead>
                    <tr class="bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-white">
                        <th class="px-4 py-2">رقم الطلب</th>
                        <th class="px-4 py-2">التاريخ</th>
                        <th class="px-4 py-2">الحالة</th>
                        <th class="px-4 py-2">المجموع</th>
                        <th class="px-4 py-2">تفاصيل</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- بيانات وهمية --}}
                    <tr class="border-b dark:border-gray-700">
                        <td class="px-4 py-2">#12345</td>
                        <td class="px-4 py-2">2025-06-01</td>
                        <td class="px-4 py-2 text-green-600">✅ مكتمل</td>
                        <td class="px-4 py-2">د.ج 3500</td>
                        <td class="px-4 py-2">
                            <a href="#" class="text-red-600 hover:underline">عرض</a>
                        </td>
                    </tr>
                    <tr class="border-b dark:border-gray-700">
                        <td class="px-4 py-2">#12346</td>
                        <td class="px-4 py-2">2025-06-02</td>
                        <td class="px-4 py-2 text-yellow-500">🚚 قيد التوصيل</td>
                        <td class="px-4 py-2">د.ج 4700</td>
                        <td class="px-4 py-2">
                            <a href="#" class="text-red-600 hover:underline">عرض</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
