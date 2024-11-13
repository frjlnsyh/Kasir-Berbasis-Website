<?php

namespace App\Http\Controllers\Admin\Produk;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Kategori;
use App\Models\Admin\Produk;

class ProdukController extends Controller
{
    public function index()
    {
        $kategori = Kategori::all();
        $produk = Produk::all();
        return view('admin.produk.produk', compact('kategori', 'produk'));
    }

    public function tambahKate(Request $request)
    {
        $kategori = new Kategori;

        $kategori->kategori = $request->input('kategori');

        $kategori->save();

        return redirect()->back()->with('status', 'Kategori Added Successfully');
    }

    public function tambahProd(Request $request)
    {
        $produk = new Produk;

        $produk->kategori_id = $request->input('kategori_id');

        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $file->move('uploads/produk/', $filename);
            $produk->image = $filename;
        }

        $produk->nama = $request->input('nama');
        $produk->deskripsi = $request->input('deskripsi');
        $produk->harga = $request->input('harga');

        $produk->save();

        return redirect()->back()->with('status', 'Produk Added Successfully');
    }

    public function update(Request $request, $id)
    {
        $produk = Produk::find($id);

        $produk->kategori_id = $request->input('kategori_id');
        if ($request->hasFile('image')) {
            // Hapus foto lama jika ada
            $oldImagePath = public_path('uploads/produk/' . $produk->image);
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath);
            }

            // Simpan foto yang baru diunggah
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/produk/', $filename);
            $produk->image = $filename;
        }

        // Perbarui data karyawan lainnya
        $produk->nama = $request->input('nama');
        $produk->deskripsi = $request->input('deskripsi');
        $produk->harga = $request->input('harga');
        $produk->update(); // Simpan perubahan ke dalam database

        return redirect()->back()->with('status', 'Produk berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $produk = Produk::find($id);
        $produk->delete();
        return redirect()->back()->with('status', 'Produk Deleted Successfully');
    }
}
