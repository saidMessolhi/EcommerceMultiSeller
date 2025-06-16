<!-- resources/views/admin/sellers.blade.php -->
<div class="p-6 space-y-6">
    <h2 class="text-2xl font-bold mb-4">🧑‍💼 إدارة البائعين</h2>
    <table class="min-w-full bg-white dark:bg-gray-800 rounded-xl shadow">
        <thead>
            <tr class="bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-200">
                <th class="p-2 text-right">البائع</th>
                <th class="p-2 text-right">البريد الإلكتروني</th>
                <th class="p-2 text-right">الحالة</th>
                <th class="p-2 text-right">إجراءات</th>
            </tr>
        </thead>
        <tbody>
            <tr class="border-t dark:border-gray-700">
                <td class="p-2">شركة التقنية</td>
                <td class="p-2">tech@example.com</td>
                <td class="p-2 text-green-600">مفعل</td>
                <td class="p-2 space-x-2">
                    <button class="px-2 py-1 bg-yellow-600 text-white rounded">إيقاف</button>
                    <button class="px-2 py-1 bg-blue-600 text-white rounded">تفاصيل</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>
