<?php

namespace App\Http\Controllers;

use App\Models\Wali;
use Illuminate\Http\Request;
use App\Models\Ortu;
use App\Models\User;

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
            'no_wa_ayah'=>'required',
            'alamat_ayah'=>'required',
            'nama_ibu'=>'required',
            'umur_ibu'=>'required',
            'pendidikan_ibu'=>'required',
            'status_ibu'=>'required',
            'pekerjaan_ibu'=>'required',
            'penghasilan_ibu'=>'required',
            'no_wa_ibu'=>'required',
            'alamat_ibu'=>'required',
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
            'penghasilan_ibu'=>$request['penghasilan_ayah'],
            'alamat_ibu'=>$request['alamat_ayah'],
            'no_wa_ibu'=>$request['no_wa_ibu'],
            'user_id'=>auth()->id()
        ]);
        return redirect('/ortu/mine');
    }
    public function mine(Request $request)
    {
        $wali = Wali::where('user_id', $request->user()->id)->first();

        $ortu = Ortu::query()
            ->with('user:id,name')
            ->where('user_id',$request->user()->id)
            ->first();
        return view('mine.ortu',[
            'ortu' => $ortu, 'wali' => $wali
        ]);
    }
    public function update(Request $request, $id)
    {
        $ortu = Ortu::find($id);
        // $wali = Wali::find($id);

        if ($ortu) {
            $ortu->update($request->all()); 
            return redirect()->back()->with('success', 'Data Ortu berhasil diperbarui.');

        }
        // if ($wali) {
        //     $wali->update($request->all()); 
        //     return redirect()->back()->with('success', 'Data Wali berhasil diperbarui.');

        // }
        
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
