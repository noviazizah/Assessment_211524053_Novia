<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Str;

use App\Models\NotaModel;

class NotaController extends Controller
{

    public function admin_nota(Request $request) 
    {
        $data['notaRecord'] = NotaModel::all();
        return view('backend.nota.list', $data);
    }

    public function nota_add(Request $request) 
    {
       return view('backend.nota.add');
    }

    public function nota_add_post(Request $request) 
    {
       //dd($request->all());
       $insertRecord = new NotaModel;

       $insertRecord->kode_nota = trim($request->kode_nota);
       $insertRecord->nama_tenan = trim($request->kode_tenan);
       $insertRecord->kode_kasir = trim($request->kode_kasir);
       $insertRecord->jumlah_belanja = trim($request->jumlah_belanja);
       $insertRecord->diskon = trim($request->diskon);
       $insertRecord->total = trim($request->total);
       
       $insertRecord->save();

    return redirect('admin/nota/')->with('success', "Halaman nota Berhasil Tersimpan");

    }
    public function admin_nota_edit($id, Request $request)
    {
        $data['notaRecord'] = NotaModel::find($id);
        return view('backend.nota.edit', $data);
    }
    

    public function admin_nota_edit_post($id, Request $request)
    {
        // dd($request->all());
        $updateRecord = NotaModel::find($id);

        $updateRecord->kode_nota = trim($request->kode_nota);
        $updateRecord->nama_tenan = trim($request->kode_tenan);
        $updateRecord->kode_kasir = trim($request->kode_kasir);
        $updateRecord->jumlah_belanja = trim($request->jumlah_belanja);
        $updateRecord->diskon = trim($request->diskon);
        $updateRecord->total = trim($request->total);
        $updateRecord->save();

        return redirect('admin/nota/')->with('success', "Halaman nota Berhasil Diperbarui");
 
    }

    public function admin_nota_delete($id)
    {
        NotaModel::where('id', $id)->delete(); 
        return redirect()->to('admin/nota')->with('success', 'Data nota Berhasil Dihapus'); 
    }
}