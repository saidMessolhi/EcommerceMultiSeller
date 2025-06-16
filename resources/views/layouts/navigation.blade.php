@php
$categories = [
    'الكترونيات' => ['هواتف', 'كمبيوترات', 'سماعات'],
    'ملابس' => ['رجالية', 'نسائية', 'أطفال'],
    'إكسسوارات' => ['ساعات', 'نظارات', 'حقائب']
];
@endphp

<nav x-data="{ open: false, categoryOpen: false, darkMode: false }" x-init="
    if(localStorage.getItem('darkMode') === 'true') {
        darkMode = true;
        document.documentElement.classList.add('dark');
    }
" x-effect="
    if(darkMode) {
        document.documentElement.classList.add('dark');
        localStorage.setItem('darkMode', true);
    } else {
        document.documentElement.classList.remove('dark');
        localStorage.setItem('darkMode', false);
    }
" class="bg-white dark:bg-gray-900 shadow sticky top-0 z-50">

    <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
        <!-- Logo -->
        <a href="{{ url('/') }}" class="text-2xl font-bold text-red-600 dark:text-white">
            🛍️ متجري
        </a>

        <!-- Search -->
        <div class="hidden md:block w-1/2">
            <input type="text" placeholder="ابحث عن منتج..."
                class="w-full px-4 py-2 border rounded-full focus:outline-none focus:ring-2 focus:ring-red-500 dark:bg-gray-800 dark:text-white dark:border-gray-700">
        </div>

        <!-- Desktop Menu -->
        <div class="hidden md:flex items-center space-x-6 text-gray-700 dark:text-white font-medium">
            <!-- Dropdown categories -->
           <!-- Dropdown categories -->
<div 
    x-data="{ categoryOpen: false, timeout: null }"
    @mouseenter="clearTimeout(timeout); categoryOpen = true"
    @mouseleave="timeout = setTimeout(() => categoryOpen = false, 200)" 
    class="relative text-right"
>
    <button class="hover:text-red-600 dark:hover:text-red-400 font-medium">الفئات ⬇</button>

    <div 
        x-show="categoryOpen" 
        x-transition 
        class="absolute z-10 bg-white dark:bg-gray-800 shadow rounded py-2 mt-2 w-48 text-right"
    >
        @foreach($categories as $main => $subs)
            <div 
                x-data="{ subOpen: false, subTimeout: null }" 
                @mouseenter="clearTimeout(subTimeout); subOpen = true" 
                @mouseleave="subTimeout = setTimeout(() => subOpen = false, 200)"
                class="group relative"
            >
                <button 
                    class="w-full text-right px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700 font-semibold"
                >
                    {{ $main }}
                </button>

                <div 
                    x-show="subOpen" 
                    x-transition 
                    class="absolute right-full top-0 mt-0 mr-1 bg-white dark:bg-gray-700 shadow-md rounded px-2 py-1 text-sm"
                >
                    @foreach($subs as $sub)
                        <a href="#" class="block px-2 py-1 hover:text-red-600 dark:hover:text-red-400">
                            {{ $sub }}
                        </a>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
</div>

            <a href="{{ url('/') }}" class="hover:text-red-600 dark:hover:text-red-400">الرئيسية</a>
            <a href="#" class="hover:text-red-600 dark:hover:text-red-400">المنتجات</a>
            <a href="#" class="hover:text-red-600 dark:hover:text-red-400">السلة</a>
            <a href="#" class="hover:text-red-600 dark:hover:text-red-400">اتصل بنا</a>
        </div>

        <!-- Actions -->
        <div class="hidden md:flex items-center space-x-4">
            <button @click="cartOpen = true" class="relative text-gray-700 dark:text-gray-100 hover:text-red-600 dark:hover:text-red-400">
                🛒
                <span class="absolute -top-2 -right-2 bg-red-600 text-white text-xs w-5 h-5 flex items-center justify-center rounded-full">2</span>
            </button>

            <button @click="darkMode = !darkMode" class="text-xl text-gray-700 dark:text-white hover:text-red-600 dark:hover:text-red-400">🌙</button>

            <a href="{{ route('loginUser') }}"
                class="inline-block bg-red-600 hover:bg-red-700 text-white px-6 py-2 rounded shadow">
                🔐 تسجيل الدخول
            </a>
        </div>

        <!-- Hamburger -->
        <button @click="open = !open" class="md:hidden text-2xl text-gray-700 dark:text-white">
            ☰
        </button>
    </div>

    <!-- Mobile Menu -->
    <div x-show="open" class="md:hidden px-4 pb-4 dark:bg-gray-900">
        <input type="text" placeholder="ابحث عن منتج..."
            class="w-full mb-3 px-4 py-2 border rounded-full focus:outline-none focus:ring-2 focus:ring-red-500 dark:bg-gray-800 dark:text-white dark:border-gray-700">

        <div class="space-y-2 text-right text-gray-700 dark:text-white">
            <div>
                <button @click="categoryOpen = !categoryOpen" class="w-full text-right font-medium">
                    الفئات ⬇
                </button>

                <!-- ✅ فئات رئيسية وفرعية للموبايل -->
                <div x-show="categoryOpen" class="mt-1 bg-gray-100 dark:bg-gray-800 rounded text-sm">
                    @foreach($categories as $main => $subs)
                        <div x-data="{ subOpenMobile: false }" class="border-b border-gray-300 dark:border-gray-700">
                            <button @click="subOpenMobile = !subOpenMobile"
                                class="w-full text-right px-4 py-2 font-semibold hover:bg-gray-200 dark:hover:bg-gray-700">
                                {{ $main }} <span x-text="subOpenMobile ? '▲' : '▼'" class="text-xs"></span>
                            </button>
                            <div x-show="subOpenMobile" x-transition class="pl-6 pb-2">
                                @foreach($subs as $sub)
                                    <a href="#" class="block py-1 text-gray-600 dark:text-gray-300 hover:text-red-500 dark:hover:text-red-400">{{ $sub }}</a>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <a href="{{ url('/') }}" class="block px-2 py-1 hover:text-red-600 dark:hover:text-red-400">الرئيسية</a>
            <a href="#" class="block px-2 py-1 hover:text-red-600 dark:hover:text-red-400">المنتجات</a>
            <a href="#" class="block px-2 py-1 hover:text-red-600 dark:hover:text-red-400">السلة</a>
            <a href="#" class="block px-2 py-1 hover:text-red-600 dark:hover:text-red-400">اتصل بنا</a>

            <div class="flex justify-between mt-2">
                <button @click="darkMode = !darkMode" class="text-xl">🌙</button>
                <a href="{{ route('loginUser') }}" class="bg-red-600 text-white px-4 py-1.5 rounded text-center">تسجيل الدخول</a>
            </div>
        </div>
    </div>
</nav>
