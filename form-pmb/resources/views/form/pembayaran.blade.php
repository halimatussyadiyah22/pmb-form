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
        
        <form action="/pembayaran" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-4">
                <label>Pas Foto :</label><br>
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-image"></i></span>
                    <input type="file" name="bukti" class="form-control @error('bukti') is-invalid @enderror" placeholder="Pas Foto" value="{{ old('bukti') }}">
                </div>
                @error('bukti')
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