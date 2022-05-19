<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\topnew;

class homeController extends Controller
{
    public function show($id){
        $topnew = topnew::findOrFail($id);
        return view('components.homeShow', compact('topnew'),[
            "title"=>"Top News",
            "active"=>"home",
        ]);
    }
}
