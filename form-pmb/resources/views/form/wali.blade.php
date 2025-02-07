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
        
        <form action="/wali" method="POST">
            @csrf

            <div class="mb-4">
                <label>Nama Wali :</label><br>
                <input type="text" name="nama_wali" class="form-control @error('nama_wali') is-invalid @enderror" placeholder="Nama Wali" value="{{ old('nama_wali') }}">
                @error('nama_wali')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label>Alamat :</label><br>
                <input type="text" name="alamat_wali" class="form-control @error('alamat_wali') is-invalid @enderror" placeholder="Alamat Wali" value="{{ old('alamat_wali') }}">
                @error('alamat_wali')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label>Pekerjaan :</label><br>
                <input type="text" name="pekerjaan" class="form-control @error('pekerjaan') is-invalid @enderror" placeholder="Pekerjaan" value="{{ old('pekerjaan') }}">
                @error('pekerjaan')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="mb-4">
                <label>No WA :</label><br>
                <input type="number" name="no_wa" class="form-control @error('no_wa') is-invalid @enderror" placeholder="No WA" value="{{ old('no_wa') }}">
                @error('no_wa')
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