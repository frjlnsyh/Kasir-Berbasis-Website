<?php

namespace App\Http\Controllers\Users\Utility;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Produk;
use DB;

class KeranjangController extends Controller
{
    public function index()
    {    // Mengambil data keranjang belanja dari session
        // Session::put('cart', []);
        // $cart = Session::get('cart', []);
        $view = DB::table('keranjang')->get()->all();
        if (!empty($view)) {
            foreach ($view as $value) {
                $data[] = [
                    'id' => $value->produk_id,
                    'nama_produk' => $value->nama_produk,
                    'harga' => $value->harga,
                    'quantity' => $value->jumlah,
                ];
            }
        } else {
            $data = [];
        }

        return view('users.utility.keranjang', ['cart' => $data], compact('view'));
    }

    public function add(Request $request)
    {
        $productId = $request->input('produk_id');
        $produk = Produk::find($productId);

        if (!$produk) {
            return response()->json(['success' => false, 'message' => 'Product not found']);
        }

        // Dapatkan atau inisialisasi session untuk keranjang belanja
        // $cart = Session::get('cart', []);

        // Periksa apakah produk sudah ada dalam keranjang belanja
        $datacart =  DB::table('keranjang')->where('produk_id', $productId)->first();
        if (!empty($datacart)) {
            // Jika sudah ada, tambahkan jumlahnya
            $data = DB::table('keranjang')->where('produk_id', $productId)->update([
                'jumlah' => $datacart->jumlah + 1,
            ]);
            // print_r($datacart);
            // exit();
        } else {
            // Jika belum ada, tambahkan produk ke keranjang belanja dengan jumlah 1    
            $data = DB::table('keranjang')->insert([
                'produk_id' => $productId,
                'nama_produk' => $produk->nama,
                'harga' => $produk->harga,
                'jumlah' => 1,
            ]);
        }

        // Simpan kembali session keranjang belanja
        // Session::put(    'cart', $cart);

        // $insertdata = [];
        // foreach ($cart as $value) {
        // }


        return response()->json(['success' => true, 'message' => 'Product added to cart successfully']);
    }

    public function checkout()
    {
        $checkoutdatas = DB::table('keranjang')->get()->all();

        // foreach ($checkoutdatas as $checkoutdata) {
        //     $checkout = DB::table('penjualan')->insert([
        //         'produk_id' => $checkoutdata->produk_id,
        //         'nama_produk' => $checkoutdata->nama_produk,
        //         'harga' => $checkoutdata->harga,
        //         'jumlah' => $checkoutdata->jumlah,
        //     ]);
        // }

        // $checkoutdatas = DB::table('keranjang')->delete();

        return view('users.utility.checkout', compact('checkoutdatas'));
    }

    public function bill()
    {
        $checkoutdatas = DB::table('keranjang')->get()->all();

        foreach ($checkoutdatas as $checkoutdata) {
            $checkout = DB::table('penjualan')->insert([
                'produk_id' => $checkoutdata->produk_id,
                'nama_produk' => $checkoutdata->nama_produk,
                'harga' => $checkoutdata->harga,
                'jumlah' => $checkoutdata->jumlah,
                'created_at' => now(),
            ]);
        }

        $checkoutdatas = DB::table('keranjang')->delete();
        return redirect('users/home');
    }

    // public function updateQuantity(Request $request)
    // {
    //     $productId = $request->input('produk_id');
    //     $quantity = $request->input('quantity');

    //     // Validasi quantity
    //     if ($quantity <= 0) {
    //         return response()->json(['success' => false, 'message' => 'Invalid quantity']);
    //     }

    //     // Dapatkan keranjang belanja dari session
    //     $cart = Session::get('cart', []);

    //     // Periksa apakah produk ada dalam keranjang belanja
    //     if (array_key_exists($productId, $cart)) {
    //         // Update kuantitas produk
    //         $cart[$productId]['quantity'] = $quantity;

    //         // Simpan kembali session keranjang belanja
    //         Session::put('cart', $cart);

    //         return response()->json(['success' => true, 'message' => 'Quantity updated successfully']);
    //     } else {
    //         return response()->json(['success' => false, 'message' => 'Product not found in cart']);
    //     }
    // }

    public function addQuantity(Request $request)
    {
        $productId = $request->input('produk_id');
        $checkoutdatas = DB::table('keranjang')->where('produk_id', $productId)->first();
        if (!empty($checkoutdatas)) {
            $data = DB::table('keranjang')->where('produk_id', $productId)->update([
                'jumlah' => $checkoutdatas->jumlah + 1,
            ]);
            return response()->json(['success' => true, 'message' => 'Item removed from cart successfully']);
        }
    }

    public function minQuantity(Request $request)
    {
        $productId = $request->input('produk_id');
        $checkoutdatas = DB::table('keranjang')->where('produk_id', $productId)->first();
        if (!empty($checkoutdatas)) {
            if ($checkoutdatas->jumlah <= 1) {
                $delete  = DB::table('keranjang')->where('produk_id', $productId)->delete();
                return response()->json(['success' => true, 'message' => 'Item removed from cart successfully']);
            } else {
                $data = DB::table('keranjang')->where('produk_id', $productId)->update([
                    'jumlah' => $checkoutdatas->jumlah - 1,
                ]);
                return response()->json(['success' => true, 'message' => 'Item removed from cart successfully']);
            }
        }
    }

    public function removeItem(Request $request, $id)
    {
        $checkoutdatas = DB::table('keranjang')->where('produk_id', $id);

        if (!empty($checkoutdatas)) {
            $delete  = DB::table('keranjang')->where('produk_id', $id)->delete(); // Hapus item dengan kunci produk tertentu dari session
            return response()->json(['success' => true, 'message' => 'Item removed from cart successfully']);
        } else {
            return response()->json(['success' => false, 'message' => 'Item not found in cart']);
        }
    }
}
