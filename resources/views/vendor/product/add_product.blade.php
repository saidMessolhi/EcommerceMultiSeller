@extends('layouts.app')

@section('content')
    <div class="bg-white dark:bg-gray-800 shadow rounded-xl p-6 max-w-4xl mx-auto mt-10">
        <h2 class="text-2xl font-bold mb-6 text-gray-800 dark:text-white">➕ إضافة منتج جديد</h2>

        <form class="space-y-6">
            <!-- اسم المنتج -->
            <div>
                <label class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">اسم المنتج</label>
                <input type="text"
                    class="w-full px-4 py-2 border rounded-lg dark:bg-gray-900 dark:text-white dark:border-gray-600 focus:ring-2 focus:ring-red-500"
                    placeholder="مثلاً: هاتف سامسونج S22">
            </div>

            <!-- الوصف -->
            <div>
                <label class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">الوصف</label>
                <textarea rows="4"
                    class="w-full px-4 py-2 border rounded-lg dark:bg-gray-900 dark:text-white dark:border-gray-600 focus:ring-2 focus:ring-red-500"
                    placeholder="وصف مختصر عن المنتج"></textarea>
            </div>

            <!-- التصنيف -->
            <div>
                <label class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">التصنيف</label>
                <select
                    class="w-full px-4 py-2 border rounded-lg dark:bg-gray-900 dark:text-white dark:border-gray-600 focus:ring-2 focus:ring-red-500">
                    <option>اختر التصنيف</option>
                    <option>إلكترونيات</option>
                    <option>ملابس</option>
                    <option>إكسسوارات</option>
                </select>
            </div>

            <!-- السعر -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">السعر (DA)</label>
                    <input type="number"
                        class="w-full px-4 py-2 border rounded-lg dark:bg-gray-900 dark:text-white dark:border-gray-600"
                        placeholder="1200">
                </div>

                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">السعر قبل التخفيض
                        (اختياري)</label>
                    <input type="number"
                        class="w-full px-4 py-2 border rounded-lg dark:bg-gray-900 dark:text-white dark:border-gray-600"
                        placeholder="1500">
                </div>
            </div>

            <!-- صور المنتج -->
            <div>
                <label class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">صور المنتج</label>
                <input type="file" multiple
                    class="w-full border rounded-lg p-2 dark:bg-gray-900 dark:text-white dark:border-gray-600">
                <p class="text-xs text-gray-500 mt-1">يمكنك رفع أكثر من صورة</p>
            </div>

            <!-- الكمية -->
            <div>
                <label class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">الكمية المتوفرة</label>
                <input type="number"
                    class="w-full px-4 py-2 border rounded-lg dark:bg-gray-900 dark:text-white dark:border-gray-600"
                    placeholder="مثلاً: 50">
            </div>

            <!-- حالة التوفر -->
            <div>
                <label class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">حالة المنتج</label>
                <select class="w-full px-4 py-2 border rounded-lg dark:bg-gray-900 dark:text-white dark:border-gray-600">
                    <option>متوفر</option>
                    <option>غير متوفر</option>
                </select>
            </div>

            <!-- زر الحفظ -->
            <div class="text-right">
                <button type="submit" class="bg-red-600 hover:bg-red-700 text-white px-6 py-2 rounded-full transition">
                    💾 حفظ المنتج
                </button>
            </div>
        </form>
    </div>
@endsection
