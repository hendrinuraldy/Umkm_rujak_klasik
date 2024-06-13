@extends('admin.layouts.loginLayout')

@section('content')
    <!----------------------- Main Container -------------------------->

    <div class="container d-flex justify-content-center align-items-center min-vh-100">

        <!----------------------- Login Container -------------------------->

        <div class="row border rounded-5 p-3 bg-white shadow box-area">

            <!--------------------------- Left Box ----------------------------->

            <div class="col-md-5 rounded-4 d-flex justify-content-center align-items-center flex-column left-box"
                style="background: #103cbe;">
                <div class="featured-image mb-3">
                    <img src="{{ asset('halaman login/img/akun.jpg') }}" class="img-fluid" style="width: 250px;">
                </div>
                <p class="text-white fs-2" style="font-family: 'Courier New', Courier, monospace; font-weight: 600;">Be
                    Verified</p>
                {{-- <small class="text-white text-wrap text-center"
                    style="width: 17rem;font-family: 'Courier New', Courier, monospace;">Lorem ipsum dolor sit amet.</small> --}}
            </div>

            <!-------------------- ------ Right Box ---------------------------->

            <div class="col-md-7 right-box">
                <div class="row align-items-center">
                    <div class="header-text mb-4">
                        <h2>Login</h2>
                        <p>Silakan login untuk masuk ke halaman admin.</p>
                        <a href="/">Kembali ke Home</a>
                    </div>
                    <form action="{{ route('login.process') }}" method="post">
                        @csrf
                        @if ($message = Session::get('errors'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ $message }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif
                        <div class="input-group mb-3">
                            <input type="text" class="form-control form-control-lg bg-light fs-6" placeholder="Username"
                                name="username" required>
                        </div>
                        <div class="input-group mb-1">
                            <input type="password" class="form-control form-control-lg bg-light fs-6" placeholder="Password"
                                name="password" required>
                        </div>

                        <div class="input-group mb-3 mt-3">
                            <button class="btn btn-lg btn-primary w-100 fs-6" type="submit">Login</button>
                        </div>
                    </form>

                    {{-- <div class="row">
                        <small>Don't have account? <a href="#">Sign Up</a></small>
                    </div> --}}
                </div>
            </div>

        </div>
    </div>
@endsection
