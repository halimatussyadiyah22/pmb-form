@extends('master')

@section('title')
Formulir Data Ortu
@endsection

@section('content')
@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

<form action="/ortu" method="POST">
    @csrf

    <!-- Father Information -->
    <div class="mb-4">
        {{-- <h1>Data Ayah</h1> --}}
        <div class="mb-4">
            <label>Nama Ayah :</label><br>
            <div class="input-group">
                <span class="input-group-text"><i class="fas fa-user"></i></span>
                <input type="text" name="nama_ayah" class="form-control @error('nama_ayah') is-invalid @enderror" placeholder="Nama Ayah" value="{{ old('nama_ayah') }}">
            </div>
            @error('nama_ayah')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-4">
            <label>Umur Ayah :</label><br>
            <div class="input-group">
                <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                <input type="text" name="umur_ayah" class="form-control @error('umur_ayah') is-invalid @enderror" placeholder="Umur Ayah" value="{{ old('umur_ayah') }}">
            </div>
            @error('umur_ayah')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label>Pendidikan Ayah :</label><br>
            <select name="pendidikan_ayah" class="form-control @error('pendidikan_ayah') is-invalid @enderror">
                <option value="" disabled selected>Pilih Pendidikan Ayah</option>
                <option value="SD" {{ old('pendidikan_ayah') == 'SD' ? 'selected' : '' }}>SD</option>
                <option value="SMP" {{ old('pendidikan_ayah') == 'SMP' ? 'selected' : '' }}>SMP</option>
                <option value="SMA/SMK" {{ old('pendidikan_ayah') == 'SMA/SMK' ? 'selected' : '' }}>SMA/SMK</option>
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
                <option value="" disabled selected>Pilih Status Ayah</option>
                <option value="Hidup" {{ old('status_ayah') == 'Hidup' ? 'selected' : '' }}>Hidup</option>
                <option value="Meninggal" {{ old('status_ayah') == 'Meninggal' ? 'selected' : '' }}>Meninggal</option>
            </select>
            @error('status_ayah')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-4">
            <label>Pekerjaan Ayah :</label><br>
            <div class="input-group">
                <span class="input-group-text"><i class="fas fa-briefcase"></i></span>
                <input type="text" name="pekerjaan_ayah" class="form-control @error('pekerjaan_ayah') is-invalid @enderror" placeholder="Pekerjaan Ayah" value="{{ old('pekerjaan_ayah') }}">
            </div>
            @error('pekerjaan_ayah')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-4">
            <label>Penghasilan Ayah :</label><br>
            <div class="input-group">
                <span class="input-group-text"><i class="fas fa-money-bill-wave"></i></span>
                <input type="text" name="penghasilan_ayah" class="form-control @error('penghasilan_ayah') is-invalid @enderror" placeholder="Penghasilan Ayah" value="{{ old('penghasilan_ayah') }}">
            </div>
            @error('penghasilan_ayah')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-4">
            <label>No WA Ayah :</label><br>
            <div class="input-group">
                <span class="input-group-text"><i class="fab fa-whatsapp"></i></span>
                <input type="number" name="no_wa_ayah" class="form-control @error('no_wa_ayah') is-invalid @enderror" placeholder="No WA Ayah" value="{{ old('no_wa_ayah') }}">
            </div>
            @error('no_wa_ayah')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-4">
            <label>Alamat Ayah :</label><br>
            <div class="input-group">
                <span class="input-group-text"><i class="fas fa-home"></i></span>
                <input type="text" name="alamat_ayah" class="form-control @error('alamat_ayah') is-invalid @enderror" placeholder="Alamat Ayah" value="{{ old('alamat_ayah') }}">
            </div>
            @error('alamat_ayah')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <!-- Mother Information -->
    <div class="mb-4">
        {{-- <h3>Data Ibu</h3> --}}
        <div class="mb-4">
            <label>Nama Ibu :</label><br>
            <div class="input-group">
                <span class="input-group-text"><i class="fas fa-user"></i></span>
                <input type="text" name="nama_ibu" class="form-control @error('nama_ibu') is-invalid @enderror" placeholder="Nama Ibu" value="{{ old('nama_ibu') }}">
            </div>
            @error('nama_ibu')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-4">
            <label>Umur Ibu :</label><br>
            <div class="input-group">
                <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                <input type="text" name="umur_ibu" class="form-control @error('umur_ibu') is-invalid @enderror" placeholder="Umur Ibu" value="{{ old('umur_ibu') }}">
            </div>
            @error('umur_ibu')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label>Pendidikan Ibu :</label><br>
            <select name="pendidikan_ibu" class="form-control @error('pendidikan_ibu') is-invalid @enderror">
                <option value="" disabled selected>Pilih Pendidikan Ibu</option>
                <option value="SD" {{ old('pendidikan_ibu') == 'SD' ? 'selected' : '' }}>SD</option>
                <option value="SMP" {{ old('pendidikan_ibu') == 'SMP' ? 'selected' : '' }}>SMP</option>
                <option value="SMA/SMK" {{ old('pendidikan_ibu') == 'SMA/SMK' ? 'selected' : '' }}>SMA/SMK</option>
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
                <option value="" disabled selected>Pilih Status Ibu</option>
                <option value="Hidup" {{ old('status_ibu') == 'Hidup' ? 'selected' : '' }}>Hidup</option>
                <option value="Meninggal" {{ old('status_ibu') == 'Meninggal' ? 'selected' : '' }}>Meninggal</option>
            </select>
            @error('status_ibu')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-4">
            <label>Pekerjaan Ibu :</label><br>
            <div class="input-group">
                <span class="input-group-text"><i class="fas fa-briefcase"></i></span>
                <input type="text" name="pekerjaan_ibu" class="form-control @error('pekerjaan_ibu') is-invalid @enderror" placeholder="Pekerjaan Ibu" value="{{ old('pekerjaan_ibu') }}">
            </div>
            @error('pekerjaan_ibu')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-4">
            <label>Penghasilan Ibu :</label><br>
            <div class="input-group">
                <span class="input-group-text"><i class="fas fa-money-bill-wave"></i></span>
                <input type="text" name="penghasilan_ibu" class="form-control @error('penghasilan_ibu') is-invalid @enderror" placeholder="Penghasilan Ibu" value="{{ old('penghasilan_ibu') }}">
            </div>
            @error('penghasilan_ibu')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-4">
            <label>No WA Ibu :</label><br>
            <div class="input-group">
                <span class="input-group-text"><i class="fab fa-whatsapp"></i></span>
                <input type="number" name="no_wa_ibu" class="form-control @error('no_wa_ibu') is-invalid @enderror" placeholder="No WA Ibu" value="{{ old('no_wa_ibu') }}">
            </div>
            @error('no_wa_ibu')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-4">
            <label>Alamat Ibu :</label><br>
            <div class="input-group">
                <span class="input-group-text"><i class="fas fa-home"></i></span>
                <input type="text" name="alamat_ibu" class="form-control @error('alamat_ibu') is-invalid @enderror" placeholder="Alamat Ibu" value="{{ old('alamat_ibu') }}">
            </div>
            @error('alamat_ibu')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection
