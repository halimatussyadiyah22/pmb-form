@extends('master')

@section('title')
Identitas Orangtua
@endsection

@section('content')
<div class="container">
    <!-- Jika tidak ada data pribadi -->
    @if($ortu  === null)
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
        <form action="/ortu/{{$ortu->id}}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="mb-4">
                <label>Nama Ayah :</label><br>
                <div class="input-group">
                <span class="input-group-text"><i class="fas fa-user"></i></span>
                <input type="text" name="nama_ayah" class="form-control @error('nama_ayah') is-invalid @enderror" placeholder="Nama Ayah" value="{{ $ortu->nama_ayah}}">
            </div>
                @error('nama_ayah')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label>Umur Ayah :</label><br>
                <div class="input-group">
                <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                <input type="text" name="umur_ayah" class="form-control @error('umur_ayah') is-invalid @enderror" placeholder="Umur Ayah" value="{{ $ortu->umur_ayah}}">
            </div>
                @error('umur_ayah')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="mb-3">
                <label>Pendidikan Ayah :</label><br>
                <select name="pendidikan_ayah" class="form-control @error('pendidikan_ayah') is-invalid @enderror" value="{{ $ortu->pendidikan_ayah }}">
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
                <select name="status_ayah" class="form-control @error('status_ayah') is-invalid @enderror" value="{{ $ortu->status_ayah }}">
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
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-briefcase"></i></span>
                    <input type="text" name="pekerjaan_ayah" class="form-control @error('pekerjaan_ayah') is-invalid @enderror" placeholder="pekerjaan Ayah" value="{{ $ortu->pekerjaan_ayah }}">
                </div>
                @error('pekerjaan_ayah')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label>Penghasilan Ayah :</label><br>
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-money-bill-wave"></i></span>
                    <input type="text" name="penghasilan_ayah" class="form-control @error('penghasilan_ayah') is-invalid @enderror" placeholder="Penghasilan Ayah" value="{{ $ortu->penghasilan_ayah }}">
                </div>
                @error('penghasilan_ayah')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label>No WA Ayah :</label><br>
                <div class="input-group">
                    <span class="input-group-text"><i class="fab fa-whatsapp"></i></span>
                    <input type="number" name="no_wa_ayah" class="form-control @error('no_wa_ayah') is-invalid @enderror" placeholder="No WA Ayah" value="{{ $ortu->no_wa_ayah }}">
                </div>
                @error('no_wa_ayah')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label>Alamat Ayah :</label><br>
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-home"></i></span>
                    <input type="text" name="alamat_ayah" class="form-control @error('alamat_ayah') is-invalid @enderror" placeholder="Alamat Ayah" value="{{ $ortu->alamat_ayah }}">
                </div>
                @error('alamat_ayah')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label>Nama Ibu :</label><br>
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                    <input type="text" name="nama_ibu" class="form-control @error('nama_ibu') is-invalid @enderror" placeholder="Nama Ibu" value="{{ $ortu->nama_ibu }}">
                </div>
                @error('nama_ibu')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label>Umur Ibu :</label><br>
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                    <input type="text" name="umur_ibu" class="form-control @error('umur_ibu') is-invalid @enderror" placeholder="Umur Ibu" value="{{ $ortu->umur_ibu }}">
                </div>
                @error('umur_ibu')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="mb-3">
                <label>Pendidikan Ibu :</label><br>
                <select name="pendidikan_ibu" class="form-control @error('pendidikan_ibu') is-invalid @enderror" value="{{$ortu->pendidikan_ibu}}">
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
                <select name="status_ibu" class="form-control @error('status_ibu') is-invalid @enderror" value="{{$ortu->status_ibu}}">
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
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-briefcase"></i></span>
                    <input type="text" name="pekerjaan_ibu" class="form-control @error('pekerjaan_ibu') is-invalid @enderror" placeholder="pekerjaan Ibu" value="{{$ortu->pekerjaan_ibu}}">
                </div>
                @error('pekerjaan_ibu')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label>Penghasilan Ibu :</label><br>
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-money-bill-wave"></i></span>
                    <input type="text" name="penghasilan_ibu" class="form-control @error('penghasilan_ibu') is-invalid @enderror" placeholder="Penghasilan Ibu" value="{{$ortu->penghasilan_ibu}}">
                </div>
                @error('penghasilan_ibu')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label>No WA Ibu :</label><br>
                <div class="input-group">
                    <span class="input-group-text"><i class="fab fa-whatsapp"></i></span>
                    <input type="number" name="no_wa_ibu" class="form-control @error('no_wa_ibu') is-invalid @enderror" placeholder="No WA Ibu" value="{{ $ortu->no_wa_ibu }}">
                </div>
                @error('no_wa_ibu')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label>Alamat Ibu :</label><br>
                <div class="input-group">
                <span class="input-group-text"><i class="fas fa-home"></i></span>
                <input type="text" name="alamat_ibu" class="form-control @error('alamat_ibu') is-invalid @enderror" placeholder="Alamat Ayah" value="{{ $ortu->alamat_ayah }}">
            </div>
                @error('alamat_ibu')
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
            $(".alert").fadeOut("slow");
        }, 3000); // Menghilang dalam 3 detik
    });
</script>
@endpush
