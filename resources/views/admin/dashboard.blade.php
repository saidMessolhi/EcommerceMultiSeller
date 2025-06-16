@extends('layouts.app')

@section('content')
    <!-- resources/views/partials/admin/dashboard.blade.php -->
    <div class="space-y-6" x-data="{ section: 'dashboard' }">
        <h2 class="text-2xl font-bold mb-4">📊 لوحة تحكم الأدمن</h2>

        <!-- إحصائيات عامة -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
            <div class="bg-white dark:bg-gray-800 p-4 rounded-xl shadow">
                <h3 class="text-lg font-semibold mb-1">عدد المستخدمين</h3>
                <p class="text-3xl font-bold text-blue-600">500</p>
            </div>
            <div class="bg-white dark:bg-gray-800 p-4 rounded-xl shadow">
                <h3 class="text-lg font-semibold mb-1">عدد البائعين</h3>
                <p class="text-3xl font-bold text-purple-600">35</p>
            </div>
            <div class="bg-white dark:bg-gray-800 p-4 rounded-xl shadow">
                <h3 class="text-lg font-semibold mb-1">عدد المنتجات</h3>
                <p class="text-3xl font-bold text-green-600">980</p>
            </div>
            <div class="bg-white dark:bg-gray-800 p-4 rounded-xl shadow">
                <h3 class="text-lg font-semibold mb-1">المبيعات الإجمالية</h3>
                <p class="text-3xl font-bold text-red-600">1,200,000 DA</p>
            </div>
        </div>



        <!-- القسم الرئيسي -->
        <div x-show="section === 'dashboard'">


            <!-- لوحة تحكم الرسوم البيانية
                                <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-4">
                                    <!-- رسم بياني لنمو المبيعات
                                    <div class="bg-white dark:bg-gray-800 p-4 rounded-xl shadow h-[500px] flex flex-col">
                                        <h3 class="text-lg font-semibold mb-3">📈 نمو المبيعات</h3>
                                        <canvas id="adminSalesChart" class="w-full flex-grow"></canvas>
                                    </div>
                                </div>
                            -->
            <!-- مراجعة التقارير أو الشكاوى -->

        </div>

        <!-- إدارة الأقسام -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-6">
            <div class="bg-white dark:bg-gray-800 p-4 rounded-xl shadow">
                <h3 class="text-lg font-semibold mb-2">📦 إدارة الطلبات</h3>
                <p class="text-sm text-gray-500">مراجعة الطلبات والتحكم في حالتها.</p>
                <a href="#" @click.prevent="section = 'orders'"
                    class="inline-block mt-3 px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">عرض الطلبات</a>
            </div>
            <div class="bg-white dark:bg-gray-800 p-4 rounded-xl shadow">
                <h3 class="text-lg font-semibold mb-2">🛍️ إدارة المنتجات</h3>
                <p class="text-sm text-gray-500">إضافة أو تعديل أو حذف المنتجات.</p>
                <a href="#" @click.prevent="section = 'products'"
                    class="inline-block mt-3 px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700">عرض المنتجات</a>
            </div>
            <div class="bg-white dark:bg-gray-800 p-4 rounded-xl shadow">
                <h3 class="text-lg font-semibold mb-2">🧑‍💼 إدارة البائعين</h3>
                <p class="text-sm text-gray-500">مراجعة حالة البائعين والتقارير.</p>
                <a href="#" @click.prevent="section = 'sellers'"
                    class="inline-block mt-3 px-4 py-2 bg-red-600 text-white rounded hover:bg-purple-700">عرض البائعين</a>
            </div>
        </div>



        <!-- الطلبات -->
        <div x-show="section === 'orders'">
            @include('admin.orders')
        </div>

        <!-- المنتجات -->
        <div x-show="section === 'products'">
            @include('admin.products')
        </div>

        <!-- البائعين -->
        <div x-show="section === 'sellers'">
            @include('admin.sellers')
        </div>
    </div>

    <!-- إشعارات سريعة -->
    <div class="bg-yellow-100 text-yellow-800 p-4 rounded-xl shadow mt-6">
        <p>🔔 لديك 3 شكاوى جديدة بانتظار المراجعة</p>
    </div>
    <div class="mt-6 bg-white dark:bg-gray-800 p-4 rounded-xl shadow">
        <h3 class="text-lg font-semibold mb-2">📢 الشكاوى والتقارير</h3>
        <ul class="text-sm text-gray-500 list-disc pl-5">
            <li>شكوى من المستخدم A بخصوص الطلب #123</li>
            <li>مشكلة في منتج تم الإبلاغ عنه من البائع B</li>
            <li>اقتراح من المستخدم C لتحسين البحث</li>
        </ul>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://unpkg.com/alpinejs" defer></script>
    <script>
        new Chart(document.getElementById('adminSalesChart').getContext('2d'), {
            type: 'line',
            data: {
                labels: ['يناير', 'فبراير', 'مارس', 'أبريل', 'ماي', 'يونيو'],
                datasets: [{
                    label: 'المبيعات (DA)',
                    data: [150000, 180000, 120000, 200000, 240000, 280000],
                    borderColor: '#3b82f6',
                    backgroundColor: 'rgba(59, 130, 246, 0.2)',
                    tension: 0.4,
                    fill: true
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false
            }
        });
    </script>
@endsection
