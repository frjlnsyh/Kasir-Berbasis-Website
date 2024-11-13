<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    public function index()
    {
        $produk = DB::table('produk')->count();
        $karyawan = DB::table('karyawan')->count();
        $penjualan = DB::table('penjualan')->get()->all();
        return view('admin.home', compact('produk', 'karyawan', 'penjualan'));
    }
}
