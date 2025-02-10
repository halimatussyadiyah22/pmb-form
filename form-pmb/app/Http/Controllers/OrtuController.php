<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ortu;
use App\Models\Wali;
use App\Models\User;

class OrtuController extends Controller
{
    public function create(){
        $user = User::all();
        return view('form.ortu', compact('user'));
    }

    public function store(Request $request)
{
    $request->validate([
        'nama_ayah' => 'required',
        'umur_ayah' => 'required|integer',
        'pendidikan_ayah' => 'required',
        'status_ayah' => 'required',
        'pekerjaan_ayah' => 'required',
        'penghasilan_ayah' => 'required|numeric',
        'no_wa_ayah' => 'required|numeric',
        'alamat_ayah' => 'required',
        'nama_ibu' => 'required',
        'umur_ibu' => 'required|integer',
        'pendidikan_ibu' => 'required',
        'status_ibu' => 'required',
        'pekerjaan_ibu' => 'required',
        'penghasilan_ibu' => 'required|numeric',
        'no_wa_ibu' => 'required|numeric',
        'alamat_ibu' => 'required',
        'wali_option' => 'required', // Tambahkan ini
        'nama_wali' => 'required_if:wali_option,yes',
        'alamat_wali' => 'required_if:wali_option,yes',
        'pekerjaan' => 'required_if:wali_option,yes',
        'no_wa' => 'required_if:wali_option,yes|numeric',
    ]);

    // Cek apakah data Ortu sudah ada
    $existingOrtu = Ortu::where('user_id', auth()->id())->first();

    if ($existingOrtu) {
        return redirect()->back()->with('error', 'Anda sudah memiliki data Ortu.');
    }

    // Simpan Data Ortu
    $ortu = Ortu::create([
        'nama_ayah' => $request->nama_ayah,
        'umur_ayah' => $request->umur_ayah,
        'pendidikan_ayah' => $request->pendidikan_ayah,
        'status_ayah' => $request->status_ayah,
        'pekerjaan_ayah' => $request->pekerjaan_ayah,
        'penghasilan_ayah' => $request->penghasilan_ayah,
        'no_wa_ayah' => $request->no_wa_ayah,
        'alamat_ayah' => $request->alamat_ayah,
        'nama_ibu' => $request->nama_ibu,
        'umur_ibu' => $request->umur_ibu,
        'pendidikan_ibu' => $request->pendidikan_ibu,
        'status_ibu' => $request->status_ibu,
        'pekerjaan_ibu' => $request->pekerjaan_ibu,
        'penghasilan_ibu' => $request->penghasilan_ibu,
        'no_wa_ibu' => $request->no_wa_ibu,
        'alamat_ibu' => $request->alamat_ibu,
        'user_id' => auth()->id()
    ]);

    // Jika user mengisi data wali, simpan ke tabel wali
    if ($request->wali_option === 'yes') {
        Wali::create([
            'nama_wali' => $request->nama_wali,
            'alamat_wali' => $request->alamat_wali,
            'pekerjaan' => $request->pekerjaan,
            'no_wa' => $request->no_wa,
            'user_id' => auth()->id()
        ]);
    }

    return redirect('/ortu/mine')->with('success', 'Data berhasil disimpan.');
}

    public function mine(Request $request)
    {
        $wali = Wali::where('user_id', $request->user()->id)->first();
        $ortu = Ortu::with('user:id,name')->where('user_id', $request->user()->id)->first();

        return view('mine.ortu', [
            'ortu' => $ortu, 'wali' => $wali
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

    public function list() {}

    public function index() {}

    public function show(Ortu $store) {}
}
