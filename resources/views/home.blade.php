@extends('layouts.user')
@section('content')
<main>
    <!-- Hero Area Start-->
    <div class="slider-area hero-overly">
        <div class="single-slider hero-overly  slider-height d-flex align-items-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-9">
                        <!-- Hero Caption -->
                        <div class="hero__caption">
                            <span>Jelajahi Tempat Wisata</span>
                            <h1>Temukan Tempat Hebat</h1>
                        </div>
                    </div>
                </div>
            </div>

        </div> 
    </div>
    <!--Hero Area End -->
    <!-- Popular search Start -->
    <div class="popular-location section-padding30">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Section Tittle -->
                    <div class="section-tittle text-center mb-80">
                        <span>Wisata</span>
                        <h2>List Wisata dari Let's Holiday</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach( $data as $d )
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-location mb-30">
                        <div class="location-img">
                            <img src="{{ asset('foto_wisata/'.$d->foto_utama ) }}" alt="">
                        </div>
                        <div class="location-details">
                            <p>{{ $d->nama }}</p>
                            <a href="{{ url('user/detailwisata/'.$d->id ) }}" class="location-btn">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <!-- More Btn -->
            <div class="row justify-content-center">
                <div class="room-btn pt-20">
                    <a href="{{ url('user/kategoriwisata' ) }}" class="btn view-btn1">Lihat Semua Tempat</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Popular search End -->

    @include('layouts.fitur')
    @include('layouts.service')
    @include('layouts.testimonial')

    <div class="subscribe-area section-bg pt-150 pb-150"
        data-background="{{ asset('assets/img/gallery/section_bg04.jpg') }}">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8">
                    <!-- Section Tittle -->
                    <div class="section-tittle section-tittle2 text-center mb-40">
                        <span>Let's Holiday</span>
                        <h2>Jadikan Liburanmu Menyenangkan Dengan Let's Holiday</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Subscribe Area End -->
</main>
@stop
