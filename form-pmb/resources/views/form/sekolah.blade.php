@extends('master')
@section('title')
Formulir Data ortu
@endsection
@section('content')
{{-- <div class="containerjustify-content-center align-items-center" style="height: 100vh;"> --}}
    {{-- <div class="mt-7 mb-7 col-9 bg-light p-4 rounded-end shadow"> --}}
        {{-- <div class="d-flex justify-content-center align-items-center mb-3">
            <img class="mr-3" src="{{ asset('storage/internal/stti.png') }}" alt="logo" style="width: 50px; height: auto;">
            <h1 style="color: #008DD4">STTI</h1>
        </div>
        <div class="d-flex justify-content-center align-items-center mb-3">
            <h3  style="color: #315b75">Formulir Data ortu</h3>
        </div> --}}
        
        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        
        <form action="/sekolah" method="POST">
            @csrf

            <div class="mb-4">
                <label>Nama Sekolah :</label><br>
                <input type="text" name="nama_sekolah" class="form-control @error('nama_sekolah') is-invalid @enderror" placeholder="Nama Sekolah" value="{{ old('nama_sekolah') }}">
                @error('nama_sekolah')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label>Jurusan :</label><br>
                <input type="text" name="jurusan" class="form-control @error('jurusan') is-invalid @enderror" placeholder="Jurusan" value="{{ old('jurusan') }}">
                @error('jurusan')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label>Alamat Sekolah :</label><br>
                <input type="text" name="alamat_sekolah" class="form-control @error('alamat_sekolah') is-invalid @enderror" placeholder="alamat_sekolah" value="{{ old('alamat_sekolah') }}">
                @error('alamat_sekolah')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="mb-4">
                <label>Tahun Lulus :</label><br>
                <input type="number" name="tahun_lulus" class="form-control @error('tahun_lulus') is-invalid @enderror" placeholder="Tahun Lulus" value="{{ old('tahun_lulus') }}">
                @error('tahun_lulus')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label>No Ijazah :</label><br>
                <input type="number" name="no_ijazah" class="form-control @error('no_ijazah') is-invalid @enderror" placeholder="No Ijazah" value="{{ old('no_ijazah') }}">
                @error('no_ijazah')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
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