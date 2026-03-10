<?php

namespace App\Http\Controllers;

use App\Models\Pickup;
use App\Models\Product;
use App\Models\StockBalance;
use App\Models\PickupLine;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Ringkasan data
        $totalProduk = Product::count();
        $totalStok = StockBalance::avg('qty_on_hand');
        round($totalStok, 2); 
        $totalPickup = Pickup::count();
        $totalUser = User::count();

        // Histori pengambilan terbaru (10 terakhir)
        $recentPickups = PickupLine::with([
                'pickup.user',   // relasi ke user
                'pickup.floor',  // relasi ke lantai
                'product'        // relasi ke barang
            ])
            ->latest()
            ->take(10)
            ->get();

        // Kirim data ke view dashboard
        return view('dashboard.index', compact(
            'totalProduk',
            'totalStok',
            'totalPickup',
            'totalUser',
            'recentPickups'
        ));
    }
}