@extends('layouts.user')
@section('content')
<main>
    <!-- Hero Start-->
    <div class="hero-area2  slider-height2 hero-overly2 d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap text-center pt-50">
                        <h2>Kabar Berita Wisata</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Hero End -->
    <!--================Blog Area =================-->
    <section class="blog_area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-5 mb-lg-12">
                    <div class="blog_left_sidebar">
                        @foreach( $data as $d)
                        <article class="blog_item">
                            <div class="blog_item_img">
                                <img class="card-img rounded-0 resize" src="{{ asset('foto_berita/'.$d->foto) }}" alt="">
                                <a href="#" class="blog_item_date">
                                    <h3>{{ date('d', strtotime($d->tanggal)) }}</h3>
                                    <p>{{ date('F', strtotime($d->tanggal)) }}</p>
                                </a>
                            </div>

                            <div class="blog_details">
                                <a class="d-inline-block" href="{{ url('blog/detail/'.$d->id) }}">
                                    <h2> {{ $d->judul }}</h2>
                                </a>
                                <p> {{ Str::limit($d->deskripsi, 60, $end='...') }}
                                </p>
                                <ul class="blog-info-link">
                                    <li><i class="fa fa-user"></i> {{ $d->nama }}</li>
                                </ul>
                            </div>
                        </article>
                        <br>
                        <br>
                        @endforeach
                    </div>
                </div>
            </div>
    </section>
</main>
@stop
