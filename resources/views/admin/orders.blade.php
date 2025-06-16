<!-- resources/views/admin/orders.blade.php -->
<div class="p-6 space-y-6">
    <h2 class="text-2xl font-bold mb-4">📦 إدارة الطلبات</h2>
    <table class="min-w-full bg-white dark:bg-gray-800 rounded-xl shadow">
        <thead>
            <tr class="bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-200">
                <th class="p-2 text-right">رقم الطلب</th>
                <th class="p-2 text-right">المستخدم</th>
                <th class="p-2 text-right">الإجمالي</th>
                <th class="p-2 text-right">الحالة</th>
                <th class="p-2 text-right">إجراءات</th>
            </tr>
        </thead>
        <tbody>
            <tr class="border-t dark:border-gray-700">
                <td class="p-2">#1234</td>
                <td class="p-2">أحمد</td>
                <td class="p-2">3,200 DA</td>
                <td class="p-2 text-yellow-600">قيد المعالجة</td>
                <td class="p-2 space-x-2">
                    <button class="px-2 py-1 bg-green-600 text-white rounded">اكتمال</button>
                    <button class="px-2 py-1 bg-red-600 text-white rounded">إلغاء</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>
