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
        
        <form action="/dokumen" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-4">
                <label>Pas Foto :</label><br>
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-image"></i></span>
                    <input type="file" name="pas_foto" class="form-control @error('pas_foto') is-invalid @enderror" placeholder="Pas Foto" value="{{ old('pas_foto') }}">
                </div>
                @error('pas_foto')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                    </div>

        <div class="mb-4">
            <label>KTP :</label><br>
            <div class="input-group">
                <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                <input type="file" name="ktp" class="form-control @error('ktp') is-invalid @enderror" placeholder="KTP" value="{{ old('ktp') }}">
            </div>
            @error('ktp')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-4">
            <label>Kartu Keluarga :</label><br>
            <div class="input-group">
                <span class="input-group-text"><i class="fas fa-users"></i></span>
                <input type="file" name="kk" class="form-control @error('kk') is-invalid @enderror" placeholder="Kartu Keluarga" value="{{ old('kk') }}">
            </div>
            @error('kk')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-4">
            <label>Ijazah :</label><br>
            <div class="input-group">
                <span class="input-group-text"><i class="fas fa-graduation-cap"></i></span>
                <input type="file" name="ijazah" class="form-control @error('ijazah') is-invalid @enderror" placeholder="Ijazah" value="{{ old('ijazah') }}">
            </div>
            @error('ijazah')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-4">
            <label>Transkip Nilai :</label><br>
            <div class="input-group">
                <span class="input-group-text"><i class="fas fa-file-alt"></i></span>
                <input type="file" name="transkip_nilai" class="form-control @error('transkip_nilai') is-invalid @enderror" placeholder="Transkip Nilai" value="{{ old('transkip_nilai') }}">
            </div>
            @error('transkip_nilai')
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