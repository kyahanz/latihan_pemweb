<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function input()
    {
        return view('input');
    }

    public function proses(Request $request)
    {
        $this->validate($request,[
           'kode_barang' => 'required',
           'nama_barang' => 'required',
           'jenis_varian' => 'required',
           'qty' => 'required|numeric',
           'harga_jual' => 'required|numeric',
        ]);

        // Hitung total harga jual
        $totalHargaJual = $request->qty * $request->harga_jual;

        // Hitung potongan harga
        if ($totalHargaJual >= 500000) {
            $potonganHarga = $totalHargaJual * 0.5;
        } elseif ($totalHargaJual >= 200000) {
            $potonganHarga = $totalHargaJual * 0.2;
        } elseif ($totalHargaJual >= 100000) {
            $potonganHarga = $totalHargaJual * 0.1;
        } else {
            $potonganHarga = 0;
        }

        // Hitung harga setelah diskon
        $hargaSetelahDiskon = $totalHargaJual - $potonganHarga;
 
        return view('proses',['data' => $request,
                    'totalHargaJual' => $totalHargaJual,
                    'potonganHarga' => $potonganHarga,
                    'hargaSetelahDiskon' => $hargaSetelahDiskon]);
    }
}
