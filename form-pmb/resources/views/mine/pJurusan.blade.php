@extends('master')

@section('title')
Identitas Peminatan
@endsection

@section('content')
<div class="container">
    <!-- Jika tidak ada data pJurusan -->
    @if($pJurusan === null)
        <div class="alert alert-warning">
            Anda belum mengisi data Peminatan.
            <div class="mt-3">
                <a href="/pJurusan/create">
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

        <!-- Form untuk Edit Data pJurusan -->
        <form action="/pJurusan/{{$pJurusan->id}}" method="POST">
            @csrf
            @method('PUT')
            
                <div class="form-group">
                    <label for="jurusan1"><strong>Jurusan 1:</strong></label>
                    <select class="form-control" name="jurusan1_id" id="jurusan1_id">
                        @foreach($jurusan as $jurusanItem)
                            <option value="{{ $jurusanItem->id }}" {{ $pJurusan->jurusan1_id == $jurusanItem->id ? 'selected' : '' }}>
                                {{ $jurusanItem->nama_jurusan }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="jurusan1"><strong>Jurusan 1:</strong></label>
                    <select class="form-control" name="jurusan_id" id="jurusan_id">
                        @foreach($jurusan2 as $jurusanItem)
                            <option value="{{ $jurusanItem->id }}" {{ $pJurusan->jurusan_id == $jurusanItem->id ? 'selected' : '' }}>
                                {{ $jurusanItem->nama_jurusan }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="row justify-content-end">
                <div class="col-md-5">
                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </div>
            </div>
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
