<?php

namespace App\Http\Controllers;

use App\Models\Soal;
use Illuminate\Http\Request;

class SoalController extends Controller
{
    public function index()
    {
        $data = Soal::all();
        return view('datasoal',compact('data'));
    }

    public function tambahsoal()
    {
        return view('tambahsoal');
    }

    public function insertdata(Request $request)
    {
        Soal::create($request->all());
        return redirect()->route('soal');
    }
}
