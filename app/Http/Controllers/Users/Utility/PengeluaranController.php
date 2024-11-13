<?php

namespace App\Http\Controllers\Users\Utility;

use App\Models\Users\Pengeluaran;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class PengeluaranController extends Controller
{
    public function addPengeluaran(Request $request)
    {
        $pengeluaran = new Pengeluaran;

        $pengeluaran->nama = $request->input('nama');
        $pengeluaran->harga = $request->input('harga');

        if ($request->hasfile('foto')) {
            $file = $request->file('foto');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $file->move('uploads/pengeluaran/', $filename);
            $pengeluaran->foto = $filename;
        }

        $pengeluaran->save();
        return redirect()->back();
    }
}
