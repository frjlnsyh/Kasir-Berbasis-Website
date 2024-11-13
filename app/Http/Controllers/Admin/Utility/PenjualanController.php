<?php

namespace App\Http\Controllers\Admin\Utility;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class PenjualanController extends Controller
{
    public function index()
    {
        $penjualan = DB::table('penjualan')->paginate(10);
        return view('admin.utility.penjualan', compact('penjualan'));
    }

    public function search(Request $request)
    {
        $tanggal = $request->input('tanggal');

        $penjualan = DB::table('penjualan')->whereDate('created_at', $tanggal)->paginate(10);

        return view('admin.utility.penjualan', compact('penjualan'));
    }
}
