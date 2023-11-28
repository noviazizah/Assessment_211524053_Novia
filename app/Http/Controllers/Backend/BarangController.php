<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Str;

use App\Models\BarangModel;

class BarangController extends Controller
{

    public function admin_barang(Request $request) 
    {
        $data['barangRecord']= BarangModel::all();
        return view('backend.barang.list',$data);
    }

    public function barang_add(Request $request) 
    {
       return view('backend.barang.add');
    }

    public function barang_add_post(Request $request) 
    {
       //dd($request->all());
       $insertRecord = new BarangModel;

       $insertRecord->kode_barang = trim($request->kode_barang);
       $insertRecord->nama_barang = trim($request->nama_barang);
       $insertRecord->satuan = trim($request->satuan);
       $insertRecord->harga_satuan = trim($request->harga_satuan);
       $insertRecord->stok = trim($request->stok);

       
       
       $insertRecord->save();

    return redirect('admin/barang/')->with('success', "Halaman Barang Berhasil Tersimpan");

    }
    public function admin_barang_edit($id, Request $request)
    {
        $data['barangRecord'] = BarangModel::find($id);
        return view('backend.barang.edit', $data);
    }
    

    public function admin_barang_edit_post($id, Request $request)
    {
        // dd($request->all());
        $updateRecord = BarangModel::find($id);

        $updateRecord->kode_barang = trim($request->kode_barang);
        $updateRecord->nama_barang = trim($request->nama_barang);
        $updateRecord->satuan = trim($request->satuan);
        $updateRecord->harga_satuan = trim($request->harga_satuan);
        $updateRecord->stok = trim($request->stok);
        $updateRecord->save();

        return redirect('admin/barang/')->with('success', "Halaman Barang Berhasil Diperbarui");
 

    }

    public function admin_barang_delete($id)
    {
        BarangModel::where('id', $id)->delete(); 
        return redirect()->to('admin/barang')->with('success', 'Data Barang Berhasil Dihapus'); 
    }
}