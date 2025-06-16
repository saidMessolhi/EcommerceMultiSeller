@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h2 class="text-2xl font-bold mb-6">🛒 سلة المشتريات</h2>

    <!-- إذا كانت السلة فارغة -->
    {{-- @if (empty($cartItems)) --}}
    {{-- <p class="text-gray-600">سلتك فارغة.</p> --}}
    {{-- @else --}}

    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <!-- قائمة المنتجات -->
        <div class="md:col-span-2 bg-white p-4 rounded shadow">
            <table class="w-full">
                <thead>
                    <tr class="border-b">
                        <th class="text-right py-2">المنتج</th>
                        <th class="text-center py-2">الكمية</th>
                        <th class="text-center py-2">السعر</th>
                        <th class="text-center py-2">الحذف</th>
                    </tr>
                </thead>
                <tbody>
                    @for ($i = 1; $i <= 3; $i++)
                    <tr class="border-b">
                        <td class="py-4 flex items-center gap-2">
                            <img src="https://via.placeholder.com/60" class="w-16 h-16 rounded" alt="">
                            <span>منتج رقم {{ $i }}</span>
                        </td>
                        <td class="text-center">
                            <input type="number" value="1" min="1" class="border w-16 text-center rounded">
                        </td>
                        <td class="text-center text-red-600 font-bold">1500 DA</td>
                        <td class="text-center">
                            <button class="text-red-500 hover:text-red-700">🗑️</button>
                        </td>
                    </tr>
                    @endfor
                </tbody>
            </table>
        </div>

        <!-- ملخص الطلب -->
        <div class="bg-white p-4 rounded shadow">
            <h3 class="text-xl font-semibold mb-4">ملخص الطلب</h3>
            <div class="flex justify-between py-2 border-b">
                <span>المجموع</span>
                <span class="font-bold text-red-600">4500 DA</span>
            </div>
            <div class="mt-4">
                <button class="w-full bg-red-600 text-white py-2 rounded hover:bg-red-700">
                    تأكيد الطلب
                </button>
            </div>
        </div>
    </div>
    {{-- @endif --}}
</div>
@endsection
