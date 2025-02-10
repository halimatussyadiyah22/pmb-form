@extends('master')

@section('title')
Home
@endsection

@section('content')


   
        <!-- Welcome Alert -->
        <div class="alert alert-success d-flex align-items-center mb-4">
            <i class="fas fa-user-check fa-2x me-3"></i>
            <div>
                <h5>Selamat datang, <strong>{{ Auth::user()->name }}</strong>!</h5>
                <p>Terima kasih telah bergabung dengan kami. Berikut adalah petunjuk pengisian formulir.</p>
            </div>
        </div>




@endsection

@push('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        setTimeout(function() {
            $(".alert.success").fadeOut("slow");
        }, 3000);
    });
</script>
@endpush
