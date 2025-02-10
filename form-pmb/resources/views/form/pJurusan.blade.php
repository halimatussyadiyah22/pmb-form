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
        
        <form action="/pJurusan" method="POST">
            @csrf

            
            <div class="mb-3">
                <label>Jurusan Pilihan 1 :</label><br>
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-graduation-cap"></i></span>
                    <select name="jurusan_id" class="form-control @error('jurusan_id') is-invalid @enderror">
                        <option value="" disabled selected>Pilih Jurusan Pilihan 1</option>
                        @foreach ($jurusanList as $jurusan)
                            <option value="{{ $jurusan->id }}" {{ old('jurusan_id') == $jurusan->id ? 'selected' : '' }}>
                                {{ $jurusan->nama_jurusan }}
                            </option>
                        @endforeach
                    </select>
                    @error('jurusan_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                </div>
            </div>

            <div class="mb-5">
                <label>Jurusan Pilihan 2 :</label><br>
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-graduation-cap"></i></span>
                    <select name="jurusan2_id" class="form-control @error('jurusan2_id') is-invalid @enderror">
                        <option value="" disabled selected>Pilih Jurusan Pilihan 2</option>
                        @foreach ($jurusanList2 as $jurusan)
                            <option value="{{ $jurusan->id }}" {{ old('jurusan2_id') == $jurusan->id ? 'selected' : '' }}>
                                {{ $jurusan->nama_jurusan }}
                            </option>
                        @endforeach
                    </select>
                    @error('jurusan2_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
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