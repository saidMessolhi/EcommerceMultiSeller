<!-- Product Filters -->
<div class="bg-white dark:bg-gray-800 rounded shadow p-4 mb-6">
    <form method="GET" action="" class="grid grid-cols-1 md:grid-cols-4 gap-4 items-end">

        <!-- Filter by Category -->
        <div>
            <label class="block mb-1 font-bold text-gray-700 dark:text-white">الفئة</label>
            <select name="category" class="w-full border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white rounded">
                <option value="">كل الفئات</option>
                <option value="electronics">الكترونيات</option>
                <option value="clothing">ملابس</option>
                <option value="accessories">إكسسوارات</option>
            </select>
        </div>

        <!-- Filter by Price -->
        <div>
            <label class="block mb-1 font-bold text-gray-700 dark:text-white">السعر</label>
            <div class="flex space-x-2 rtl:space-x-reverse">
                <input type="number" name="min_price" placeholder="من" class="w-1/2 border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white rounded">
                <input type="number" name="max_price" placeholder="إلى" class="w-1/2 border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white rounded">
            </div>
        </div>

        <!-- Filter by Rating -->
        <div>
            <label class="block mb-1 font-bold text-gray-700 dark:text-white">التقييم</label>
            <select name="rating" class="w-full border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white rounded">
                <option value="">أي تقييم</option>
                <option value="5">⭐⭐⭐⭐⭐</option>
                <option value="4">⭐⭐⭐⭐ أو أكثر</option>
                <option value="3">⭐⭐⭐ أو أكثر</option>
                <option value="2">⭐⭐ أو أكثر</option>
            </select>
        </div>

        <!-- Submit Button inline -->
        <div class="text-end">
            <button type="submit" class="w-full bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded">
                🔍 فلترة
            </button>
        </div>

    </form>
</div>
