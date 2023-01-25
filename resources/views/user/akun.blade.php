@extends('layouts.user')
@section('content')
<main>
    <div class="hero-area3 hero-overly2 d-flex align-items-center ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-9">
                    <div class="hero-cap text-center pt-50 pb-20">
                        <h2>MY PROFIL</h2>
                        @foreach( $data as $d)
                        <img src="{{ asset('foto_user/'.$d->foto) }}" style="height: 200px;width: 200px;">
                        @endforeach
                    </div>
                    <!--Hero form -->
                </div>
            </div>
        </div>
    </div>
    <!--Hero End -->
    <!--Start akun-->
    <div class=" jumbotron" style="background-image:url('gambar7.jpg'); background-size: cover;">
        <div class="row">
            <div class="col col-lg-6">
                <img src="{{ asset('assets/img/akun/akun.svg') }}" alt="" style="width: 600px;height: 600px;">
            </div>
            <div class="col col-lg-6" style="padding-left: 5rem;">
                <div class="jumbotron"
                    style="background-color: darkcyan; padding-bottom: 1rem;padding-top: 1rem; width: 500px;height: 580px;">
                    <h1
                        style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;text-align: center;">
                        AKUN SAYA</h1>
                    @foreach( $data as $d)
                    <form method="POST" action="{{ url('akun/save') }}" enctype="multipart/form-data"
                        style="padding-bottom: 0rem;">
                        <input hidden type="text" name="id" value="{{ $d->id }}">
                        <input hidden type="text" name="foto_lama" value="{{ $d->foto }}">
                        <div class="form-group">
                            <label for="exampleInputemail" style="color:rgba(0, 0, 0)">Email</label>
                            <input type="text" class="form-control" name="email" id="exampleInputemail"
                                aria-describedby="emailHelp" value="{{ $d->email }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputnama" style="color:rgba(0, 0, 0)">Nama</label>
                            <input type="text" class="form-control" name="name" id="exampleInputnama"
                                value="{{ $d->name }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputalamat" style="color:rgba(0, 0, 0)">Nomor Telfon</label>
                            <input type="text" class="form-control" name="nomer_telfon" id="exampleInputalamat">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputalamat" style="color:rgba(0, 0, 0)">Alamat</label>
                            <input type="text" class="form-control" name="alamat" id="exampleInputalamat">
                        </div>
                        <div class="form-group">
                            <label for="birthday" style="color:rgba(0, 0, 0)">Birthday</label>
                            <input type="date" class="form-control" name="tanggal" id="exampleInputnama">
                        </div>
                        <!-- Foto -->
                        <div class="form-group">
                            <label for="birthday" style="color:rgba(0, 0, 0)">Foto</label>
                            <input type="file" name="foto" id="exampleInputnama">
                        </div>
                        <button name="simpan" type="submit" style="float: right;" class="button button-contactForm boxed-btn">Send</button>
                    </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
