<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{
    public function input()
    {
        return view('input');
    }

    public function edit($id)
    {
        $barang = Barang::findOrFail($id);
        return view('edit', compact('barang'));
    }

    public function view_data(){
        $barang = Barang::get();
        return view('list_barang',['barang' => $barang]);
    }

    public function proses(Request $request)
    {

        $this->validate($request,[
           'nama_barang' => 'required',
           'varian_barang' => 'required',
           
           'harga_beli' => 'required|numeric',
           'tanggal_kadaluarsa' => 'required|date',
           'tanggal_produksi' => 'required|date',
           'no_barang' => 'required|numeric'
        ]);

        $barang = Barang::create([
            'nama_barang' => $request->nama_barang,
            'varian_barang' => $request->varian_barang,
            
            'harga_beli' => $request->harga_beli,
            'tanggal_kadaluarsa' => $request->tanggal_kadaluarsa,
            'tanggal_produksi' => $request->tanggal_produksi,
            'no_barang' => $request->no_barang,
        ]);

        $barang = Barang::get();
        return view('list_barang',['barang' => $barang]);
    }

    public function editProses($id, Request $request)
    {

//        dd($request->all());

        $this->validate($request,[
            'nama_barang' => 'required',
            'varian_barang' => 'required',
           
            'harga_beli' => 'required|numeric',
            'tanggal_kadaluarsa' => 'required|date',
            'tanggal_produksi' => 'required|date',
            'no_barang' => 'required|numeric'
        ]);

        $barang = Barang::findOrFail($id)->update([
            'nama_barang' => $request->nama_barang,
            'varian_barang' => $request->varian_barang,
            
            'harga_beli' => $request->harga_beli,
            'tanggal_kadaluarsa' => $request->tanggal_kadaluarsa,
            'tanggal_produksi' => $request->tanggal_produksi,
            'no_barang' => $request->no_barang,
        ]);

        return redirect('/view_data');

    }

    public function deleteProses($id)
    {
        Barang::findOrFail($id)->delete();

        return redirect('/view_data');
    }

}
