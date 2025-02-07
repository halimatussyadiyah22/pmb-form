<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Dokumen;
use Illuminate\Support\Facades\Storage;

class DokumenController extends Controller
{
    public function create(){
        $user = User::all();
    
        return view('form.dokumen',compact('user'));
    }
    
    public function store(Request $request){
        $request->validate([
            'pas_foto'=>'required',
            'ktp'=>'required',
            'kk'=>'required',
            'ijazah'=>'required',
            'transkip_nilai'=>'required',


        ]);
        
    $existingdokumen = Dokumen::where('user_id', auth()->id())->first();

    if ($existingdokumen) {
        return redirect()->back()->with('error', 'Anda sudah memiliki data dokumen.');
    }
    $pas_foto = $request->file('pas_foto');
    $pas_foto->storeAs('public/pas_foto/', $pas_foto->hashName());
    $ktp = $request->file('ktp');
    $ktp->storeAs('public/ktp/', $ktp->hashName());
    $kk = $request->file('kk');
    $kk->storeAs('public/kk/', $kk->hashName());
    $ijazah = $request->file('ijazah');
    $ijazah->storeAs('public/ijazah/', $ijazah->hashName());
    $transkip_nilai = $request->file('transkip_nilai');
    $transkip_nilai->storeAs('public/transkip_nilai/', $transkip_nilai->hashName());
        $query = Dokumen::create([
            'pas_foto'=>$pas_foto->hashName(),
            'ktp'=>$ktp->hashName(),
            'kk'=>$kk->hashName(),
            'ijazah'=>$ijazah->hashName(),
            'transkip_nilai'=>$transkip_nilai->hashName(),
            'user_id'=>auth()->id()
        ]);
        return redirect('/');
    }
    public function mine(Request $request)
    {
            
        $dokumen = Dokumen::query()
            ->with('user:id,name')
            ->where('user_id',$request->user()->id)
            ->first();

        return view('mine.dokumen',[
            'dokumen' => $dokumen
        ]);
    }
    public function update(Request $request, $id) {
        $request->validate([
            'pas_foto' => 'nullable|file',
            'ktp' => 'nullable|file',
            'kk' => 'nullable|file',
            'ijazah' => 'nullable|file',
            'transkip_nilai' => 'nullable|file',
        ]);
    
        $dokumen = Dokumen::findOrFail($id);
        if (!$dokumen) {
            return redirect()->back()->with('error', 'Dokumen tidak ditemukan. Silakan unggah dokumen terlebih dahulu.');
        }
        // Update pas_foto jika ada file baru
        if ($request->hasFile('pas_foto')) {
            // Hapus file lama jika ada
            Storage::delete('public/pas_foto/' . $dokumen->pas_foto);
            $pas_foto = $request->file('pas_foto');
            $pas_foto->storeAs('public/pas_foto/', $pas_foto->hashName());
            $dokumen->pas_foto = $pas_foto->hashName();
        }
    
        // Update ktp jika ada file baru
        if ($request->hasFile('ktp')) {
            Storage::delete('public/ktp/' . $dokumen->ktp);
            $ktp = $request->file('ktp');
            $ktp->storeAs('public/ktp/', $ktp->hashName());
            $dokumen->ktp = $ktp->hashName();
        }
    
        // Update kk jika ada file baru
        if ($request->hasFile('kk')) {
            Storage::delete('public/kk/' . $dokumen->kk);
            $kk = $request->file('kk');
            $kk->storeAs('public/kk/', $kk->hashName());
            $dokumen->kk = $kk->hashName();
        }
    
        // Update ijazah jika ada file baru
        if ($request->hasFile('ijazah')) {
            Storage::delete('public/ijazah/' . $dokumen->ijazah);
            $ijazah = $request->file('ijazah');
            $ijazah->storeAs('public/ijazah/', $ijazah->hashName());
            $dokumen->ijazah = $ijazah->hashName();
        }
    
        // Update transkip_nilai jika ada file baru
        if ($request->hasFile('transkip_nilai')) {
            Storage::delete('public/transkip_nilai/' . $dokumen->transkip_nilai);
            $transkip_nilai = $request->file('transkip_nilai');
            $transkip_nilai->storeAs('public/transkip_nilai/', $transkip_nilai->hashName());
            $dokumen->transkip_nilai = $transkip_nilai->hashName();
        }
    
        // Simpan perubahan
        $dokumen->save();
    
        return redirect()->back()->with('success', 'Dokumen berhasil diperbarui.');
    }
    public function list(){

    }

    public function index()
    {

    }


    public function show(Dokumen $store)
    {

    }
}
