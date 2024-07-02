@extends('layouts.nav')
@section('title', 'Login')
@section('content')


<section id="hero" class="starter-section section">
<body class="hold-transition login-page" style="width:1000 rem">

    @include('sweetalert::alert')

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-6">
                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
    
                @if (session()->has('loginError'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('loginError') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <main class="form-signin w-100 m-auto">
                    <h1 class="h3 mb-3 fw-normal text-center">Please sign in</h1>
                    <form action="/login" method="post">
                        @csrf
                        {{-- <label for="">Email</label> --}}
                        <label for="email">Email address</label>
                        <div class="form-floating mt-2 mb-1">
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror "
                                id="email" value="{{ old('email') }}" autofocus placeholder="name@example.com" required>
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <label for="">Password</label>
                        <div class="form-floating ">
                            {{-- <label for="password">Password</label> --}}
                            <input type="password" name="password" class="form-control " id="password" required
                                placeholder="Password">
    
                        </div>
    
    
                        <button class="btn btn-primary w-100 py-2 mt-3" type="submit">Log in</button>
    
                    </form>
                    <small class="d-block text-center mt-2">Not Registered? <a href="/register">Register Now</a></small>
                </main>
            </div>
        </div>
  </div>

</section>

    <script src="/assets/plugins/jquery/jquery.min.js"></script>

    <script src="/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="/assets/dist/js/adminlte.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                var forms = document.getElementsByClassName('needs-validation');
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>
</body>

</html>
@endsection