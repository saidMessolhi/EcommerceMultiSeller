<!-- عروض وكوبونات -->
<section class="bg-white dark:bg-gray-900 mt-8 rounded-xl shadow p-6">
    <h2 class="text-2xl font-bold text-gray-800 dark:text-white mb-6 text-center">🎉 العروض والكوبونات</h2>

    <!-- شبكة العروض -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        @for($j = 0; $j < 3; $j++)
        <div class="bg-white dark:bg-gray-800 rounded-xl shadow p-4">
            <h3 class="text-lg font-bold text-red-600 mb-2">🔥 عرض خاص رقم {{ $j + 1 }}</h3>
            <p class="text-gray-700 dark:text-gray-300 mb-2">احصل على خصم {{ 10 + $j * 5 }}% على منتجات مختارة.</p>
            <p class="text-sm text-gray-500">ساري حتى: {{ date('Y-m-d', strtotime("+".(7 + $j)." days")) }}</p>
        </div>
        @endfor
    </div>

    <!-- إدخال الكوبون -->
    <div class="mt-8 max-w-xl mx-auto">
        <h3 class="text-lg font-bold text-gray-800 dark:text-white mb-2 text-center">🎁 استخدم كود الخصم</h3>
        <form>
            <div class="flex items-center space-x-2 rtl:space-x-reverse">
                <input type="text" placeholder="مثال: SAVE20"
                       class="flex-1 px-4 py-2 border border-gray-300 rounded focus:ring-2 focus:ring-red-500 dark:bg-gray-700 dark:text-white dark:border-gray-600">
                <button type="submit"
                        class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition">تطبيق</button>
            </div>
        </form>
        <!-- رسالة نجاح/فشل وهمية -->
        <div class="text-center mt-4 text-green-600 dark:text-green-400 font-semibold">
            ✅ تم تطبيق الكوبون بنجاح! تم خصم 20%.
        </div>
    </div>
</section>
