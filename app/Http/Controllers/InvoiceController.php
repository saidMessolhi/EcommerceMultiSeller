<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class InvoiceController extends Controller
{
    //
    public function download($orderId)
    {
        // بيانات وهمية
        $order = [
            'id' => $orderId,
            'date' => now()->format('Y-m-d'),
            'customer_name' => 'أحمد بن عمر',
            'items' => [
                ['name' => 'هاتف ذكي', 'price' => 2500, 'qty' => 1],
                ['name' => 'سماعات لاسلكية', 'price' => 1000, 'qty' => 1],
            ],
            'total' => 3500,
        ];

        $pdf = Pdf::loadView('pdf.invoice', compact('order'));
        return $pdf->download("invoice_order_{$orderId}.pdf");
    }
}
