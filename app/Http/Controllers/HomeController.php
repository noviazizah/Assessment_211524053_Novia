<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeModel;
use App\Models\AboutModel;
use App\Models\BarangModel;
use App\Models\Education;
use App\Models\SkillModel;
use App\Models\PortfolioModel;


class HomeController extends Controller
{
    public function index ()
    {
        $data['homeRecord'] = HomeModel::all(); 
        $data['aboutRecord'] = AboutModel::all();
        $data['portfolioRecord'] = PortfolioModel::get();
        $data['barangRecord']= BarangModel::all();
        $data['skillRecord']= SkillModel::all();
        $data['educationRecord']= Education::all();

        return view('index', $data);
    }


    public function components ()
    {
        return view('components');
    }
}
