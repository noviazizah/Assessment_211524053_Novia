<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\HomeModel;
use App\Models\AboutModel;
use App\Models\Education;
use App\Models\PortfolioModel;
use App\Models\SkillModel;
use Str;

class DashboardController extends Controller
{
    public function dashboard(Request $request) 
    {
        $data['notaRecord'] = NotaModel::all();
        return view('backend.dashboard.list');
    }




    public function admin_home_delete($id)
    {
        HomeModel::where('id', $id)->delete(); 
        return redirect()->to('admin/home')->with('success', 'Berhasil melakukan delete data'); 
    }




}