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
            <div class="mt-3">
                <a href="/pribadi/create">
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
        <form action="/pribadi/{{$pribadi->id}}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="card-body">
                <div class="form-group">
                    <label for="gelombang"><strong>Gelombang:</strong></label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                        <input type="text" class="form-control" name="gelombang" id="gelombang" value="{{ $pribadi->gelombang }}" disabled>
                        @error('nama_lengkap')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">NISN</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fa-solid fa-address-card"></i></span>
                        <input type="number" name="nisn" class="form-control"  value="{{ $pribadi->user->nisn }}" disabled>
                    </div>
                </div>
                <div class="mb-3">
                    <label>Jenis Kelamin :</label><br>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                        <select name="jk" class="form-control @error('jk') is-invalid @enderror">
                            <option value="" disabled selected>Pilih Jenis Kelamin</option>
                            <option value="Laki-laki" {{ $pribadi->jk == '1' ? 'selected' : '' }}>Laki-laki</option>
                            <option value="Perempuan" {{ $pribadi->jk == '2' ? 'selected' : '' }}>Perempuan</option>
                        </select>
                        @error('jk')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    </div>
                    
                    
                </div>
                <div class="form-group">
                    <label for="tempat_lahir"><strong>Tempat Lahir:</strong></label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                        <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" value="{{ $pribadi->tempat_lahir }}">
                    
                    @error('tempat_lahir')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                </div>
                
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">Tanggal Lahir</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                        <input type="date" name="tl" class="form-control"  value="{{ $pribadi->user->tl }}" disabled>
                    </div>
             
            </div>
                <div class="form-group">
                    <label for="jalan_dusun"><strong>Jalan/Dusun :</strong></label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-home"></i></span>
                        <input type="text" class="form-control" name="jalan_dusun" id="jalan_dusun" value="{{ $pribadi->jalan_dusun }}">
                        @error('jalan_dusun')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="desa_kelurahan"><strong>Kelurahan/Desa :</strong></label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-home"></i></span>
                        <input type="text" class="form-control" name="desa_kelurahan" id="kecamatan" value="{{ $pribadi->desa_kelurahan }}">
                        @error('desa_kelurahan')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label>RT :</label><br>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-door-open"></i></span>
                            <input type="number" class="form-control" name="rt" id="rt" value="{{ $pribadi->rt }}">
                            @error('rt')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label>RW :</label><br>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-door-open"></i></span>
                            <input type="number" class="form-control" name="rw" id="rw" value="{{ $pribadi->rw }}">
                            @error('rw')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        </div>
                        
                    </div>
                </div>
    
                <div class="form-group">
                    <label for="kecamatan"><strong>Kecamatan:</strong></label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-map"></i></span>
                        <input type="text" class="form-control" name="kecamatan" id="kecamatan" value="{{ $pribadi->kecamatan }}">
                        @error('kecamatan')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="kabupaten"><strong>Kabupaten:</strong></label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-map"></i></span>
                        <input type="text" class="form-control" name="kabupaten" id="kabupaten" value="{{ $pribadi->kabupaten }}">
                        @error('kabupaten')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="provinsi"><strong>Provinsi:</strong></label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-map"></i></span>
                        <input type="text" class="form-control" name="provinsi" id="provinsi" value="{{ $pribadi->provinsi }}">
                        @error('provinsi')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="kewarganegaraan"><strong>Kewarganegaraan:</strong></label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-flag"></i></span>
                        <input type="text" class="form-control" name="kewarganegaraan" id="kewarganegaraan" value="{{ $pribadi->kewarganegaraan }}">
                        @error('kewarganegaraan')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="agama"><strong>Agama:</strong></label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fa-solid fa-person-praying"></i></span>
                        <input type="text" class="form-control" name="agama" id="agama" value="{{ $pribadi->agama }}">
                        @error('agama')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="no_kk"><strong>No KK:</strong></label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                        <input type="text" class="form-control" name="no_kk" id="no_kk" value="{{ $pribadi->no_kk }}">
                        @error('no_kk')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <label>NIK :</label><br>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                        <input type="text" name="no_ktp" class="form-control @error('no_ktp') is-invalid @enderror" placeholder="NIK" value="{{ $pribadi->ktp}}"  minlength="10" maxlength="10">
                        @error('no_ktp')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    </div>
                    
                </div>
                <div class="form-group">
                    <label for="email"><strong>Email:</strong></label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                        <input type="email" class="form-control" name="email" id="email" value="{{ $pribadi->email }}">
                        @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <label>Status :</label><br>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fa-solid fa-person"></i></span>
                        <select name="status" class="form-control @error('status') is-invalid @enderror" value="{{ old('status') }}">
                            <option value="" disabled selected>Pilih Status</option>
                            <option value="1" {{ $pribadi->status == '1' ? 'selected' : '' }}>Lajang</option>
                            <option value="2" {{ $pribadi->status == '2' ? 'selected' : '' }}>Menikah</option>
                            <option value="3" {{ $pribadi->status == '3' ? 'selected' : '' }}>Duda</option>
                            <option value="4" {{ $pribadi->status == '4' ? 'selected' : '' }}>Janda</option>
                        </select>
                        @error('status')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    </div>
                    
                </div>
                <div class="mb-3">
                    <label>Golongan Darah :</label><br>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-tint"></i></span>
                        <select name="golongan_darah" class="form-control @error('golongan_darah') is-invalid @enderror">
                            <option value="" disabled selected>Pilih Golongan Darah</option>
                            <option value="A" {{ $pribadi->golongan_darah == 'A' ? 'selected' : '' }}>A</option>
                            <option value="B" {{ $pribadi->golongan_darah == 'B' ? 'selected' : '' }}>B</option>
                            <option value="AB" {{ $pribadi->golongan_darah == 'AB' ? 'selected' : '' }}>AB</option>
                            <option value="O" {{ $pribadi->golongan_darah == 'O' ? 'selected' : '' }}>O</option>
                        </select>
                        @error('golongan_darah')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    </div>
    
                </div>
                
                <div class="form-group">
                    <label>Nomor WhatsApp :</label><br>
                <div class="input-group">
                    <span class="input-group-text"><i class="fab fa-whatsapp"></i></span>
                    <input type="text" class="form-control" name="no_wa" id="no_wa" value="{{ $pribadi->no_wa }}">
                    @error('no_wa')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                </div>
                
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
            $(".alert-success").fadeOut("slow");
        }, 3000); // Menghilang dalam 3 detik hanya untuk alert-success
    });
</script>
@endpush
