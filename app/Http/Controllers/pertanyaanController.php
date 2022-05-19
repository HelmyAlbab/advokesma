<?php

namespace App\Http\Controllers;

use App\Models\Pertanyaan;
use Illuminate\Http\Request;

class pertanyaanController extends Controller
{
    public function index()
    {
        return view('components.pertanyaan',[
            "title"=>"Pertanyaan",
            "active"=>"pertanyaan"
        ]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|min:5|max:255',
            'nim' => 'required|min:5|max:255',
            'prodi' => 'required|min:10',
            'pertanyaan' => 'required|min:20'
        ]);
        Pertanyaan::create($request->all());
        return redirect('/pertanyaan')->with('berhasil','Pertanyaan berhasil ditambahkan!');
    }
}
