<!DOCTYPE html>
{{-- <html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> --}}

<html lang="ar" dir="rtl"> <!-- لدعم العربية -->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])


    </head>
  <body x-data="{ open: false, categoryOpen: false, darkMode: false, showSidebar: false ,cartOpen: false}"
      :class="{ 'dark': darkMode }"
      class="font-sans antialiased bg-white dark:bg-gray-900 text-gray-900 dark:text-white">

    <div class="min-h-screen">
        {{-- تم حذف شريط التنقل من هنا لأن navigation.blade.php يقوم بذلك --}}

        <!-- محتوى الصفحة -->
        @include('layouts.navigation')

     

        <main class="px-4 bg-gray-100 text-gray-900 dark:bg-gray-900 dark:text-white" >
            @yield('content')
        </main>
    </div>




    <!-- 🛒 شريط جانبي لعربة التسوق -->
<div 
    x-show="cartOpen"
    x-transition
    @keydown.escape.window="cartOpen = false"
    class="fixed top-0 right-0 w-full sm:w-96 h-full bg-white dark:bg-gray-800 shadow-lg z-50 border-l border-gray-200 dark:border-gray-700"
    @click.outside="cartOpen = false"
>
    <div class="p-4 flex justify-between items-center border-b border-gray-200 dark:border-gray-700">
        <h2 class="text-lg font-bold text-gray-800 dark:text-white">🛒 سلة التسوق</h2>
        <button @click="cartOpen = false" class="text-gray-600 dark:text-gray-300 text-xl">×</button>
    </div>

    <div class="p-4 space-y-4 overflow-y-auto h-[calc(100%-120px)]">
        <!-- مثال على منتج -->
        <div class="flex items-center justify-between bg-gray-100 dark:bg-gray-700 p-3 rounded">
            <div>
                <h3 class="text-sm font-semibold text-gray-800 dark:text-white">منتج 1</h3>
                <p class="text-xs text-gray-600 dark:text-gray-300">الكمية: 1</p>
            </div>
            <div class="text-right">
                <p class="text-sm text-gray-800 dark:text-white">د.ج 2000</p>
            </div>
        </div>

        <!-- كرر هذا القسم للمنتجات الأخرى -->
    </div>

    <div class="p-4 border-t border-gray-200 dark:border-gray-700">
        <div class="flex justify-between mb-4">
            <span class="text-gray-800 dark:text-white font-semibold">المجموع:</span>
            <span class="text-red-600 dark:text-red-400 font-bold">د.ج 2000</span>
        </div>
        <a href="#" class="block text-center bg-red-600 hover:bg-red-700 text-white font-semibold py-2 rounded">🔁 إتمام الطلب</a>
    </div>
</div>


  <!-- محتوى الفوتر -->
  @include('footer')

    <script>
    function productSearch() {
        return {
            query: '',
            results: [],
            search() {
                if (this.query.length < 2) {
                    this.results = [];
                    return;
                }

                fetch(`/search-products?q=${this.query}`)
                    .then(res => res.json())
                    .then(data => this.results = data);
            }
        }
    }
</script>




<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js" defer></script>

<!-- Init Swiper -->
<script defer>
document.addEventListener('DOMContentLoaded', () => {
    new Swiper('.mySwiper', {
        slidesPerView: 1,
        spaceBetween: 20,
        breakpoints: {
            640: { slidesPerView: 1.2 },
            768: { slidesPerView: 2 },
            1024: { slidesPerView: 3 }
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        loop: true
    });
});
</script>

</body>

</html>
