@extends('master')

@section('title')
Identitas Pribadi
@endsection

@section('content')
<div class="container">
    <!-- Jika tidak ada data pribadi -->
    @if($pribadi === null)
        <div class="alert alert-warning">
            Anda belum mengisi data pribadi.
        </div>
    @else
        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        <!-- Form untuk Edit Data Pribadi -->
        <form action="/pribadi/{{$pribadi->id}}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="card-body">
                <div class="form-group">
                    <label for="gelombang"><strong>Gelombang:</strong></label>
                    <input type="text" class="form-control" name="gelombang" id="gelombang" value="{{ $pribadi->gelombang }}">
                </div>
                <div class="form-group">
                    <label for="tempat_lahir"><strong>Tempat Lahir:</strong></label>
                    <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" value="{{ $pribadi->tempat_lahir }}">
                </div>
                <div class="form-group">
                    <label for="alamat"><strong>Alamat:</strong></label>
                    <input type="text" class="form-control" name="alamat" id="alamat" value="{{ $pribadi->jalan_dusun }}">
                </div>
                <div class="form-group">
                    <label for="desa_kelurahan"><strong>Kelurahan/Desa :</strong></label>
                    <input type="text" class="form-control" name="desa_kelurahan" id="kecamatan" value="{{ $pribadi->desa_kelurahan }}">
                </div>
                <div class="form-group">
                    <label for="rt"><strong>RT:</strong></label>
                    <input type="number" class="form-control" name="rt" id="rt" value="{{ $pribadi->rt }}">
                </div>
                <div class="form-group">
                    <label for="rw"><strong>RW:</strong></label>
                    <input type="number" class="form-control" name="rw" id="rw" value="{{ $pribadi->rw }}">
                </div>
                <div class="form-group">
                    <label for="kecamatan"><strong>Kecamatan:</strong></label>
                    <input type="text" class="form-control" name="kecamatan" id="kecamatan" value="{{ $pribadi->kecamatan }}">
                </div>
                <div class="form-group">
                    <label for="kabupaten"><strong>Kabupaten:</strong></label>
                    <input type="text" class="form-control" name="kabupaten" id="kabupaten" value="{{ $pribadi->kabupaten }}">
                </div>
                <div class="form-group">
                    <label for="provinsi"><strong>Provinsi:</strong></label>
                    <input type="text" class="form-control" name="provinsi" id="provinsi" value="{{ $pribadi->provinsi }}">
                </div>
                <div class="form-group">
                    <label for="agama"><strong>Agama:</strong></label>
                    <input type="text" class="form-control" name="agama" id="agama" value="{{ $pribadi->agama }}">
                </div>
                <div class="form-group">
                    <label for="no_kk"><strong>No KK:</strong></label>
                    <input type="text" class="form-control" name="no_kk" id="no_kk" value="{{ $pribadi->no_kk }}">
                </div>
                <div class="form-group">
                    <label for="email"><strong>Email:</strong></label>
                    <input type="email" class="form-control" name="email" id="email" value="{{ $pribadi->email }}">
                </div>
                <div class="form-group">
                    <label for="no_wa"><strong>No WA:</strong></label>
                    <input type="text" class="form-control" name="no_wa" id="no_wa" value="{{ $pribadi->no_wa }}">
                </div>
                <div class="form-group">
                    <label for="kewarganegaraan"><strong>Kewarganegaraan:</strong></label>
                    <input type="text" class="form-control" name="kewarganegaraan" id="kewarganegaraan" value="{{ $pribadi->kewarganegaraan }}">
                </div>

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
            $(".alert").fadeOut("slow");
        }, 3000); // Menghilang dalam 3 detik
    });
</script>
@endpush
