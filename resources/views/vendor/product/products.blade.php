<div class="bg-gray-100 dark:bg-gray-900 min-h-screen p-6">
    <div class="max-w-7xl mx-auto">
        <!-- Title -->
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

        <!-- Quick Actions -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 text-center">
            <a href="#" class="block bg-red-600 hover:bg-red-700 text-white py-4 rounded-xl shadow transition">
                ➕ إضافة منتج جديد
            </a>
            {{-- <a href="#" class="block bg-blue-600 hover:bg-blue-700 py-4 rounded-xl shadow transition">
                🧾 إدارة المنتجات
            </a>
            <a href="#" class="block bg-yellow-500 hover:bg-yellow-600  py-4 rounded-xl shadow transition">
                📦 الطلبات
            </a>
            <a href="#" class="block bg-gray-700 hover:bg-gray-800  py-4 rounded-xl shadow transition">
                ⚙️ إعدادات المتجر
            </a> --}}
        </div>

    </div>

    <div class="p-6 max-w-7xl mx-auto">
        <h1 class="text-2xl font-bold text-gray-800 dark:text-white mb-6">📦 منتجاتي</h1>

        <div class="overflow-x-auto bg-white dark:bg-gray-800 shadow rounded-xl">
            <table class="min-w-full text-sm text-right text-gray-600 dark:text-gray-300">
                <thead class="text-xs text-gray-700 bg-gray-100 dark:bg-gray-700 dark:text-gray-300">
                    <tr>
                        <th class="px-4 py-3">#</th>
                        <th class="px-4 py-3">الصورة</th>
                        <th class="px-4 py-3">اسم المنتج</th>
                        <th class="px-4 py-3">السعر</th>
                        <th class="px-4 py-3">الحالة</th>
                        <th class="px-4 py-3">الكمية</th>
                        <th class="px-4 py-3">الإجراءات</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                    @for ($i = 1; $i <= 5; $i++)
                        <tr>
                            <td class="px-4 py-3">{{ $i }}</td>
                            <td class="px-4 py-3">
                                <img src="https://via.placeholder.com/50" class="w-12 h-12 rounded object-cover"
                                    alt="Product Image">
                            </td>
                            <td class="px-4 py-3">منتج تجريبي رقم {{ $i }}</td>
                            <td class="px-4 py-3">1200 دج</td>
                            <td class="px-4 py-3">
                                <span
                                    class="inline-block px-2 py-1 text-xs font-medium rounded-full bg-green-100 text-green-700">متوفر</span>
                            </td>
                            <td class="px-4 py-3">30</td>
                            <td class="px-4 py-3 space-x-2 space-x-reverse rtl:space-x-reverse">
                                <button
                                    class="bg-yellow-500 text-white px-3 py-1 rounded text-xs hover:bg-yellow-600">✏️
                                    تعديل</button>
                                <button class="bg-red-600 text-white px-3 py-1 rounded text-xs hover:bg-red-700">🗑️
                                    حذف</button>
                            </td>
                        </tr>
                    @endfor
                </tbody>
            </table>
        </div>

        <div class="mt-6 text-right">
            <a href="#" class="bg-red-600 hover:bg-red-700 text-white px-6 py-2 rounded-full">
                ➕ إضافة منتج جديد
            </a>
        </div>
    </div>



</div>
