<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Sekolah;

use Illuminate\Http\Request;

class SekolahController extends Controller
{
    public function create(){
        $user = User::all();
    
        return view('form.sekolah',compact('user'));
    }
    
    public function store(Request $request){
        $request->validate([
           
            'nama_sekolah'=>'required',
            'jurusan'=>'required',
            'alamat_sekolah'=>'required',
            'tahun_lulus'=>'required',
            'no_ijazah'=>'required',

        ]);
        
    $existingsekolah = Sekolah::where('user_id', auth()->id())->first();

    if ($existingsekolah) {
        return redirect()->back()->with('error', 'Anda sudah memiliki data sekolah.');
    }
    // Format no_register

        $query = Sekolah::create([
            'nama_sekolah'=>$request['nama_sekolah'],
            'jurusan'=>$request['jurusan'],
            'alamat_sekolah'=>$request['alamat_sekolah'],
            'tahun_lulus'=>$request['tahun_lulus'],
            'no_ijazah'=>$request['no_ijazah'],
            'user_id'=>auth()->id()
        ]);
        return redirect('/sekolah/mine');
    }
    public function mine(Request $request)
    {
            
        $sekolah = Sekolah::query()
            ->with('user:id,name')
            ->where('user_id',$request->user()->id)
            ->first();
        return view('mine.sekolah',[
            'sekolah' => $sekolah
        ]);
    }
    public function update(Request $request, $id)
    {
        $sekolah = Sekolah::find($id);
        
        if ($sekolah) {
            $sekolah->update($request->all()); 
            return redirect()->back()->with('success', 'Data sekolah berhasil diperbarui.');

        }
        
        return redirect()->back()->with('error', 'Data sekolah tidak ditemukan.');
    }
    public function list(){

    }

    public function index()
    {

    }


    public function show(Sekolah $store)
    {

    }
}
