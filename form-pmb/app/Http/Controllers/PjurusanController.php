<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use App\Models\Jurusan2;
use App\Models\Pjurusan;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PjurusanController extends Controller
{
    public function create(){
        $jurusanList = Jurusan::all();
        $jurusanList2 = Jurusan2::all();
        $user = User::where('id', auth()->id())->first();
        
        return view('form.pJurusan',compact('jurusanList','jurusanList2','user'));
    }
    
    public function store(Request $request){
        
        $request->validate([
            'jurusan_id'=>'required',
            'jurusan2_id'=>'required'

        ]);
        
    $existingpJurusan = Pjurusan::where('user_id', auth()->id())->first();

    if ($existingpJurusan) {
        return redirect()->back()->with('error', 'Anda sudah memiliki data pJurusan.');
    }
    // Format no_register

        $query = Pjurusan::create([
            'jurusan_id'=>$request['jurusan_id'],
            'jurusan2_id'=>$request['jurusan2_id'],
            'user_id'=>auth()->id()

        ]);
        return redirect('/pJurusan/mine');
    }
    public function mine(Request $request)
    {
        $jurusan = Jurusan::all();
        $jurusan2 = Jurusan2::all();
        $user = User::all();

        $pJurusan = Pjurusan::query()
            ->with('user:id,name,tl,nisn')
            ->where('user_id',$request->user()->id)
            ->first();
        return view('mine.pJurusan',[
            'pJurusan' => $pJurusan, 'jurusan'=>$jurusan,'jurusan2'=>$jurusan2,'user'=>$user
        ]);
    }
    public function update(Request $request, $id)
    {
        $pJurusan = Pjurusan::find($id);
        
        if ($pJurusan) {
            $pJurusan->update($request->all()); 
            return redirect()->back()->with('success', 'Data pJurusan berhasil diperbarui.');

        }
        
        return redirect()->back()->with('error', 'Data pJurusan tidak ditemukan.');
    }
public function list(){

}

public function index()
{

}


public function show(Pjurusan $store)
{

}





/**
 * Remove the specified resource from storage.
 */
public function destroy(Pjurusan $store)
{
    //
}


}
