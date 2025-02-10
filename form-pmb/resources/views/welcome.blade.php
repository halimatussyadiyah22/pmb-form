@extends('master')

@section('title') 
Home 
@endsection 

@section('content')               
    <!-- Welcome Card -->         
        <div class="d-flex align-items-center mb-3">             
            <div class="icon-container me-3">
                <i class="fas fa-user-check fa-3x text-success"></i>
            </div>
            <div>
                <h4 class="fw-bold text-primary">Selamat datang, <strong>{{ Auth::user()->name }}</strong>!</h4>                 
                <p class="text-muted mb-0">Terima kasih telah bergabung dengan kami. Berikut adalah langkah-langkah yang perlu Anda ikuti:</p>
            </div>         
        </div>
        <hr>
        <div class="steps-list">
            <ol class="list-group list-group-numbered">
                <li class="list-group-item border-0">Silakan lengkapi semua formulir pendaftaran yang tersedia di menu formulir.</li>
                <li class="list-group-item border-0">Setelah melakukan pembayaran biaya pendaftaran, mohon untuk mengunggah bukti pembayaran di menu pembayaran.</li>
                <li class="list-group-item border-0">Jika Anda telah menyelesaikan kedua langkah di atas, harap bersabar menunggu informasi selanjutnya di menu Pengumuman.</li>
            </ol>
        </div>     
@endsection  

@push('scripts') 

@endpush