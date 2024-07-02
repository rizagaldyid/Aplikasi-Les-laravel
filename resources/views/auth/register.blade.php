@extends('layouts.nav')
@section('title', 'Login')
@section('content')

<body class="hold-transition register-page">
    @include('sweetalert::alert')


    
    <div class="container mt-5 col-5">
        <div class="row justify-content-center ">
            <div class="card-header text-center ">
                <h1>Rumah Piano</h1>
            </div>
            <div class="card-body ">
                <form class="needs-validation" novalidate action="/register" method="POST">
                    @csrf
                    <label for="">Nama</label>
                    <div class="form-floating mb-3 mt-2">
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                            placeholder="Full name" value="{{ old('name') }}" required>
                        @error('name')
                            <span class="invalid-feedback text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <label for="">Email</label>
                    <div class="form-floating mb-3 mt-2">
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                            placeholder="Email" value="{{ old('email') }}" required>
                        @error('email')
                            <span class="invalid-feedback text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    
                    <label for="">Password</label>
                    <div class="form-floating mb-3 mt-2">
                        <input type="password" name="password" id="password"
                            class="form-control @error('password') is-invalid @enderror" placeholder="Password"
                            required>
                        @error('password')
                            <span class="invalid-feedback text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <label for="">Retype Password</label>
                    <div class="form-floating mb-3 mt-2">
                        <input type="password" name="passwordConfirm" id="passwordConfirm"
                            class="form-control @error('passwordConfirm') is-invalid @enderror"
                            placeholder="Retype password" required>
                        @error('passwordConfirm')
                            <span class="invalid-feedback text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="row">
                        {{-- <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="agreeTerms" name="terms" required>
                                <label for="agreeTerms">
                                    I agree to the <a href="#">terms</a>
                                </label>
                            </div>
                        </div> --}}

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary w-100 py-2 mt-3">Daftar</button>
                        </div>

                    </div>
                </form>
                <a href="/login" class="d-block text-center mt-2">Saya sudah punya akun</a>
            </div>

        </div>
    </div>
    
  


    <script src="/assets/plugins/jquery/jquery.min.js"></script>

    <script src="/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    {{-- <script src="/assets/dist/js/adminlte.min.js"></script> --}}

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
