@extends('master')

@section('title')
Identitas Wali
@endsection

@section('content')

    

    @if ($pembayaran)
        
            <form action="/pembayaran/{{$pembayaran->id}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                @php
                    $pembayarans = [
                        'bukti' => 'Pas Foto',
                        
                    ];
                @endphp

                @foreach ($pembayarans as $key => $label)
                    <div class="form-group mb-3">
                        <label for="{{ $key }}" class="form-label">{{ $label }}</label>
                        <div class="mb-2">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal-{{ $key }}">
                                <img src="{{ asset("storage/pembayaran/" . $pembayaran->$key) }}" 
                                     alt="{{ $label }}" 
                                     class="img-thumbnail" 
                                     style="width: 150px; height: auto; cursor: pointer;">
                            </a>
                        </div>
                        <input type="file" class="form-control" name="{{ $key }}" id="{{ $key }}">
                        @error($key)
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Modal untuk melihat gambar -->
                    <div class="modal fade" id="modal-{{ $key }}" tabindex="-1" aria-labelledby="modalLabel-{{ $key }}" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">{{ $label }}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body text-center">
                                    <img src="{{ asset("storage/pembayaran/" . $pembayaran->$key) }}" 
                                         alt="{{ $label }}" 
                                         class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach

                <div class="d-flex justify-content-between mt-4">
                    <a href="{{ url('/') }}" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-primary">Update pembayaran</button>
                </div>
            </form>

    @else
        @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @endif

@endsection

@push('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(pembayaran).ready(function() {
        setTimeout(function() {
            $(".alert.success").fadeOut("slow");
        }, 3000);
    });
</script>
@endpush
