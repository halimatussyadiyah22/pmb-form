@extends('master')

@section('title', 'Formulir Identity Orangtua Dan Wali')

@section('content')
<div class="container ">
    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    
        
                <form action="{{ route('ortu.store') }}" method="POST">
                    @csrf
    
                    <h5 class="text-primary">Data Ayah</h5>
                    <hr>
    
                    <div class="mb-3">
                        <label for="nama_ayah">Nama Ayah:</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                            <input type="text" id="nama_ayah" name="nama_ayah" class="form-control @error('nama_ayah') is-invalid @enderror" value="{{ old('nama_ayah') }}">
                        </div>
                        @error('nama_ayah')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
    
                    <div class="mb-3">
                        <label for="umur_ayah">Umur Ayah:</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                            <input type="number" id="umur_ayah" name="umur_ayah" class="form-control @error('umur_ayah') is-invalid @enderror" value="{{ old('umur_ayah') }}">
                        </div>
                        @error('umur_ayah')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
    
                    <div class="mb-3">
                        <label for="pendidikan_ayah">Pendidikan Ayah:</label>
                        <select id="pendidikan_ayah" name="pendidikan_ayah" class="form-control @error('pendidikan_ayah') is-invalid @enderror">
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
                        <label for="status_ayah">Status Ayah:</label>
                        <select id="status_ayah" name="status_ayah" class="form-control @error('status_ayah') is-invalid @enderror">
                            <option value="" disabled selected>Pilih Status Ayah</option>
                            <option value="Hidup" {{ old('status_ayah') == 'Hidup' ? 'selected' : '' }}>Hidup</option>
                            <option value="Meninggal" {{ old('status_ayah') == 'Meninggal' ? 'selected' : '' }}>Meninggal</option>
                        </select>
                        @error('status_ayah')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
    
                    <div class="mb-3">
                        <label for="pekerjaan_ayah">Pekerjaan Ayah:</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-briefcase"></i></span>
                            <input type="text" id="pekerjaan_ayah" name="pekerjaan_ayah" class="form-control @error('pekerjaan_ayah') is-invalid @enderror" value="{{ old('pekerjaan_ayah') }}">
                        </div>
                        @error('pekerjaan_ayah')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
    
                    <div class="mb-3">
                        <label for="penghasilan_ayah">Penghasilan Ayah:</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-money-bill-wave"></i></span>
                            <input type="number" id="penghasilan_ayah" name="penghasilan_ayah" class="form-control @error('penghasilan_ayah') is-invalid @enderror" value="{{ old('penghasilan_ayah') }}">
                        </div>
                        @error('penghasilan_ayah')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
    
                    <div class="mb-3">
                        <label for="no_wa_ayah">No WA Ayah:</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fab fa-whatsapp"></i></span>
                            <input type="number" id="no_wa_ayah" minlength="11" maxlength="13" name="no_wa_ayah" class="form-control @error('no_wa_ayah') is-invalid @enderror" value="{{ old('no_wa_ayah') }}">
                        </div>
                        @error('no_wa_ayah')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
    
                    <div class="mb-3">
                        <label for="alamat_ayah">Alamat Ayah:</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-home"></i></span>
                            <textarea type="text" id="alamat_ayah" name="alamat_ayah" class="form-control @error('alamat_ayah') is-invalid @enderror" value="">{{ old('alamat_ayah') }}</textarea>
                        </div>
                        @error('alamat_ayah')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
    
                    <h5 class="text-primary">Data Ibu</h5>
                    <hr>
    
                    <div class="mb-3">
                        <label for="nama_ibu">Nama Ibu:</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                            <input type="text" id="nama_ibu" name="nama_ibu" class="form-control @error('nama_ibu') is-invalid @enderror" value="{{ old('nama_ibu') }}">
                        </div>
                        @error('nama_ibu')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
    
                    <div class="mb-3">
                        <label for="umur_ibu">Umur Ibu:</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                            <input type="number" id="umur_ibu" name="umur_ibu" class="form-control @error('umur_ibu') is-invalid @enderror" value="{{ old('umur_ibu') }}">
                        </div>
                        @error('umur_ibu')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
    
                    <div class="mb-3">
                        <label for="pendidikan_ibu">Pendidikan Ibu:</label>
                        <select id="pendidikan_ibu" name="pendidikan_ibu" class="form-control @error('pendidikan_ibu') is-invalid @enderror">
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
                        <label for="status_ibu">Status Ibu:</label>
                        <select id="status_ibu" name="status_ibu" class="form-control @error('status_ibu') is-invalid @enderror">
                            <option value="" disabled selected>Pilih Status Ibu</option>
                            <option value="Hidup" {{ old('status_ibu') == 'Hidup' ? 'selected' : '' }}>Hidup</option>
                            <option value="Meninggal" {{ old('status_ibu') == 'Meninggal' ? 'selected' : '' }}>Meninggal</option>
                        </select>
                        @error('status_ibu')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
    
                    <div class="mb-3">
                        <label for="pekerjaan_ibu">Pekerjaan Ibu:</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-briefcase"></i></span>
                            <input type="text" id="pekerjaan_ibu" name="pekerjaan_ibu" class="form-control @error('pekerjaan_ibu') is-invalid @enderror" value="{{ old('pekerjaan_ibu') }}">
                        </div>
                        @error('pekerjaan_ibu')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
    
                    <div class="mb-3">
                        <label for="penghasilan_ibu">Penghasilan Ibu:</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-money-bill-wave"></i></span>
                            <input type="number" id="penghasilan_ibu" name="penghasilan_ibu" class="form-control @error('penghasilan_ibu') is-invalid @enderror" value="{{ old('penghasilan_ibu') }}">
                        </div>
                        @error('penghasilan_ibu')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
    
                    <div class="mb-3">
                        <label for="no_wa_ibu">No WA Ibu:</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fab fa-whatsapp"></i></span>
                            <input type="number" maxlength="13" minlength="11" id="no_wa_ibu" name="no_wa_ibu" class="form-control @error('no_wa_ibu') is-invalid @enderror" value="{{ old('no_wa_ibu') }}">
                        </div>
                        @error('no_wa_ibu')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
    
                    <div class="mb-3">
                        <label for="alamat_ibu">Alamat Ibu:</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-home"></i></span>
                            <textarea type="text" id="alamat_ibu" name="alamat_ibu" class="form-control @error('alamat_ibu') is-invalid @enderror" value="">{{ old('alamat_ibu') }}</textarea>
                        </div>
                        @error('alamat_ibu')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
    
                    <h5 class="text-primary">Data Wali</h5>
                    <hr>
    
                    <div class="mb-3">
                        <label>Apakah Anda memiliki wali?</label>
                        <select id="wali_option" name="wali_option" class="form-control" onchange="toggleWaliForm()">
                            <option value="" disabled selected>Pilih Opsi</option>
                            <option value="yes">Ya</option>
                            <option value="no">Tidak</option>
                        </select>
                    </div>
    
                    <div id="wali_form" style="display: none;">
                        <div class="mb-3">
                            <label for="nama_wali">Nama Wali:</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                <input type="text" id="nama_wali" name="nama_wali" class="form-control @error('nama_wali') is-invalid @enderror" value="{{ old('nama_wali') }}">
                            </div>
                            @error('nama_wali')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
    
                        <div class="mb-3">
                            <label for="alamat_wali">Alamat Wali:</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                                <textarea type="text" id="alamat_wali" name="alamat_wali" class="form-control @error('alamat_wali') is-invalid @enderror" value="">{{ old('alamat_wali') }}</textarea>
                            </div>
                            @error('alamat_wali')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
    
                        <div class="mb-3">
                            <label for="pekerjaan">Pekerjaan Wali:</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-briefcase"></i></span>
                                <input type="text" id="pekerjaan" name="pekerjaan" class="form-control @error('pekerjaan') is-invalid @enderror" value="{{ old('pekerjaan') }}">
                            </div>
                            @error('pekerjaan')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
    
                        <div class="mb-3">
                            <label for="no_wa">No WA Wali:</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fab fa-whatsapp"></i></span>
                                <input type="number" id="no_wa" name="no_wa" minlength="11" maxlength="13" class="form-control @error('no_wa') is-invalid @enderror" value="{{ old('no_wa') }}">
                            </div>
                            @error('no_wa')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
    
                    <div class="row justify-content-end">
            <div class="col-md-5">
                <button type="submit" class="btn btn-primary w-100">Simpan</button>
            </div>
        </div>
                    </form>
            </div>

    
    @push('scripts')
    <script>
        function toggleWaliForm() {
            const waliForm = document.getElementById('wali_form');
            const waliOption = document.getElementById('wali_option').value;
    
            if (waliOption === 'yes') {
                waliForm.style.display = 'block';
            } else {
                waliForm.style.display = 'none';
            }
        }
    </script>
    @endpush
@endsection