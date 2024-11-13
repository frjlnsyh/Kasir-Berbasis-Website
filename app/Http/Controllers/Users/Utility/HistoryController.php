<?php

namespace App\Http\Controllers\Users\Utility;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class HistoryController extends Controller
{
    public function index()
    {
        $penjualan = DB::table('penjualan')
            ->orderBy('penjualan.created_at', 'desc')
            ->paginate(10);

        return view('users.utility.histori', compact('penjualan'));
    }

    public function search(Request $request)
    {
        $tanggal = $request->input('tanggal');

        $penjualan = DB::table('penjualan')->whereDate('created_at', $tanggal)->paginate(10);

        return view('users.utility.histori', compact('penjualan'));
    }
}
