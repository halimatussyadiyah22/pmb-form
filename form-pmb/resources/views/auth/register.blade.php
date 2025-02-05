<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="row w-75">
        <div class="col-md-5 bg-primary text-white p-4 rounded-start">
            <h2>PMB</h2>
            <p>Sekolah Tinggi Teknologi Indonesia</p>
            <a href="/login"><button  class="btn btn-light w-100" >Login</button></a>
            
        </div>
        <div class="col-md-7 bg-light p-4 rounded-end shadow">
            <div class="d-flex justify-content-center align-items-center mb-3 ">
            <img class="mr-3" src="{{ asset('storage/internal/stti.png') }}" alt="logo" style="width: 50px; height: auto; " >

                <h1 class="text-blue">STTI</h1>
                </div>
            
            <form action="/register" method="POST">
                @csrf
                <div class="mb-3">
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Full Name" value="{{ old('name') }}" >
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <input type="text" name="nisn" class="form-control @error('nisn') is-invalid @enderror" placeholder="NISN" value="{{ old('nisn') }}" >
                    @error('nisn')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <input type="date" name="tl" class="form-control @error('tl') is-invalid @enderror" value="{{ old('tl') }}" >
                    @error('tl')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary w-100">Register</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>