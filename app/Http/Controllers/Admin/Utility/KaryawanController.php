<?php

namespace App\Http\Controllers\Admin\Utility;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Karyawan;

class KaryawanController extends Controller
{
    public function index()
    {
        $karyawan = Karyawan::paginate(10);
        return view('admin.utility.karyawan', compact('karyawan'));
        // return ($karyawan);
    }

    public function insert(Request $request)
    {
        $karyawan = new Karyawan;

        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $file->move('uploads/karyawan/', $filename);
            $karyawan->image = $filename;
        }

        $karyawan->nama = $request->input('nama');
        $karyawan->alamat = $request->input('alamat');
        $karyawan->email = $request->input('email');
        $karyawan->no = $request->input('no');

        $karyawan->save();
        return redirect()->back()->with('status', 'Karyawan berhasil di tambahkan');
    }

    public function update(Request $request, $id)
    {
        $karyawan = Karyawan::find($id);

        if ($request->hasFile('image')) {
            // Hapus foto lama jika ada
            $oldImagePath = public_path('uploads/karyawan/' . $karyawan->image);
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath);
            }

            // Simpan foto yang baru diunggah
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/karyawan/', $filename);
            $karyawan->image = $filename;
        }

        // Perbarui data karyawan lainnya
        $karyawan->nama = $request->input('nama');
        $karyawan->email = $request->input('email');
        $karyawan->alamat = $request->input('alamat');
        $karyawan->no = $request->input('no');
        $karyawan->update(); // Simpan perubahan ke dalam database

        return redirect()->back()->with('status', 'Karyawan berhasil diperbarui.');
    }


    public function destroy($id)
    {
        $produk = Karyawan::find($id);
        $produk->delete();
        return redirect()->back()->with('status', 'Karyawan Deleted Successfully');
    }
}
