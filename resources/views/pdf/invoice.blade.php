<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <style>
        @font-face {
            font-family: 'Amiri';
            src: url('{{ public_path('fonts/Amiri-Regular.ttf') }}') format('truetype');
        }
        body {
            font-family: 'Amiri', sans-serif;
            direction: rtl;
            text-align: right;
            padding: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #000;
            padding: 8px;
        }
        h2, h3 {
            margin-top: 20px;
            color: #e3342f;
        }
    </style>
</head>
<body>
    <h2>🧾 فاتورة الطلب رقم #{{ $order['id'] }}</h2>
    <p><strong>👤 الاسم:</strong> {{ $order['customer_name'] }}</p>
    <p><strong>📅 التاريخ:</strong> {{ $order['date'] }}</p>

    <table>
        <thead>
            <tr>
                <th>📦 المنتج</th>
                <th>📊 الكمية</th>
                <th>💰 السعر</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($order['items'] as $item)
                <tr>
                    <td>{{ $item['name'] }}</td>
                    <td>{{ $item['qty'] }}</td>
                    <td>{{ $item['price'] }} د.ج</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <h3>💵 المجموع: {{ $order['total'] }} د.ج</h3>
</body>
</html>
