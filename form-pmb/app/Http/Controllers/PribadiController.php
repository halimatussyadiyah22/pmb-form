<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PribadiController extends Controller
{
    public function create(){
        return view('form.pribadi');
    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'nisn' => 'required|min:10|max:10|unique:users',
            'tl'=>'required|date'
        ]);
        $query = User::create([
            "name" => $request["name"],
            "nisn" => $request["nisn"],
            "tl"=>$request["tl"]
        ]);
        return redirect('/');
    }
}
