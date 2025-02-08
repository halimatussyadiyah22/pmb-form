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
            
            <div class="mb-4">
        <label for="nama" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
        <input type="text" id="nama" name="nama" class="mt-1 p-2 w-full border rounded-lg focus:ring focus:ring-blue-300" required>
    </div>
    
    <div class="mb-4">
        <label for="nik" class="block text-sm font-medium text-gray-700">NIK</label>
        <input type="text" id="nik" name="nik" class="mt-1 p-2 w-full border rounded-lg focus:ring focus:ring-blue-300" required>
    </div>
    
    <div class="mb-4">
        <label for="tanggal_lahir" class="block text-sm font-medium text-gray-700">Tanggal Lahir</label>
        <input type="date" id="tanggal_lahir" name="tanggal_lahir" class="mt-1 p-2 w-full border rounded-lg focus:ring focus:ring-blue-300" required>
    </div>
    
    <div class="mb-4">
        <label for="alamat" class="block text-sm font-medium text-gray-700">Alamat</label>
        <textarea id="alamat" name="alamat" rows="3" class="mt-1 p-2 w-full border rounded-lg focus:ring focus:ring-blue-300" required></textarea>
    </div>
    
    <div class="mb-4">
        <label for="jenis_kelamin" class="block text-sm font-medium text-gray-700">Jenis Kelamin</label>
        <select id="jenis_kelamin" name="jenis_kelamin" class="mt-1 p-2 w-full border rounded-lg focus:ring focus:ring-blue-300">
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>
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
