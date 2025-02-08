@extends('master')
@section('title')
Formulir Data Pribadi
@endsection
@section('content')
{{-- <div class="containerjustify-content-center align-items-center" style="height: 100vh;"> --}}
    {{-- <div class="mt-7 mb-7 col-9 bg-light p-4 rounded-end shadow"> --}}
        {{-- <div class="d-flex justify-content-center align-items-center mb-3">
            <img class="mr-3" src="{{ asset('storage/internal/stti.png') }}" alt="logo" style="width: 50px; height: auto;">
            <h1 style="color: #008DD4">STTI</h1>
        </div>
        <div class="d-flex justify-content-center align-items-center mb-3">
            <h3  style="color: #315b75">Formulir Data Pribadi</h3>
        </div> --}}
        
        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        
        <form action="/pribadi" method="POST">
            @csrf

            <div class="mb-3">
                <label class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" placeholder="Masukkan Nama Lengkap">
            </div>

            <div class="mb-3">
                <label class="form-label">Gelombang</label>
                <select class="form-select">
                    <option selected disabled>Pilih Gelombang</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                </select>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label">Tempat Lahir</label>
                    <input type="text" class="form-control" placeholder="Masukkan Tempat Lahir">
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">Tanggal Lahir</label>
                    <input type="date" class="form-control">
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Alamat Lengkap</label>
                <input type="text" class="form-control" placeholder="Jalan / Dusun">
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label">RT</label>
                    <input type="text" class="form-control" placeholder="RT">
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">RW</label>
                    <input type="text" class="form-control" placeholder="RW">
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label">Kecamatan</label>
                    <input type="text" class="form-control" placeholder="Masukkan Kecamatan">
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">Kabupaten</label>
                    <input type="text" class="form-control" placeholder="Masukkan Kabupaten">
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Provinsi</label>
                <input type="text" class="form-control" placeholder="Masukkan Provinsi">
            </div>

            <div class="mb-3">
                <label class="form-label">Nomor Kartu Keluarga (KK)</label>
                <input type="text" class="form-control" placeholder="Masukkan Nomor KK" minlength="16" maxlength="16">
            </div>

            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" placeholder="Masukkan Email">
            </div>

            <div class="mb-3">
                <label class="form-label">Golongan Darah</label>
                <select class="form-select">
                    <option selected disabled>Pilih Golongan Darah</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="AB">AB</option>
                    <option value="O">O</option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Nomor WhatsApp</label>
                <input type="text" class="form-control" placeholder="Masukkan Nomor WhatsApp" maxlength="13">
            </div>

            <div class="mb-3">
                <label class="form-label">Kewarganegaraan</label>
                <input type="text" class="form-control" placeholder="Masukkan Kewarganegaraan">
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label">Jurusan Pilihan 1</label>
                    <select class="form-select">
                        <option selected disabled>Pilih Jurusan</option>
                        <option value="1">Teknik Informatika</option>
                        <option value="2">Sistem Informasi</option>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">Jurusan Pilihan 2</label>
                    <select class="form-select">
                        <option selected disabled>Pilih Jurusan</option>
                        <option value="1">Teknik Industri</option>
                        <option value="2">Teknik Elektro</option>
                    </select>
                </div>
            </div>
            <div class="row justify-content-end">
                <div class="col-md-5">
                    <button type="submit" class="btn btn-primary w-100">Next</button>
                </div>
            </div>
            
        </form>

{{-- </div> --}}
{{-- </div> --}}

@endsection