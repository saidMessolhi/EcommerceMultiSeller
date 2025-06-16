<!-- resources/views/partials/seller/notifications.blade.php -->
<div class="space-y-4">
    <h2 class="text-2xl font-bold mb-4">🔔 الإشعارات</h2>

    <div class="bg-white dark:bg-gray-800 p-4 rounded-xl shadow space-y-3">
        @for ($i = 0; $i < 5; $i++)
            <div class="border-b border-gray-200 dark:border-gray-700 pb-2">
                <p class="text-gray-700 dark:text-gray-300">
                    إشعار رقم {{ $i + 1 }}: تم تأكيد الطلب رقم #10{{ $i }}
                </p>
                <span class="text-xs text-gray-400">منذ {{ rand(1, 12) }} ساعة</span>
            </div>
        @endfor
    </div>
</div>
