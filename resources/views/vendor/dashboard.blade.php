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
            <button @click="tab = 'notifications'"
                :class="tab === 'notifications' ? 'bg-red-600 text-white' :
                    'bg-gray-200 text-gray-800 dark:bg-gray-700 dark:text-white'"
                class="block w-full text-right px-4 py-2 rounded hover:bg-red-500 transition">
                🔔 الإشعارات
            </button>
            <button @click="tab = 'messages'"
                :class="tab === 'messages' ? 'bg-red-600 text-white' :
                    'bg-gray-200 text-gray-800 dark:bg-gray-700 dark:text-white'"
                class="block w-full text-right px-4 py-2 rounded hover:bg-red-500 transition">
                💬 الرسائل
            </button>
            <button @click="tab = 'analytics'"
                :class="tab === 'analytics' ? 'bg-red-600 text-white' :
                    'bg-gray-200 text-gray-800 dark:bg-gray-700 dark:text-white'"
                class="block w-full text-right px-4 py-2 rounded hover:bg-red-500 transition">
                📊 التحليلات
            </button>
            <button @click="tab = 'settings'"
                :class="tab === 'settings' ? 'bg-red-600 text-white' :
                    'bg-gray-200 text-gray-800 dark:bg-gray-700 dark:text-white'"
                class="block w-full text-right px-4 py-2 rounded hover:bg-red-500 transition">
                ⚙️ الإعدادات
            </button>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-6 space-y-6">
            <div x-show="tab === 'orders'">
                <h1 class="text-xl font-bold mb-4">🧾 الطلبات</h1>
                @include('vendor.order_table')
            </div>

            <div x-show="tab === 'products'" x-cloak>
                <h1 class="text-xl font-bold mb-4">📦 المنتجات</h1>
                @include('vendor.product.products')
            </div>

            <div x-show="tab === 'notifications'" x-cloak>
                <h1 class="text-xl font-bold mb-4">🔔 الإشعارات</h1>
                @include('vendor.notifications')
            </div>

            <div x-show="tab === 'messages'" x-cloak>
                <h1 class="text-xl font-bold mb-4">💬 الرسائل</h1>
                @include('vendor.messages')
            </div>

            <div x-show="tab === 'analytics'" x-cloak>
                <h1 class="text-xl font-bold mb-4">📊 التحليلات</h1>
                @include('vendor.analytics')
            </div>

            <div x-show="tab === 'settings'" x-cloak>
                <h1 class="text-xl font-bold mb-4">⚙️ الإعدادات</h1>
                @include('vendor.settings')
            </div>
        </main>
    </div>
@endsection
