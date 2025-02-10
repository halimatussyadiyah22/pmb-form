<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('admin/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('admin/dist/css/adminlte.min.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

  @stack('styles')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper d-flex flex-column min-vh-100">
  @include('komponen.navbar')

  <aside class="main-sidebar sidebar-light elevation-4 bg-light">
    <a href="" class="brand-link text-center">
      <img src="{{asset('storage/internal/stti.png')}}" alt="Logo" class="brand-image">
      <span class="brand-text font-weight-bold text-dark">PMB</span>
    </a>
    @include('komponen.sidebar')
  </aside>

  <div class="content-wrapper"> 
    <section class="content-header">
      <div class="container-fluid text-center">
        <div class="row mb-2">
          <div class="col">
            <h1 class="display-5 fw-bold text-uppercase border-bottom pb-2 text-primary">@yield('title')</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-md-7">
            <div class="card border-primary shadow-sm">
              <div class="card-header bg-light text-primary">
                <h3 class="card-title fw-bold">@yield('title')</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool text-primary" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool text-primary" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                @yield('content')
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div> 

  <footer class="main-footer mt-auto text-center py-3 bg-light text-primary">
    <strong>&copy; 2014-2021 <a href="https://adminlte.io" class="text-primary">AdminLTE.io</a>.</strong> All rights reserved.
    <div class="mt-1">Version 3.2.0</div>
  </footer>
</div>

<script src="{{asset('admin/plugins/jquery/jquery.min.js')}}"></script>
<script src="{{asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('admin/dist/js/adminlte.min.js')}}"></script>
@stack('scripts')
</body>
</html>
