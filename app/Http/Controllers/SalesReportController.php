<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use Carbon\Carbon;

class SalesReportController extends Controller
{
    public function index()
    {
        // Ambil data penjualan
        $sales = Payment::selectRaw('DATE(payment_date) as date, SUM(amount) as total_amount')
                        ->groupBy('date')
                        ->orderBy('date', 'ASC')
                        ->get();

        // Format tanggal untuk ditampilkan di view
        $formattedSales = $sales->map(function ($item) {
            return [
                'date' => Carbon::parse($item->date)->isoFormat('dddd, D MMMM YYYY'),
                'total_amount' => $item->total_amount,
            ];
        });

        // Tampilkan view laporan dengan data penjualan
        return view('sales.report', ['sales' => $formattedSales]);
    }
}
