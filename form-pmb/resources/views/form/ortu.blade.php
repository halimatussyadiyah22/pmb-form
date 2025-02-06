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
        
        <form action="/ortu" method="POST">
            @csrf

            <div class="mb-4">
                <label>Nama Ayah :</label><br>
                <input type="text" name="nama_ayah" class="form-control @error('nama_ayah') is-invalid @enderror" placeholder="Nama Ayah" value="{{ old('nama_ayah') }}">
                @error('nama_ayah')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label>Umur Ayah :</label><br>
                <input type="text" name="umur_ayah" class="form-control @error('umur_ayah') is-invalid @enderror" placeholder="Umur Ayah" value="{{ old('umur_ayah') }}">
                @error('umur_ayah')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="mb-3">
                <label>Pendidikan Ayah :</label><br>
                <select name="pendidikan_ayah" class="form-control @error('pendidikan_ayah') is-invalid @enderror">
                    <option value="" disabled selected>Pilih Pendidikan Ayah</option>
                    <option value="SD" {{ old('pendidikan_ayah') == '1' ? 'selected' : '' }}>SD</option>
                    <option value="SMP" {{ old('pendidikan_ayah') == '2' ? 'selected' : '' }}>SMP</option>
                    <option value="SMA/SMK" {{ old('pendidikan_ayah') == '2' ? 'selected' : '' }}>SMK/SMA</option>
                    <option value="S1" {{ old('pendidikan_ayah') == 'S1' ? 'selected' : '' }}>S1</option>
                    <option value="S2" {{ old('pendidikan_ayah') == 'S2' ? 'selected' : '' }}>S2</option>
                    <option value="S3" {{ old('pendidikan_ayah') == 'S3' ? 'selected' : '' }}>S3</option>
                    <option value="Lain-lain" {{ old('pendidikan_ayah') == 'Lain-lain' ? 'selected' : '' }}>Lain-lain</option>


                </select>
                @error('pendidikan_ayah')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label>Status Ayah :</label><br>
                <select name="status_ayah" class="form-control @error('status_ayah') is-invalid @enderror">
                    <option value="" disabled selected>Pilih Pendidikan Ayah</option>
                    <option value="SD" {{ old('status_ayah') == '1' ? 'selected' : '' }}>SD</option>
                    <option value="SMP" {{ old('status_ayah') == '2' ? 'selected' : '' }}>SMP</option>
                    <option value="SMA/SMK" {{ old('status_ayah') == '2' ? 'selected' : '' }}>SMK/SMA</option>
                    <option value="S1" {{ old('status_ayah') == 'S1' ? 'selected' : '' }}>S1</option>
                    <option value="S2" {{ old('status_ayah') == 'S2' ? 'selected' : '' }}>S2</option>
                    <option value="S3" {{ old('status_ayah') == 'S3' ? 'selected' : '' }}>S3</option>
                    <option value="Lain-lain" {{ old('status_ayah') == 'Lain-lain' ? 'selected' : '' }}>Lain-lain</option>
                </select>
                @error('status_ayah')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label>Pekerjaan Ayah :</label><br>
                <input type="text" name="pekerjaan_ayah" class="form-control @error('pekerjaan_ayah') is-invalid @enderror" placeholder="pekerjaan Ayah" value="{{ old('pekerjaan_ayah') }}">
                @error('pekerjaan_ayah')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label>Penghasilan Ayah :</label><br>
                <input type="text" name="penghasilan_ayah" class="form-control @error('penghasilan_ayah') is-invalid @enderror" placeholder="Penghasilan Ayah" value="{{ old('penghasilan_ayah') }}">
                @error('penghasilan_ayah')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label>No WA Ayah :</label><br>
                <input type="number" name="no_wa_ayah" class="form-control @error('no_wa_ayah') is-invalid @enderror" placeholder="No WA Ayah" value="{{ old('no_wa_ayah') }}">
                @error('no_wa_ayah')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label>Alamat Ayah :</label><br>
                <input type="text" name="alamat_ayah" class="form-control @error('alamat_ayah') is-invalid @enderror" placeholder="Alamat Ayah" value="{{ old('alamat_ayah') }}">
                @error('alamat_ayah')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label>Nama Ibu :</label><br>
                <input type="text" name="nama_ibu" class="form-control @error('nama_ibu') is-invalid @enderror" placeholder="Nama Ibu" value="{{ old('nama_ibu') }}">
                @error('nama_ibu')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label>Umur Ibu :</label><br>
                <input type="text" name="umur_ibu" class="form-control @error('umur_ibu') is-invalid @enderror" placeholder="Umur Ibu" value="{{ old('umur_ibu') }}">
                @error('umur_ibu')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="mb-3">
                <label>Pendidikan Ibu :</label><br>
                <select name="pendidikan_ibu" class="form-control @error('pendidikan_ibu') is-invalid @enderror">
                    <option value="" disabled selected>Pilih Pendidikan Ibu</option>
                    <option value="SD" {{ old('pendidikan_ibu') == '1' ? 'selected' : '' }}>SD</option>
                    <option value="SMP" {{ old('pendidikan_ibu') == '2' ? 'selected' : '' }}>SMP</option>
                    <option value="SMA/SMK" {{ old('pendidikan_ibu') == '2' ? 'selected' : '' }}>SMK/SMA</option>
                    <option value="S1" {{ old('pendidikan_ibu') == 'S1' ? 'selected' : '' }}>S1</option>
                    <option value="S2" {{ old('pendidikan_ibu') == 'S2' ? 'selected' : '' }}>S2</option>
                    <option value="S3" {{ old('pendidikan_ibu') == 'S3' ? 'selected' : '' }}>S3</option>
                    <option value="Lain-lain" {{ old('pendidikan_ibu') == 'Lain-lain' ? 'selected' : '' }}>Lain-lain</option>


                </select>
                @error('pendidikan_ibu')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label>Status Ibu :</label><br>
                <select name="status_ibu" class="form-control @error('status_ibu') is-invalid @enderror">
                    <option value="" disabled selected>Pilih Pendidikan Ibu</option>
                    <option value="SD" {{ old('status_ayah') == '1' ? 'selected' : '' }}>SD</option>
                    <option value="SMP" {{ old('status_ayah') == '2' ? 'selected' : '' }}>SMP</option>
                    <option value="SMA/SMK" {{ old('status_ayah') == '2' ? 'selected' : '' }}>SMK/SMA</option>
                    <option value="S1" {{ old('status_ayah') == 'S1' ? 'selected' : '' }}>S1</option>
                    <option value="S2" {{ old('status_ayah') == 'S2' ? 'selected' : '' }}>S2</option>
                    <option value="S3" {{ old('status_ayah') == 'S3' ? 'selected' : '' }}>S3</option>
                    <option value="Lain-lain" {{ old('status_ayah') == 'Lain-lain' ? 'selected' : '' }}>Lain-lain</option>
                </select>
                @error('status_ayah')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label>Pekerjaan Ibu :</label><br>
                <input type="text" name="pekerjaan_ibu" class="form-control @error('pekerjaan_ibu') is-invalid @enderror" placeholder="pekerjaan Ibu" value="{{ old('pekerjaan_ibu') }}">
                @error('pekerjaan_ibu')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label>Penghasilan Ibu :</label><br>
                <input type="text" name="penghasilan_ibu" class="form-control @error('penghasilan_ibu') is-invalid @enderror" placeholder="Penghasilan Ibu" value="{{ old('penghasilan_ibu') }}">
                @error('penghasilan_ibu')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label>No WA Ibu :</label><br>
                <input type="number" name="no_wa_ibu" class="form-control @error('no_wa_ibu') is-invalid @enderror" placeholder="No WA Ibu" value="{{ old('no_wa_ibu') }}">
                @error('no_wa_ibu')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label>Alamat Ibu :</label><br>
                <input type="text" name="alamat_ibu" class="form-control @error('alamat_ibu') is-invalid @enderror" placeholder="Alamat Ayah" value="{{ old('alamat_ayah') }}">
                @error('alamat_ibu')
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