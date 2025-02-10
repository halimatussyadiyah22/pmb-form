@extends('master')

@section('title')
Identitas Sekolah
@endsection

@section('content')
<div class="container">
    @if($sekolah  === null)
        <div class="alert alert-warning">
            Anda belum mengisi Identitas Sekolah.
            <div class="mt-3">
                <a href="/sekolah/create">
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

        <form action="/sekolah/{{$sekolah->id}}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="mb-4">
                <label>Nama Sekolah :</label><br>
                <input type="text" name="nama_sekolah" class="form-control @error('nama_sekolah') is-invalid @enderror" placeholder="Nama Sekolah" value="{{ $sekolah->nama_sekolah}}">
                @error('nama_sekolah')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label>Jurusan :</label><br>
                <input type="text" name="jurusan" class="form-control @error('jurusan') is-invalid @enderror" placeholder="Jurusan" value="{{ $sekolah->jurusan }}">
                @error('jurusan')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label>Alamat Sekolah :</label><br>
                <textarea  name="alamat_sekolah" class="form-control @error('alamat_sekolah') is-invalid @enderror" placeholder="alamat_sekolah" value="{{ $sekolah->alamat_sekolah }}"></textarea>
                @error('alamat_sekolah')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="mb-4">
                <label>Tahun Lulus :</label><br>
                <input type="number" name="tahun_lulus" class="form-control @error('tahun_lulus') is-invalid @enderror" placeholder="Tahun Lulus" value="{{ $sekolah->tahun_lulus }}">
                @error('tahun_lulus')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label>No ijazah :</label><br>
                <input type="number" name="no_ijazah" class="form-control @error('no_ijazah') is-invalid @enderror" placeholder="No ijazah" value="{{ $sekolah->no_ijazah }}">
                @error('no_ijazah')
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
