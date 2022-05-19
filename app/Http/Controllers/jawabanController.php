<?php

namespace App\Http\Controllers;

use App\Models\Jawaban;
use App\Models\Pertanyaan;
use Illuminate\Http\Request;

class jawabanController extends Controller
{
    public function index()
    {
        return view('dashboard.jawaban.index',[
            'pertanyaans'=>Pertanyaan::all()
        ]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'jawaban' => 'required|min:5|max:255'
        ]);
        Jawaban::create($request->all());
        return redirect('/dashboard/jawaban')->with('berhasil','Jawaban berhasil ditambahkan!');
    }
}
