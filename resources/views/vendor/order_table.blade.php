<h1 class="text-3xl font-bold text-gray-800 dark:text-white mb-6 text-right">📊 لوحة تحكم البائع</h1>

<!-- Stats Grid -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
    <div class="bg-white dark:bg-gray-800 p-4 rounded-xl shadow text-right">
        <div class="text-gray-500 dark:text-gray-400">الطلبات</div>
        <div class="text-2xl font-bold text-gray-800 dark:text-white">125</div>
    </div>
    <div class="bg-white dark:bg-gray-800 p-4 rounded-xl shadow text-right">
        <div class="text-gray-500 dark:text-gray-400">المنتجات</div>
        <div class="text-2xl font-bold text-gray-800 dark:text-white">34</div>
    </div>
    <div class="bg-white dark:bg-gray-800 p-4 rounded-xl shadow text-right">
        <div class="text-gray-500 dark:text-gray-400">المبيعات</div>
        <div class="text-2xl font-bold text-green-600 dark:text-green-400">85,000 DA</div>
    </div>
    <div class="bg-white dark:bg-gray-800 p-4 rounded-xl shadow text-right">
        <div class="text-gray-500 dark:text-gray-400">الأرباح</div>
        <div class="text-2xl font-bold text-green-500 dark:text-green-300">15,000 DA</div>
    </div>
</div>
<div class="bg-white dark:bg-gray-800 rounded-xl shadow p-4 mt-10 overflow-x-auto">
    <h2 class="text-xl font-semibold mb-4 text-gray-800 dark:text-white text-right">📦 الطلبات الأخيرة</h2>

    <table class="min-w-full text-sm text-right text-gray-700 dark:text-gray-200">
        <thead>
            <tr class="bg-gray-200 dark:bg-gray-700 text-gray-800 dark:text-white">
                <th class="px-4 py-3">#</th>
                <th class="px-4 py-3">المنتج</th>
                <th class="px-4 py-3">السعر</th>
                <th class="px-4 py-3">الكمية</th>
                <th class="px-4 py-3">المشتري</th>
                <th class="px-4 py-3">الحالة</th>
                <th class="px-4 py-3">التاريخ</th>
                <th class="px-4 py-3">إجراءات</th>
            </tr>
        </thead>
        <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
            @for ($i = 1; $i <= 5; $i++)
                <tr>
                    <td class="px-4 py-2">{{ $i }}</td>
                    <td class="px-4 py-2">منتج مثال {{ $i }}</td>
                    <td class="px-4 py-2 text-green-600">2500 DA</td>
                    <td class="px-4 py-2">2</td>
                    <td class="px-4 py-2">عميل {{ $i }}</td>
                    <td class="px-4 py-2">
                        <span
                            class="inline-block px-2 py-1 text-xs font-semibold bg-yellow-200 text-yellow-800 rounded">
                            قيد الانتظار
                        </span>
                    </td>
                    <td class="px-4 py-2">2025-06-09</td>
                    <td class="px-4 py-2 space-x-1 flex justify-end">
                        <a href="#" class="bg-blue-600  px-3 py-1 rounded text-xs hover:bg-blue-700">عرض</a>
                        <a href="#" class="bg-green-600  px-3 py-1 rounded text-xs hover:bg-green-700">تأكيد</a>
                        <a href="#"
                            class="bg-red-600 text-white px-3 py-1 rounded text-xs hover:bg-red-700">إلغاء</a>
                    </td>
                </tr>
            @endfor
        </tbody>
    </table>
</div>
