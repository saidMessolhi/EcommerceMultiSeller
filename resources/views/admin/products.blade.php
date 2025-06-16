<!-- resources/views/admin/products.blade.php -->
<div class="p-6 space-y-6">
    <h2 class="text-2xl font-bold mb-4">🛍️ إدارة المنتجات</h2>
    <button class="mb-4 px-4 py-2 bg-blue-600 text-white rounded">+ منتج جديد</button>
    <table class="min-w-full bg-white dark:bg-gray-800 rounded-xl shadow">
        <thead>
            <tr class="bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-200">
                <th class="p-2 text-right">المنتج</th>
                <th class="p-2 text-right">السعر</th>
                <th class="p-2 text-right">المخزون</th>
                <th class="p-2 text-right">إجراءات</th>
            </tr>
        </thead>
        <tbody>
            <tr class="border-t dark:border-gray-700">
                <td class="p-2">هاتف XYZ</td>
                <td class="p-2">25,000 DA</td>
                <td class="p-2">12</td>
                <td class="p-2 space-x-2">
                    <button class="px-2 py-1 bg-yellow-600 text-white rounded">تعديل</button>
                    <button class="px-2 py-1 bg-red-600 text-white rounded">حذف</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>
