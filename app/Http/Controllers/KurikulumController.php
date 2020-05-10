<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\Importkurikulum;
use App\Kurikulum;
use Maatwebsite\Excel\Facades\Excel;

class KurikulumController extends Controller
{
    public function index()
    {
        return view('kurikulum.index', [
            'data' => Kurikulum::cursor()
        ]);
    }
    public function importKurikulum(Request $req)
    {
        Excel::import(new Importkurikulum, request()->file('file'));
        return back();
    }
}
