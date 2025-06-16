@extends('layouts.app')

@section('content')
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900 text-gray-800 dark:text-white py-10 px-4">
        <div class="max-w-4xl mx-auto bg-white dark:bg-gray-800 rounded-xl shadow p-6">
            <h2 class="text-2xl font-bold mb-6 text-center">🛒 إتمام الطلب</h2>

            <form action="#" method="POST" class="space-y-6">
                @csrf

                <div>
                    <label class="block font-semibold mb-1">👤 الاسم الكامل</label>
                    <input type="text" name="name"
                        class="w-full p-2 rounded border dark:bg-gray-700 dark:border-gray-600">
                </div>

                <div>
                    <label class="block font-semibold mb-1">📞 رقم الهاتف</label>
                    <input type="text" name="phone"
                        class="w-full p-2 rounded border dark:bg-gray-700 dark:border-gray-600">
                </div>

                <div>
                    <label class="block font-semibold mb-1">📍 العنوان الكامل</label>
                    <textarea name="address" rows="3" class="w-full p-2 rounded border dark:bg-gray-700 dark:border-gray-600"></textarea>
                </div>

                <div>
                    <label class="block font-semibold mb-1">💳 طريقة الدفع</label>
                    <select name="payment_method" class="w-full p-2 rounded border dark:bg-gray-700 dark:border-gray-600">
                        <option value="cod">الدفع عند الاستلام</option>
                        <option value="card">بطاقة بنكية</option>
                    </select>
                </div>

                <div class="text-center">
                    <button class="bg-red-600 hover:bg-red-700 text-white px-6 py-2 rounded-full transition">تأكيد
                        الطلب</button>
                </div>
            </form>
        </div>
    </div>
@endsection
