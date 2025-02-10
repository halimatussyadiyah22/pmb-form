@extends('master')

@section('title')
Identitas Wali
@endsection

@section('content')
<div class="container">
    <!-- Jika tidak ada data pribadi -->
    @if($wali  === null)
        <div class="alert alert-warning">
            Anda belum mengisi data pribadi.
            <div class="mt-3">
                <a href="/wali/create">
                    <button class="btn-primary">Isi Formulir</button>
                </a>
                </div>
        </div>
    @else
        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        <!-- Form untuk Edit Data Pribadi -->
        <form action="/wali/{{$wali->id}}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="mb-4">
                <label>Nama Wali :</label><br>
                <input type="text" name="nama_wali" class="form-control @error('nama_wali') is-invalid @enderror" placeholder="Nama Wali" value="{{ $wali->nama_wali }}">
                @error('nama_wali')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label>Alamat :</label><br>
                <textarea name="alamat_wali" class="form-control @error('alamat_wali') is-invalid @enderror" placeholder="Alamat Wali" value="{{ $wali->alamat_wali }}"></textarea>
                @error('alamat_wali')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label>Pekerjaan :</label><br>
                <input type="text" name="pekerjaan" class="form-control @error('pekerjaan') is-invalid @enderror" placeholder="Pekerjaan" value="{{ $wali->pekerjaan }}">
                @error('pekerjaan')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="mb-4">
                <label>No WA :</label><br>
                <input type="number" name="no_wa" class="form-control @error('no_wa') is-invalid @enderror" placeholder="No WA" value="{{ $wali->no_wa}}">
                @error('no_wa')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </form>
    @endif
</div>

@endsection

@push('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        setTimeout(function() {
            $(".alert-success").fadeOut("slow");
        }, 3000); // Menghilang dalam 3 detik hanya untuk alert-success
    });
</script>
@endpush
