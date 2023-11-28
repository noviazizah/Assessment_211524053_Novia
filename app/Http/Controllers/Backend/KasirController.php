<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Str;

use App\Models\KasirModel;

class KasirController extends Controller
{

    public function admin_kasir(Request $request) 
    {
        $data['kasirRecord'] = KasirModel::all();
        return view('backend.kasir.list', $data);
    }

    public function kasir_add(Request $request) 
    {
       return view('backend.kasir.add');
    }

    public function kasir_add_post(Request $request) 
    {
       //dd($request->all());
       $insertRecord = new kasirModel;

       $insertRecord->kode_kasir = trim($request->kode_kasir);
       $insertRecord->nama_kasir = trim($request->nama_kasir);
       $insertRecord->nomor_hp = trim($request->nomor_hp);
       
       $insertRecord->save();

    return redirect('admin/kasir/')->with('success', "Halaman Kasir Berhasil Tersimpan");

    }
    public function admin_kasir_edit($id, Request $request)
    {
        $data['kasirRecord'] = KasirModel::find($id);
        return view('backend.kasir.edit', $data);
    }
    

    public function admin_kasir_edit_post($id, Request $request)
    {
        // dd($request->all());
        $updateRecord = KasirModel::find($id);

        $updateRecord->kode_kasir = trim($request->kode_kasir);
        $updateRecord->nama_kasir = trim($request->nama_kasir);
        $updateRecord->nomor_hp = trim($request->nomor_hp);

        $updateRecord->save();

        return redirect('admin/kasir/')->with('success', "Halaman Kasir Berhasil Diperbarui");
 
    }

    public function admin_kasir_delete($id)
    {
        KasirModel::where('id', $id)->delete(); 
        return redirect()->to('admin/kasir')->with('success', 'Data Kasir Berhasil Dihapus'); 
    }
}