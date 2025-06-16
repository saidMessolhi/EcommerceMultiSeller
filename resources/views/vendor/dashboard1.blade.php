{{-- @extends('layouts.app')

@section('content')
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
                <a href="#" class="block bg-blue-600 hover:bg-blue-700 py-4 rounded-xl shadow transition">
                    🧾 إدارة المنتجات
                </a>
                <a href="#" class="block bg-yellow-500 hover:bg-yellow-600  py-4 rounded-xl shadow transition">
                    📦 الطلبات
                </a>
                <a href="#" class="block bg-gray-700 hover:bg-gray-800  py-4 rounded-xl shadow transition">
                    ⚙️ إعدادات المتجر
                </a>
            </div>

        </div>

        @include('vendor.order_table')

    </div>
@endsection --}}
@extends('layouts.app')

@section('content')
    <div x-data="{ tab: 'orders' }" class="flex min-h-screen bg-gray-100 dark:bg-gray-900 dark:text-white">

        <!-- Sidebar -->
        <aside class="w-64 bg-white dark:bg-gray-800 p-4 shadow-lg space-y-4">
            <h2 class="text-lg font-bold text-gray-800 dark:text-white mb-6">📋 لوحة التحكم</h2>

            <button @click="tab = 'orders'"
                :class="tab === 'orders' ? 'bg-red-600 text-white' :
                    'bg-gray-200 text-gray-800 dark:bg-gray-700 dark:text-white'"
                class="block w-full text-right px-4 py-2 rounded hover:bg-red-500 transition">
                🧾 الطلبات
            </button>
            <button @click="tab = 'products'"
                :class="tab === 'products' ? 'bg-red-600 text-white' :
                    'bg-gray-200 text-gray-800 dark:bg-gray-700 dark:text-white'"
                class="block w-full text-right px-4 py-2 rounded hover:bg-red-500 transition">
                📦 المنتجات
            </button>
            <button @click="tab = 'settings'"
                :class="tab === 'settings' ? 'bg-red-600 text-white' :
                    'bg-gray-200 text-gray-800 dark:bg-gray-700 dark:text-white'"
                class="block w-full text-right px-4 py-2 rounded hover:bg-red-500 transition">
                ⚙️ الإعدادات
            </button>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-6">
            <!-- الطلبات -->
            <div x-show="tab === 'orders'">
                <h1 class="text-xl font-bold mb-4">🧾 الطلبات</h1>
                @include('vendor.order_table')
            </div>

            <!-- المنتجات -->
            <div x-show="tab === 'products'" x-cloak>
                <h1 class="text-xl font-bold mb-4">📦 المنتجات</h1>
                @include('vendor.product.products')
            </div>

            <!-- الإعدادات -->
            <div x-show="tab === 'settings'" x-cloak>
                <h1 class="text-xl font-bold mb-4">⚙️ الإعدادات</h1>
                @include('vendor.settings')
            </div>
        </main>
    </div>
@endsection
