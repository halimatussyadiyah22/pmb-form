@extends('master')
@section('content')

<div class="container mt-4">
        <!-- Card Container -->
        <div class="card shadow-lg border-0">
            <div class="card-header text-white" style="background: linear-gradient(90deg, #008dd2, #3F3E3E);">
                <div class="d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">Petunjuk Pemakaian</h4>
                    <i class="fas fa-info-circle fa-2x"></i> <!-- Icon for Info -->
                </div>
            </div>
            <div class="card-body">
                <!-- Instruction Sections -->
                <h5 class="mb-3"><i class="fas fa-pencil-alt me-2"></i> 1. Cara Mendaftar</h5>
                <p>Untuk mendaftar, klik tombol <a href="/register" style="text-decoration: none;">"Register"</a> pada halaman utama dan isi formulir pendaftaran dengan data yang valid.</p>
    
                <h5 class="mb-3"><i class="fas fa-sign-in-alt me-2"></i> 2. Cara Login</h5>
                <p>Masukkan NISN dan Tanggal (Dengan format : 2000-04-23) yang telah didaftarkan pada halaman <a href="/login" style="text-decoration: none;">Login</a>.</p>
    
                <h5 class="mb-3"><i class="fas fa-cogs me-2"></i> 3. Mengisi Formulir Persyaratan</h5>
                
                <!-- Note Section -->
                <div class="alert alert-info mt-4">
                    <strong>Catatan:</strong> Pastikan data yang dimasukkan sudah benar sebelum menyimpan perubahan.
                </div>
            </div>
        </div>
    </div>
@endsection