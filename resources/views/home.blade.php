@extends('layouts.app')

@section('content')
    @php
        $categories = [
            'الكترونيات' => ['هواتف', 'كمبيوترات', 'سماعات'],
            'ملابس' => ['رجالية', 'نسائية', 'أطفال'],
            'إكسسوارات' => ['ساعات', 'نظارات', 'حقائب'],
        ];
    @endphp
    <div class="bg-gray-100 dark:bg-gray-900 dark:text-white min-h-screen">
        <!-- Header -->


        <!-- Main content -->
        <div class="flex flex-col lg:flex-row">

            <!-- Sidebar -->
            <!-- Sidebar -->
            <aside class="hidden lg:block w-1/5 bg-white dark:bg-gray-800 p-4 shadow">

                <h2 class="font-bold mb-2 text-gray-800 dark:text-white">📁 الأقسام</h2>
                <ul class="space-y-3 text-right">

                    @foreach ($categories as $main => $subs)
                        <li x-data="{ open: false }" class="text-gray-700 dark:text-gray-200">
                            <button @click="open = !open"
                                class="flex justify-between w-full font-semibold hover:text-red-600 dark:hover:text-red-400">
                                {{ $main }}
                                <span x-text="open ? '▲' : '▼'" class="text-sm"></span>
                            </button>

                            <ul x-show="open" x-transition class="mt-1 pr-3 space-y-1 text-sm">
                                @foreach ($subs as $sub)
                                    <li><a href="#" class="block hover:text-red-500">{{ $sub }}</a></li>
                                @endforeach
                            </ul>
                        </li>
                    @endforeach

                </ul>
            </aside>


            <!-- Products Grid -->
            <main class="flex-1 p-6">
                <!-- Filters Section -->
                @include('partials_product_filters') <!-- إن أردت وضع الكود في ملف منفصل -->

                {{-- @include('partials_offers')  --}}


                @include('offer_slider')


                <!-- Products Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">

                    @for ($i = 0; $i < 8; $i++)
                        <div
                            class="bg-white dark:bg-gray-800 rounded-xl shadow hover:shadow-lg transition p-3 flex flex-col text-sm sm:text-base">

                            <img src="https://via.placeholder.com/300" alt="Product Image"
                                class="rounded-lg h-32 object-cover mb-2">

                            <h3 class="font-semibold text-base text-gray-800 dark:text-white truncate mb-1">
                                منتج رقم {{ $i + 1 }}
                            </h3>

                            <div class="flex items-center text-xs text-yellow-500 mb-1">
                                ⭐⭐⭐⭐☆ <span class="text-gray-500 dark:text-gray-400 ms-1">(123)</span>
                            </div>

                            <div class="mb-1">
                                <span class="text-red-600 dark:text-red-400 font-bold text-base">1200 DA</span>
                                <span class="line-through text-gray-400 text-xs ms-1">1500 DA</span>
                            </div>

                            <button
                                class="mt-auto bg-red-600 hover:bg-red-700 text-white px-3 py-1.5 text-sm rounded-full transition">
                                🛒 أضف
                            </button>
                        </div>
                    @endfor
                </div>
            </main>
        </div>
    </div>
@endsection
