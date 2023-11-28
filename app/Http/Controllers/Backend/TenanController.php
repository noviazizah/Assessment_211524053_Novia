<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Str;

use App\Models\TenanModel;

class TenanController extends Controller
{


    public function admin_tenan(Request $request) 
    {
        $data['tenanRecord'] = TenanModel::all();
        return view('backend.tenan.list', $data);
    }

    public function tenan_add(Request $request) 
    {
       return view('backend.tenan.add');
    }

    public function tenan_add_post(Request $request) 
    {
       //dd($request->all());
       $insertRecord = new tenanModel;

       $insertRecord->kode_tenan = trim($request->kode_tenan);
       $insertRecord->nama_tenan = trim($request->nama_tenan);
       $insertRecord->nomor_hp = trim($request->nomor_hp);
       
       $insertRecord->save();

    return redirect('admin/tenan/')->with('success', "Halaman Kasir Berhasil Tersimpan");

    }
    public function admin_tenan_edit($id, Request $request)
    {
        $data['tenanRecord'] = TenanModel::find($id);
        return view('backend.tenan.edit', $data);
    }
    

    public function admin_tenan_edit_post($id, Request $request)
    {
        // dd($request->all());
        $updateRecord = TenanModel::find($id);

        $updateRecord->kode_tenan = trim($request->kode_tenan);
        $updateRecord->nama_tenan = trim($request->nama_tenan);
        $updateRecord->nomor_hp = trim($request->nomor_hp);

        $updateRecord->save();

        return redirect('admin/tenan/')->with('success', "Halaman Kasir Berhasil Diperbarui");
 
    }

    public function admin_tenan_delete($id)
    {
        TenanModel::where('id', $id)->delete(); 
        return redirect()->to('admin/tenan')->with('success', 'Data Kasir Berhasil Dihapus'); 
    }
}