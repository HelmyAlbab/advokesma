<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class registrasiController extends Controller
{
    public function index(){
        return view('loginregis.registrasi',[
            "title"=>"Registrasi",
            "active"=>"registrasi"
        ]);
    }
    public function store(Request $request){
        $validateData = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:3|max:255|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]);
        $validateData['password'] = bcrypt($validateData['password']);
        User::create($validateData);
        // $request->session()->flash('success','Registration successfull! Please login');
        return redirect('/login')->with('success','Registration successfull! Please login');
    }
}
