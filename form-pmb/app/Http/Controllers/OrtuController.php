<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrtuController extends Controller
{
    public function create(){
        $user = User::all();
    
        return view('form.ortu',compact('user'));
    }
    
    public function store(Request $request){
        $request->validate([
            'nama_ayah'=>'required',
            'umur_ayah'=>'required',
            'pendidikan_ayah'=>'required',
            'status_ayah'=>'required',
            'pekerjaan_ayah'=>'required',
            'penghasilan_ayah'=>'required',
            'no_wa_ayah'=>'required|unique',
            'alamat_ayah'=>'required',
            'nama_ibu'=>'required',
            'umur_ibu'=>'required',
            'pendidikan_ibu'=>'required|min:16|max:16',
            'status_ibu'=>'required|email',
            'pekerjaan_ibu'=>'required',
            'penghasilan_ayah'=>'required',
            'no_wa_ayah'=>'required|max:13',
            'alamat_ayah'=>'required',
            'user_id'=>'unique'
        ]);
        
    $existingOrtu = Ortu::where('user_id', auth()->id())->first();

    if ($existingOrtu) {
        return redirect()->back()->with('error', 'Anda sudah memiliki data Ortu.');
    }
    // Format no_register

        $query = Ortu::create([
            'nama_ayah'=>$request['nama_ayah'],
            'umur_ayah'=>$request['umur_ayah'],
            'pendidikan_ayah'=>$request['pendidikan_ayah'],
            'status_ayah'=>$request['status_ayah'],
            'pekerjaan_ayah'=>$request['pekerjaan_ayah'],
            'penghasilan_ayah'=>$request['penghasilan_ayah'],
            'no_wa_ayah'=>$request['no_wa_ayah'],
            'alamat_ayah'=>$request['alamat_ayah'],
            'nama_ibu'=>$request['nama_ibu'],
            'pendidikan_ibu'=>$request['pendidikan_ibu'],
            'umur_ibu'=>$request['umur_ibu'],
            'status_ibu'=>$request['status_ibu'],
            'pekerjaan_ibu'=>$request['pekerjaan_ibu'],
            'penghasilan_ayah'=>$request['penghasilan_ayah'],
            'alamat_ayah'=>$request['alamat_ayah'],
            'user_id'=>auth()->id()

        ]);
        return redirect('/');
    }
    public function mine(Request $request)
    {
            
        $Ortu = Ortu::query()
            ->with('user:id,name')
            ->where('user_id',$request->user()->id)
            ->first();
        return view('mine.ortu',[
            'ortu' => $ortu, 'jurusan'=>$jurusan,'jurusan2'=>$jurusan2
        ]);
    }
    public function update(Request $request, $id)
    {
        $ortu = Ortu::find($id);
        
        if ($ortu) {
            $ortu->update($request->all()); 
            return redirect()->back()->with('success', 'Data Ortu berhasil diperbarui.');

        }
        
        return redirect()->back()->with('error', 'Data Ortu tidak ditemukan.');
    }
    public function list(){

    }

    public function index()
    {

    }


    public function show(Ortu $store)
    {

    }





    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Store $store)
    {
        //
    }


}
