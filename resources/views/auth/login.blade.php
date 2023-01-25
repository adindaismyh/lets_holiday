@extends('layouts.login')
@section('konten')
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-6 order-md-2">
                <img src="{{ asset('assets/login/images/undraw_file_sync_ot38.svg')}}" alt="Image" class="img-fluid">
            </div>
            <div class="col-md-6 contents">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="mb-4">
                            <h3>Selamat Datang <strong>Holidayers</strong></h3>
                            <p class="mb-4">Semoga Harimu Menyenangkan</p>
                        </div>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group first">
                                <label for="username">Email</label>
                                <input name="email" type="text" class="form-control" id="email">

                            </div>
                            <div class="form-group last mb-4">
                                <label for="password">Password</label>
                                <input name="password" type="password" class="form-control" id="password">

                            </div>

                            <!-- <div class="d-flex mb-5 align-items-center">
                                @if (Route::has('password.request'))
                                <span class="ml-auto"><a href="{{ route('password.request') }}" class="forgot-pass">Lupa Password?</a></span>
                                @endif
                            </div> -->

                            <input type="submit" value="Log In" class="btn text-white btn-block btn-primary">

                            <span class="d-block text-center my-4 text-muted" ><a href="{{ route('register') }}">Belum Punya Akun? Daftar Sekarang</a></span>

                            <!-- <span class="d-block text-center my-4 text-muted"> or sign in with</span>

                            <div class="social-login text-center">
                                <a href="{{ url('auth/google') }}" class="google">
                                    <span class="icon-google mr-3"></span>
                                </a>
                            </div> -->
                        </form>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
@endsection
