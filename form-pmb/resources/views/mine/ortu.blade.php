@extends('master')

@section('title')
Identitas Orangtua dan Wali
@endsection

@section('content')
<div class="container mt-5">
    <!-- Jika tidak ada data pribadi -->
    @if($ortu === null)
        <div class="alert alert-warning">
            Anda belum mengisi data pribadi.
        </div>
    @else
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="card">
            <div class="card-header">
                <h4>Identitas Orangtua</h4>
            </div>
            <div class="card-body">
                <!-- Form untuk Edit Data Pribadi -->
                <form action="/ortu/{{$ortu->id}}" method="POST">
                    @csrf
                    @method('PUT')

                    <!-- Data Ayah -->
                    <div class="mb-4">
                        <label>Nama Ayah :</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                            <input type="text" name="nama_ayah" class="form-control @error('nama_ayah') is-invalid @enderror" placeholder="Nama Ayah" value="{{ $ortu->nama_ayah }}">
                        </div>
                        @error('nama_ayah')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label>Umur Ayah :</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                            <input type="text" name="umur_ayah" class="form-control @error('umur_ayah') is-invalid @enderror" placeholder="Umur Ayah" value="{{ $ortu->umur_ayah }}">
                        </div>
                        @error('umur_ayah')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label>Pendidikan Ayah :</label>
                        <select name="pendidikan_ayah" class="form-control @error('pendidikan_ayah') is-invalid @enderror">
                            <option value="" disabled>Pilih Pendidikan Ayah</option>
                            <option value="SD" {{ $ortu->pendidikan_ayah == 'SD' ? 'selected' : '' }}>SD</option>
                            <option value="SMP" {{ $ortu->pendidikan_ayah == 'SMP' ? 'selected' : '' }}>SMP</option>
                            <option value="SMA/SMK" {{ $ortu->pendidikan_ayah == 'SMA/SMK' ? 'selected' : '' }}>SMA/SMK</option>
                            <option value="S1" {{ $ortu->pendidikan_ayah == 'S1' ? 'selected' : '' }}>S1</option>
                            <option value="S2" {{ $ortu->pendidikan_ayah == 'S2' ? 'selected' : '' }}>S2</option>
                            <option value="S3" {{ $ortu->pendidikan_ayah == 'S3' ? 'selected' : '' }}>S3</option>
                            <option value="Lain-lain" {{ $ortu->pendidikan_ayah == 'Lain-lain' ? 'selected' : '' }}>Lain-lain</option>
                        </select>
                        @error('pendidikan_ayah')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label>Status Ayah :</label>
                        <select name="status_ayah" class="form-control @error('status_ayah') is-invalid @enderror">
                            <option value="" disabled>Pilih Status Ayah</option>
                            <option value="Hidup" {{ $ortu->status_ayah == 'Hidup' ? 'selected' : '' }}>Hidup</option>
                            <option value="Meninggal" {{ $ortu->status_ayah == 'Meninggal' ? 'selected' : '' }}>Meninggal</option>
                        </select>
                        @error('status_ayah')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label>Pekerjaan Ayah :</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-briefcase"></i></span>
                            <input type="text" name="pekerjaan_ayah" class="form-control @error('pekerjaan_ayah') is-invalid @enderror" placeholder="Pekerjaan Ayah" value="{{ $ortu->pekerjaan_ayah }}">
                        </div>
                        @error('pekerjaan_ayah')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label>Penghasilan Ayah :</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-money-bill-wave"></i></span>
                            <input type="text" name="penghasilan_ayah" class="form-control @error('penghasilan_ayah') is-invalid @enderror" placeholder="Penghasilan Ayah" value="{{ $ortu->penghasilan_ayah }}">
                        </div>
                        @error('penghasilan_ayah')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label>No WA Ayah :</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fab fa-whatsapp"></i></span>
                            <input type="number" name="no_wa_ayah" class="form-control @error('no_wa_ayah') is-invalid @enderror" placeholder="No WA Ayah" value="{{ $ortu->no_wa_ayah }}">
                        </div>
                        @error('no_wa_ayah')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label>Alamat Ayah :</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-home"></i></span>
                            <input type="text" name="alamat_ayah" class="form-control @error('alamat_ayah') is-invalid @enderror" placeholder="Alamat Ayah" value="{{ $ortu->alamat_ayah }}">
                        </div>
                        @error('alamat_ayah')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Data Ibu -->
                    <div class="mb-4">
                        <label>Nama Ibu :</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                            <input type="text" name="nama_ibu" class="form-control @error('nama_ibu') is-invalid @enderror" placeholder="Nama Ibu" value="{{ $ortu->nama_ibu }}">
                        </div>
                        @error('nama_ibu')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label>Umur Ibu :</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                            <input type="text" name="umur_ibu" class="form-control @error('umur_ibu') is-invalid @enderror" placeholder="Umur Ibu" value="{{ $ortu->umur_ibu }}">
                        </div>
                        @error('umur_ibu')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label>Pendidikan Ibu :</label>
                        <select name="pendidikan_ibu" class="form-control @error('pendidikan_ibu') is-invalid @enderror">
                            <option value="" disabled>Pilih Pendidikan Ibu</option>
                            <option value="SD" {{ $ortu->pendidikan_ibu == 'SD' ? 'selected' : '' }}>SD</option>
                            <option value="SMP" {{ $ortu->pendidikan_ibu == 'SMP' ? 'selected' : '' }}>SMP</option>
                            <option value="SMA/SMK" {{ $ortu->pendidikan_ibu == 'SMA/SMK' ? 'selected' : '' }}>SMA/SMK</option>
                            <option value="S1" {{ $ortu->pendidikan_ibu == 'S1' ? 'selected' : '' }}>S1</option>
                            <option value="S2" {{ $ortu->pendidikan_ibu == 'S2' ? 'selected' : '' }}>S2</option>
                            <option value="S3" {{ $ortu->pendidikan_ibu == 'S3' ? 'selected' : '' }}>S3</option>
                            <option value="Lain-lain" {{ $ortu->pendidikan_ibu == 'Lain-lain' ? 'selected' : '' }}>Lain-lain</option>
                        </select>
                        @error('pendidikan_ibu')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label>Status Ibu :</label>
                        <select name="status_ibu" class="form-control @error('status_ibu') is-invalid @enderror">
                            <option value="" disabled>Pilih Status Ibu</option>
                            <option value="Hidup" {{ $ortu->status_ibu == 'Hidup' ? 'selected' : '' }}>Hidup</option>
                            <option value="Meninggal" {{ $ortu->status_ibu == 'Meninggal' ? 'selected' : '' }}>Meninggal</option>
                        </select>
                        @error('status_ibu')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label>Pekerjaan Ibu :</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-briefcase"></i></span>
                            <input type="text" name="pekerjaan_ibu" class="form-control @error('pekerjaan_ibu') is-invalid @enderror" placeholder="Pekerjaan Ibu" value="{{ $ortu->pekerjaan_ibu }}">
                        </div>
                        @error('pekerjaan_ibu')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label>Penghasilan Ibu :</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-money-bill-wave"></i></span>
                            <input type="text" name="penghasilan_ibu" class="form-control @error('penghasilan_ibu') is-invalid @enderror" placeholder="Penghasilan Ibu" value="{{ $ortu->penghasilan_ibu }}">
                        </div>
                        @error('penghasilan_ibu')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label>No WA Ibu :</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fab fa-whatsapp"></i></span>
                            <input type="number" name="no_wa_ibu" class="form-control @error('no_wa_ibu') is-invalid @enderror" placeholder="No WA Ibu" value="{{ $ortu->no_wa_ibu }}">
                        </div>
                        @error('no_wa_ibu')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label>Alamat Ibu :</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-home"></i></span>
                            <input type="text" name="alamat_ibu" class="form-control @error('alamat_ibu') is-invalid @enderror" placeholder="Alamat Ibu" value="{{ $ortu->alamat_ibu }}">
                        </div>
                        @error('alamat_ibu')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </form>
            </div>
        </div>

        <!-- Data Wali -->
        @if($wali !== null)
            <div class="card mt-4">
                <div class="card-header">
                    <h4>Data Wali</h4>
                </div>
                <div class="card-body">
                    <form action="/wali/{{$wali->id}}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-4">
                            <label>Nama Wali :</label>
                            <input type="text" name="nama_wali" class="form-control @error('nama_wali') is-invalid @enderror" placeholder="Nama Wali" value="{{ $wali->nama_wali }}">
                            @error('nama_wali')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label>Alamat Wali :</label>
                            <input type="text" name="alamat_wali" class="form-control @error('alamat_wali') is-invalid @enderror" placeholder="Alamat Wali" value="{{ $wali->alamat_wali }}">
                            @error('alamat_wali')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label>Pekerjaan Wali :</label>
                            <input type="text" name="pekerjaan_wali" class="form-control @error('pekerjaan_wali') is-invalid @enderror" placeholder="Pekerjaan Wali" value="{{ $wali->pekerjaan }}">
                            @error('pekerjaan_wali')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label>No WA Wali :</label>
                            <input type="number" name="no_wa_wali" class="form-control @error('no_wa_wali') is-invalid @enderror" placeholder="No WA Wali" value="{{ $wali->no_wa }}">
                            @error('no_wa_wali')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </form>
                </div>
            </div>
        @endif
    @endif
</div>

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

@endsection