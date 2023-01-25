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
                            <h3>Update Password <strong><br> Let's Holiday</strong></h3>
                        </div>
                        <form method="POST" action="{{ route('password.update') }}">
                            @csrf
                            <input type="hidden" name="token" value="{{ $token }}">
                            <div class="form-group first">
                                <label for="username"></label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ $email ?? old('email') }}" required autocomplete="email"
                                    autofocus>

                            </div>
                            <div class="form-group last mb-4">
                                <label for="password">Password</label>
                                <input id="password" type="password" class="form-control input" name="password" required
                                    autocomplete="new-password">
                            </div>
                            <div class="form-group last mb-4">
                                <label for="password">Confirm Password</label>
                                <input id="password-confirm" type="password" class="form-control input"
                                    name="password_confirmation" required autocomplete="new-password">
                            </div>

                            <input type="submit" value="Update Password" class="btn text-white btn-block btn-primary">
                        </form>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
@endsection
