@extends('layouts.user')
@section('content')
<main>

    <!-- Hero Start-->
    <div class="hero-area3 hero-overly2 d-flex align-items-center ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-9">
                    <div class="hero-cap text-center pt-50 pb-20">
                        <h2>Cari Wisata</h2>
                    </div>
                    <!--Hero form -->
                    <form action="#" class="search-box search-box2">
                        <div class="input-form">
                            <input type="text" placeholder="Apa Yang Ingin Anda Cari?">
                        </div>
                        <div class="select-form">
                            <div class="select-itms">
                                <select name="select" id="select1">
                                    <option value="">Semua Lokasi</option>
                                    <option value="">Kecamatan Blimbing</option>
                                    <option value="">Kecamatan Kedungkandang</option>
                                    <option value="">Kecamatan Klojen</option>
                                    <option value="">Kecamatan Lowokwaru</option>
                                </select>
                            </div>
                        </div>
                        <!-- Search box -->
                        <div class="search-form">
                            <a href="#">Search</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--Hero End -->
    <!-- Categories Area Start -->

    <div class="categories-area section-padding20">
        <div class="container">
            <div class=" jumbotron" style="background-color:transparent;margin-bottom: 0rem;padding-bottom: 0rem;">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Section Tittle -->
                        <div class="section-tittle text-center mb-3">
                            <Span>Kategori</span>
                            <h1>Wisata Berdasarkan Kategorinya</h1>
                        </div>
                    </div>
                </div>

                <div class="row ">
                    @foreach( $data as $d )
                    <div class="col-lg-3 col-md-4 col-sm-5">
                        <div class="single-cat text-center mb-50" style="padding-top: 2rem;padding-bottom: 1rem;">
                            <div class="cat-icon">
                                <img src="{{ asset('foto_kategori/'.$d->foto) }}" width="200px" height="150px" alt="">
                            </div>
                            <br>
                            <div class="cat-cap">
                                <h5><a
                                        href="{{ url('user/detailkategori/'.$d->id) }}">{{ $d->nama }}</a>
                                </h5>
                                <p>{{ Str::limit($d->deskripsi, 60, $end='...') }}
                                </p>
                                <a href="{{ url('user/detailkategori/'.$d->id )}}">SEE ALL
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
    <!-- Categories Area End -->
</main>
@endsection