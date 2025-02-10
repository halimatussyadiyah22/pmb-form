<!-- @extends('master')
@section('title')
Formulir Data ortu
@endsection
@section('content')

        
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
            <div class="row justify-content-end">
            <div class="col-md-5">
                <button type="submit" class="btn btn-primary w-100">Simpan</button>
            </div>
        </div>
            
        </form>



@endsection -->