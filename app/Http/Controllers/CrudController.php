<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class CrudController extends Controller
{
    //tampilkan data
    public function Crud()
    {
        $produk = DB::table('produk')->paginate(3);
        return view('index', ['produk' => $produk]);
    }
    // tambahdata
    public function TambahData()
    {
        return view('tambahData');
    }
    // simpan data
    public function simpan(Request $request)
    {
        // dd($request->all());
        // DB::insert('insert into data_barang (kode_barang, nama_barang) values (?, ?)', [$request->kode_barang, $request->nama_barang]);
        $this->_validation($request);
        DB::table('produk')->insert(
            ['nama_produk' => $request->nama_produk, 'keterangan' => $request->keterangan, 'harga' => $request->harga, 'jumlah' => $request->jumlah],
            // ['email' => 'dayle@example.com', 'votes' => 0],
        );
        return redirect()->route('crud')->with('success', 'Data Berhasil di tambahkan!');
    }
    private function _validation(Request $request)
    {
        $validation = $request->validate(
            [
                'nama_produk' => 'required|max:20',
                'keterangan' => 'required',
                'harga' => 'required',
                'jumlah' => 'required'
            ],
            [
                'nama_produk.required' => 'data tidak boleh kosong!',
                'keterangan.required' => 'data tidak boleh kosong!',
                'harga.required' => 'data tidak boleh kosong!',
                'jumlah.required' => 'data tidak boleh kosong!'
            ]
        );
    }
    //delete data
    public function delete($id)
    {
        DB::table('produk')->where('id', $id)->delete();
        return redirect()->back();
    }

    // edit data

    public function edit($id)
    {
        $produk = DB::table('produk')->where('id', $id)->first();
        return view('edit-data', ['produk' => $produk]);
    }

    // update data
    public function update(Request $request, $id)
    {
        $this->_validation($request);
        DB::table('produk')->where('id', $id)->update([
            'nama_produk' => $request->nama_produk,
            'keterangan' => $request->keterangan,
            'harga' => $request->harga,
            'jumlah' => $request->jumlah
        ]);
        return redirect()->route('crud')->with('success', 'Data Berhasil di edit!');
    }
}
