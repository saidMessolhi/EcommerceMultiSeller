@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 bg-white p-6 rounded shadow">
        <!-- صورة المنتج -->
        <div>
            <img src="https://via.placeholder.com/500x400" class="w-full rounded" alt="صورة المنتج">
        </div>

        <!-- تفاصيل المنتج -->
        <div class="space-y-4">
            <h1 class="text-3xl font-bold text-gray-800">اسم المنتج</h1>

            <p class="text-red-600 text-xl font-bold">1500 DA</p>

            <div>
                <span class="text-gray-600 font-semibold">الوصف:</span>
                <p class="text-gray-700 mt-1">
                    هذا وصف بسيط للمنتج. يمكنك توسيع هذا النص ليشمل كل التفاصيل المهمة للعميل.
                </p>
            </div>

            <button class="mt-4 bg-red-600 text-white px-6 py-2 rounded hover:bg-red-700">
                أضف إلى السلة 🛒
            </button>
        </div>
    </div>
</div>
@endsection
