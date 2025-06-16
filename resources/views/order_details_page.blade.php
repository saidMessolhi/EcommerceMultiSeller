@extends('layouts.app')

@section('content')

<div class="max-w-4xl mx-auto p-4">
    <h1 class="text-2xl font-bold text-gray-800 dark:text-white mb-6">📦 تفاصيل الطلب #12345</h1>

    <!-- معلومات عامة عن الطلب -->
    <div class="bg-white dark:bg-gray-800 rounded shadow p-4 mb-6">
        <h2 class="text-lg font-semibold text-gray-700 dark:text-white mb-2">معلومات الطلب</h2>
        <p class="text-gray-600 dark:text-gray-300"><strong>التاريخ:</strong> 2025-06-01</p>
        <p class="text-gray-600 dark:text-gray-300"><strong>الحالة:</strong> <span class="text-green-600">✅ مكتمل</span></p>
        <p class="text-gray-600 dark:text-gray-300"><strong>طريقة الدفع:</strong> الدفع عند الاستلام</p>
        <p class="text-gray-600 dark:text-gray-300"><strong>المجموع:</strong> د.ج 3500</p>
    </div>

    <!-- المنتجات في الطلب -->
    <div class="bg-white dark:bg-gray-800 rounded shadow p-4 mb-6">
        <h2 class="text-lg font-semibold text-gray-700 dark:text-white mb-4">🛍️ المنتجات</h2>
        <div class="space-y-4">
            <!-- منتج 1 -->
            <div class="flex items-center justify-between border-b pb-2 dark:border-gray-700">
                <div class="flex items-center space-x-4 rtl:space-x-reverse">
                    <img src="https://via.placeholder.com/60" alt="Product" class="w-16 h-16 rounded">
                    <div>
                        <h3 class="font-semibold text-gray-800 dark:text-white">ساعة ذكية</h3>
                        <p class="text-sm text-gray-600 dark:text-gray-300">الكمية: 1</p>
                    </div>
                </div>
                <div class="text-gray-800 dark:text-white font-medium">د.ج 1500</div>
            </div>

            <!-- منتج 2 -->
            <div class="flex items-center justify-between border-b pb-2 dark:border-gray-700">
                <div class="flex items-center space-x-4 rtl:space-x-reverse">
                    <img src="https://via.placeholder.com/60" alt="Product" class="w-16 h-16 rounded">
                    <div>
                        <h3 class="font-semibold text-gray-800 dark:text-white">سماعات بلوتوث</h3>
                        <p class="text-sm text-gray-600 dark:text-gray-300">الكمية: 2</p>
                    </div>
                </div>
                <div class="text-gray-800 dark:text-white font-medium">د.ج 2000</div>
            </div>
        </div>
    </div>

    <!-- عنوان التوصيل -->
    <div class="bg-white dark:bg-gray-800 rounded shadow p-4">
        <h2 class="text-lg font-semibold text-gray-700 dark:text-white mb-2">📍 عنوان التوصيل</h2>
        <p class="text-gray-600 dark:text-gray-300">الاسم: محمد أمين</p>
        <p class="text-gray-600 dark:text-gray-300">العنوان: شارع الحريّة، الجزائر العاصمة</p>
        <p class="text-gray-600 dark:text-gray-300">رقم الهاتف: 0555 66 77 88</p>
    </div>
</div>

<!-- زر تحميل الفاتورة PDF -->
<div class="text-right mt-4">
   <a href="{{ route('invoice.download', ['order' => 123]) }}" class="bg-gray-200 dark:bg-gray-700 text-gray-800 dark:text-white px-4 py-2 rounded hover:bg-gray-300 dark:hover:bg-gray-600">
    🧾 تحميل الفاتورة PDF
</a>
</div>

@endsection