<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wali;
use App\Models\User;

class WaliController extends Controller
{
    public function create(){
        $user = User::all();
    
        return view('form.wali',compact('user'));
    }
    
    public function store(Request $request){
        $request->validate([
            'nama_wali'=>'required',
            'alamat_wali'=>'required',
            'pekerjaan'=>'required',
            'no_wa'=>'required',
        ]);
        
    $existingWali = Wali::where('user_id', auth()->id())->first();

    if ($existingWali) {
        return redirect()->back()->with('error', 'Anda sudah memiliki data Wali.');
    }
    // Format no_register

        $query = Wali::create([
            'nama_wali'=>$request['nama_wali'],
            'alamat_wali'=>$request['alamat_wali'],
            'pekerjaan'=>$request['pekerjaan'],
            'no_wa'=>$request['no_wa'],
            'user_id'=>auth()->id()
        ]);
        return redirect('/');
    }
    public function mine(Request $request)
    {
            
        $wali = Wali::query()
            ->with('user:id,name')
            ->where('user_id',$request->user()->id)
            ->first();
        return view('mine.Wali',[
            'wali' => $wali
        ]);
    }
    public function update(Request $request, $id)
    {
        $wali = Wali::find($id);
        
        if ($wali) {
            $wali->update($request->all()); 
            return redirect()->back()->with('success', 'Data Wali berhasil diperbarui.');

        }
        
        return redirect()->back()->with('error', 'Data Wali tidak ditemukan.');
    }
    public function list(){

    }

    public function index()
    {

    }


    public function show(Wali $store)
    {

    }

}
