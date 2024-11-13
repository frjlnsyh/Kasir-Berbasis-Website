<?php

namespace App\Http\Controllers\Admin\Utility;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class PengeluaranController extends Controller
{
    public function index()
    {
        $pengeluaran = DB::table('pengeluaran')->paginate(10);
        return view('admin.utility.pengeluaran', compact('pengeluaran'));
    }

    public function search(Request $request)
    {
        $tanggal = $request->input('tanggal');

        $pengeluaran = DB::table('pengeluaran')->whereDate('created_at', $tanggal)->paginate(10);

        return view('admin.utility.pengeluaran', compact('pengeluaran'));
    }
}
