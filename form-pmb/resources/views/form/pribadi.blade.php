@extends('master')
@section('title')
Formulir Data Pribadi
@endsection
@section('content')
{{-- <div class="containerjustify-content-center align-items-center" style="height: 100vh;"> --}}
    {{-- <div class="mt-7 mb-7 col-9 bg-light p-4 rounded-end shadow"> --}}
        {{-- <div class="d-flex justify-content-center align-items-center mb-3">
            <img class="mr-3" src="{{ asset('storage/internal/stti.png') }}" alt="logo" style="width: 50px; height: auto;">
            <h1 style="color: #008DD4">STTI</h1>
        </div>
        <div class="d-flex justify-content-center align-items-center mb-3">
            <h3  style="color: #315b75">Formulir Data Pribadi</h3>
        </div> --}}
        
        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        
        <form action="/pribadi" method="POST">
            @csrf

            <div class="mb-4">
                <label>Nama Lengkap :</label><br>
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                    <input type="text" name="nama_lengkap" class="form-control @error('nama_lengkap') is-invalid @enderror" placeholder="Nama Lengkap" value="{{ old('nama_lengkap') }}">
                    @error('nama_lengkap')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                </div>
            </div>
            
            <div class="mb-3">
                <label class="form-label">NISN</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fa-solid fa-address-card"></i></span>
                    <input type="number" name="nisn" class="form-control"  value="{{ $user->nisn }}" disabled>
                </div>
            </div>
            {{-- <div class="mb-3">
                <label>Gelombang :</label><br>
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                    <select name="gelombang" class="form-control @error('gelombang') is-invalid @enderror">
                        <option value="" disabled selected>Pilih Gelombang</option>
                        <option value="1" {{ old('gelombang') == '1' ? 'selected' : '' }}>1</option>
                        <option value="2" {{ old('gelombang') == '2' ? 'selected' : '' }}>2</option>
                    </select>
                    @error('gelombang')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                </div>
                
                
            </div> --}}

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label>Tempat Lahir :</label><br>

                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                        <input type="text" name="tempat_lahir" class="form-control @error('tempat_lahir') is-invalid @enderror" placeholder="Tempat Lahir" value="{{ old('tempat_lahir') }}" >
                    </div>
                    @error('tempat_lahir')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                </div>

            <div class="col-md-6 mb-3">
                <label class="form-label">Tanggal Lahir</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                    <input type="date" name="tl" class="form-control"  value="{{ $user->tl }}" disabled>
                </div>
         
        </div>
    </div>
            <div class="mb-3">
                <label>Jalan / Dusun : </label><br>
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-home"></i></span>
                    <input type="text" name="jalan_dusun" class="form-control @error('jalan_dusun') is-invalid @enderror" placeholder="Jalan/Dusun" value="{{ old('jalan_dusun') }}" >
                    @error('jalan_dusun')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                </div>
            </div>

            <div class="mb-3">
                <label>Desa Kelurahan :</label><br>
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-home"></i></span>
                    <input type="text" name="desa_kelurahan" class="form-control @error('desa_kelurahan') is-invalid @enderror" placeholder="Desa/Kelurahan" value="{{ old('desa_kelurahan') }}" >
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
                        <input type="text" name="rt" class="form-control @error('rt') is-invalid @enderror" placeholder="RT" value="{{ old('rt') }}" >
                        @error('rt')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <label>RW :</label><br>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-door-open"></i></span>
                        <input type="text" name="rw" class="form-control @error('rw') is-invalid @enderror" placeholder="RW" value="{{ old('rw') }}" >
                        @error('rw')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    </div>
                    
                </div>
            </div>

            <div class="mb-3 mt-3">
                <label>Kecamatan :</label><br>
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-map"></i></span>
                    <input name="kecamatan" type="text" class="form-control @error('kecamatan') is-invalid @enderror" placeholder="Masukkan Kecamatan" value="{{ old('kecamatan') }}" >
                    @error('kecamatan')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                </div>
               
            </div>

            <div class="mb-3">
                <label>Kabupaten :</label><br>
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-map"></i></span>
                    <input type="text" name="kabupaten" class="form-control @error('kabupaten') is-invalid @enderror" placeholder="Kabupaten" value="{{ old('kabupaten') }}" >
                    @error('kabupaten')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                </div>
            </div>

            <div class="mb-3">
                <label>provinsi :</label><br>
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-map"></i></span>
                    <input type="text" name="provinsi" class="form-control @error('provinsi') is-invalid @enderror" placeholder="Provinsi" value="{{ old('provinsi') }}" >
                    @error('provinsi')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
            </div>
            <div class="mb-3">
                <label>Kewarganegaraan :</label><br>
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-flag"></i></span>
                    <input type="text" name="kewarganegaraan" class="form-control @error('kewarganegaraan') is-invalid @enderror" placeholder="Kewarganegaraan" value="{{ old('kewarganegaraan') }}" >
                    @error('kewarganegaraan')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                </div>
                
            </div>
            <div class="mb-3">
                <label>Agama :</label><br>
                <div class="input-group">
                    <span class="input-group-text"><i class="fa-solid fa-person-praying"></i></span>
                    <input type="text" name="agama" class="form-control @error('agama') is-invalid @enderror" placeholder="Agama" value="{{ old('agama') }}" >
                    @error('agama')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                </div>
                
            </div>

            <div class="mb-3">
                <label>Nomer Kartu Keluarga (KK) :</label><br>
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                    <input type="text" name="no_kk" class="form-control @error('no_kk') is-invalid @enderror" placeholder="Nomor Kartu Keluarga (KK)" value="{{ old('no_kk') }}"  minlength="16" maxlength="16">
                    @error('no_kk')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                </div>
                
            </div>

            <div class="mb-3">
                <label>Email :</label><br>
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" value="{{ old('email') }}" >
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
                        <option value="1" {{ old('status') == '1' ? 'selected' : '' }}>Lajang</option>
                        <option value="2" {{ old('status') == '2' ? 'selected' : '' }}>Menikah</option>
                        <option value="3" {{ old('status') == '3' ? 'selected' : '' }}>Duda</option>
                        <option value="4" {{ old('status') == '4' ? 'selected' : '' }}>Janda</option>
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
                        <option value="A" {{ old('golongan_darah') == 'A' ? 'selected' : '' }}>A</option>
                        <option value="B" {{ old('golongan_darah') == 'B' ? 'selected' : '' }}>B</option>
                        <option value="AB" {{ old('golongan_darah') == 'AB' ? 'selected' : '' }}>AB</option>
                        <option value="O" {{ old('golongan_darah') == 'O' ? 'selected' : '' }}>O</option>
                    </select>
                    @error('golongan_darah')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                </div>

            </div>
            

            <div class="mb-3">
                <label>Nomor WhatsApp :</label><br>
                <div class="input-group">
                    <span class="input-group-text"><i class="fab fa-whatsapp"></i></span>
                    <input type="number" name="no_wa" class="form-control @error('no_wa') is-invalid @enderror" placeholder="Nomor WhatsApp" value="{{ old('no_wa') }}"  maxlength="11" maxlength="13">
                    @error('no_wa')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                </div>
                
            </div>

            

            <div class="mb-3">
                <label>Jurusan Pilihan 1 :</label><br>
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-graduation-cap"></i></span>
                    <select name="jurusan1_id" class="form-control @error('jurusan1_id') is-invalid @enderror">
                        <option value="" disabled selected>Pilih Jurusan Pilihan 1</option>
                        @foreach ($jurusanList as $jurusan)
                            <option value="{{ $jurusan->id }}" {{ old('jurusan1_id') == $jurusan->id ? 'selected' : '' }}>
                                {{ $jurusan->nama_jurusan }}
                            </option>
                        @endforeach
                    </select>
                    @error('jurusan1_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                </div>





                
                
                
            </div>

            <div class="mb-5">
                <label>Jurusan Pilihan  :</label><br>
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-graduation-cap"></i></span>
                    <select name="jurusan2_id" class="form-control @error('jurusan2_id') is-invalid @enderror">
                        <option value="" disabled selected>Pilih Jurusan Pilihan 2</option>
                        @foreach ($jurusanList2 as $jurusan)
                            <option value="{{ $jurusan->id }}" {{ old('jurusan2_id') == $jurusan->id ? 'selected' : '' }}>
                                {{ $jurusan->nama_jurusan }}
                            </option>
                        @endforeach
                    </select>
                    @error('jurusan2_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                </div>
                
                
            </div>

            <div class="row justify-content-end">
                <div class="col-md-5">
                    <button type="submit" class="btn btn-primary w-100">Next</button>
                </div>
            </div>
            
        </form>

{{-- </div> --}}
{{-- </div> --}}

@endsection