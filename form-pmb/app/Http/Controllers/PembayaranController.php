<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PembayaranController extends Controller
{
    public function create(){
        $user = User::all();
    
        return view('form.pembayaran',compact('user'));
    }
    
    public function store(Request $request){
        $request->validate([
            'bukti'=>'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);
        
    $existingpembayaran = Pembayaran::where('user_id', auth()->id())->first();

    if ($existingpembayaran) {
        return redirect()->back()->with('error', 'Anda sudah memiliki data pembayaran.');
    }
    $bukti = $request->file('bukti');
    $bukti->storeAs('public/pembayaran/', $bukti->hashName());
    
        $query = Pembayaran::create([
            'bukti'=>$bukti->hashName(),
            'user_id'=>auth()->id()
        ]);
        return redirect('/pembayaran/mine');
    }
    public function mine(Request $request)
    {
            
        $pembayaran = Pembayaran::query()
            ->with('user:id,name')
            ->where('user_id',$request->user()->id)
            ->first();

        return view('mine.pembayaran',[
            'pembayaran' => $pembayaran
        ]);
    }
    public function update(Request $request, $id) {
        $request->validate([
            'bukti' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);
    
        $pembayaran = Pembayaran::findOrFail($id);
        if (!$pembayaran) {
            return redirect()->back()->with('error', 'pembayaran tidak ditemukan. Silakan unggah pembayaran terlebih dahulu.');
        }
        // Update bukti jika ada file baru
        if ($request->hasFile('bukti')) {
            // Hapus file lama jika ada
            Storage::delete('public/pembayaaran/' . $pembayaran->bukti);
            $bukti = $request->file('bukti');
            $bukti->storeAs('public/pembayaran/', $bukti->hashName());
            $pembayaran->bukti = $bukti->hashName();
        }
    
        // Simpan perubahan
        $pembayaran->save();
    
        return redirect()->back()->with('success', 'pembayaran berhasil diperbarui.');
    }
    public function list(){

    }

    public function index()
    {

    }


    public function show(Pembayaran $store)
    {

    }
}
