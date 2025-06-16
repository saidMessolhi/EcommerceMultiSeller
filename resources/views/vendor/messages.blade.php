<!-- resources/views/partials/seller/messages.blade.php -->
<div class="space-y-4">
    <h2 class="text-2xl font-bold mb-4">📩 الرسائل</h2>

    <div class="bg-white dark:bg-gray-800 rounded-xl shadow divide-y divide-gray-200 dark:divide-gray-700">
        @for ($i = 0; $i < 5; $i++)
            <div class="p-4 hover:bg-gray-50 dark:hover:bg-gray-700 transition">
                <p class="font-semibold text-gray-800 dark:text-gray-100">مستخدم {{ $i + 1 }}</p>
                <p class="text-sm text-gray-600 dark:text-gray-300 truncate">مرحبا، لدي استفسار حول المنتج...</p>
                <span class="text-xs text-gray-400">قبل {{ rand(2, 24) }} ساعة</span>
            </div>
        @endfor
    </div>
</div>
