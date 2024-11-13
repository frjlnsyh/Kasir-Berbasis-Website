<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Produk;
use App\Models\Users\Utility\Keranjang;

class HomeController extends Controller
{
    public function index()
    {
        $produk = Produk::all();
        return view('users.home', compact('produk'));
    }
}
