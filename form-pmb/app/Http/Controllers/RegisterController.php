<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    public function create(){
        return view('auth.register');
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
        return redirect('/login');
    }

}
