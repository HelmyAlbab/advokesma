<?php

namespace App\Http\Controllers;

use App\Models\Aspirasi;
use App\Models\Topnew;
use Illuminate\Http\Request;

class topnewDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.topnews.index',[
            "topnews"=>Topnew::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.topnews.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|min:5|max:255',
            'excerpt' => 'required|min:10',
            'pj' => 'required|min:5',
            'body' => 'required',
        ]);
        // dd('berhasil');
        Topnew::create($request->all());
        return redirect('/dashboard/topnews')->with('berhasil','Informasi Berhasil di Tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\topnew  $topnew
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\topnew  $topnew
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $topnew = Topnew::findOrFail($id);
        return view('dashboard.topnews.edit',compact('topnew'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\topnew  $topnew
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'judul' => 'required|min:5|max:255',
            'excerpt' => 'required|min:10',
            'pj' => 'required|min:5',
            'body' => 'required',
        ];
        $topnew = Topnew::findOrFail($id);
        $topnew->judul = $request->judul;
        $topnew->excerpt = $request->excerpt;
        $topnew->pj = $request->pj;
        $topnew->body = $request->body;
        $topnew->save();
        return redirect('/dashboard/topnews')->with('berhasil','Informasi Berhasil di Edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\topnew  $topnew
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $topnew = topnew::findOrFail($id);
        $topnew->delete();
        return redirect('/dashboard/topnews')->with('hapus','Informasi Berhasil di Hapus');
    }
}
