@extends('layouts.user')
@section('content')
<main>
    <!-- Hero Start-->
    <div class="hero-area2  slider-height2 hero-overly2 d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap text-center pt-50">
                        <h2>Detail Kabar Wisata</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Hero End -->
    <!--================Blog Area =================-->
    <section class="blog_area single-post-area section-padding">
        <div class="container">
            <div class="row">
                @foreach( $data as $d )
                <div class="col-lg-12 posts-list">
                    <div class="single-post">
                        <div class="feature-img">
                            <img class="img-fluid" src="{{ asset('foto_berita/'.$d->foto) }}" alt="">
                        </div>
                        <div class="blog_details">
                            <h2>{{ $d->judul }}
                            </h2>
                            <ul class="blog-info-link mt-3 mb-4">
                                <li><a href="#"><i class="fa fa-user"></i> {{ $d->nama }}</a></li>
                                <li><a href="#"><i class="fa fa-calendar-day"></i>
                                        {{ date('d-F-Y', strtotime($d->tanggal)) }}</a></li>
                            </ul>
                            <p class="excert">
                                {{ $d-> deskripsi }}
                            </p>
                        </div>
                    </div>
                    <!-- <div class="navigation-top">
                        <div class="d-sm-flex justify-content-between text-center">
                            <p class="like-info"><span class="align-middle"><i class="fa fa-heart"></i></span> Lily and
                                4
                                people like this</p>
                            <div class="col-sm-4 text-center my-2 my-sm-0">
                            </div>
                        </div>
                    </div> -->
                </div>
                <!-- <div class="blog-author">
                    <h2>{{ $d->nama }}</h2>
                    <div class="media align-items-center">
                        <img src="{{ asset('assets/img/blog/author.png')}}" alt="">
                        <div class="media-body">
                            <a href="#">
                                <h4>Harvard milan</h4>
                            </a>
                        </div>
                    </div>
                </div> -->
            </div>
            @endforeach
        </div>
        </div>
    </section>
    <!--================ Blog Area end =================-->
</main>
@stop
