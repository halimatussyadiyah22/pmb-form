<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pribadi;
use App\Models\Jurusan;
use App\Models\Jurusan2;

class PribadiController extends Controller
{
    public function create(){
        $jurusanList = Jurusan::all();
        $jurusanList2 = Jurusan2::all();
        return view('form.pribadi',compact('jurusanList','jurusanList2'));
    }
    public function store(Request $request){
        
        $request->validate([
            'nama_lengkap'=>'required',
            'gelombang'=>'required',
            'tempat_lahir'=>'required',
            'jalan_dusun'=>'required',
            'desa_kelurahan'=>'required',
            'rt'=>'required',
            'rw'=>'required',
            'kecamatan'=>'required',
            'kabupaten'=>'required',
            'provinsi'=>'required',
            'agama'=>'required',
            'no_kk'=>'required|min:16|max:16',
            'email'=>'required|email',
            'status'=>'required',
            'golongan_darah'=>'required',
            'no_wa'=>'required|max:13',
            'kewarganegaraan'=>'required',
            'jurusan1_id'=>'required',
            'jurusan2_id'=>'required',
        ]);
        $tahun_akademik = "2425"; 
    $gelombang = str_pad($request->gelombang, 2, '0', STR_PAD_LEFT);
    $bulan = date('m'); // Ambil bulan saat ini

    // Ambil jumlah data sebelumnya untuk mendapatkan no_urut
    $count = Pribadi::whereYear('created_at', date('Y'))
        ->whereMonth('created_at', $bulan)
        ->where('gelombang', $request->gelombang)
        ->count() + 1;

    $no_urut = str_pad($count, 3, '0', STR_PAD_LEFT);

    // Format no_register
    $no_register = "{$tahun_akademik}{$gelombang}{$bulan}{$no_urut}";

        $query = Pribadi::create([
            'nama_lengkap'=>$request['nama_lengkap'],
            'gelombang'=>$request['gelombang'],
            'tempat_lahir'=>$request['tempat_lahir'],
            'jalan_dusun'=>$request['jalan_dusun'],
            'desa_kelurahan'=>$request['desa_kelurahan'],
            'rt'=>$request['rt'],
            'rw'=>$request['rw'],
            'kecamatan'=>$request['kecamatan'],
            'kabupaten'=>$request['kabupaten'],
            'provinsi'=>$request['provinsi'],
            'agama'=>$request['agama'],
            'no_kk'=>$request['no_kk'],
            'email'=>$request['email'],
            'status'=>$request['status'],
            'golongan_darah'=>$request['golongan_darah'],
            'no_wa'=>$request['no_wa'],
            'kewarganegaraan'=>$request['kewarganegaraan'],
            'no_register' => $no_register,
            'jurusan1_id'=>$request['jurusan1_id'],
            'jurusan2_id'=>$request['jurusan2_id'],
        ]);
        return redirect('/');
    }
}
