<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\orders;

class orderController extends Controller
{
    public function getJsonOrder(Request $request) {
        $noPesanan = $request->input('no_pesanan');
        $tgl = $request->input('tanggal');
        $namaSupplier = $request->input('nama_supplier');
        $namaProduk = $request->input('nama_product');
        $total = $request->input('total');

        orders::create([
            'no_pesanan' => $noPesanan,
            'tanggal' => $tgl,
            'nm_supplier' => $namaSupplier,
            'nm_produk' => $namaProduk,
            'total' => $total
        ]);

        return response()->json(['success' => true, 'message' => 'Succesfully Save Order']);
    }
}
