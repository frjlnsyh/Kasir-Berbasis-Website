<?php

namespace App\Http\Controllers\Admin\Utility;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class Top5Controller extends Controller
{
    public function index()
    {
        $top5penjualan = DB::table('penjualan')
            ->select('nama_produk', DB::raw('SUM(jumlah) as total_penjualan'))
            ->groupBy('nama_produk')
            ->orderByDesc('total_penjualan')
            ->take(5)
            ->get();


        return view('admin.utility.top-5', compact('top5penjualan'));
    }
}
