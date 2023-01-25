@extends('layouts.user')
@section('content')
<main>
    <!-- Hero Start-->
    <div class="hero-area2  slider-height2 hero-overly2 d-flex align-items-center ">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap text-center pt-50">
                        <h2>About us</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Hero End -->
    <!-- About Details Start -->
    <div class="about-details section-padding2">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-md-10">
                    <!-- Section Tittle -->
                    <div class="section-tittle section-tittle5 mb-80">
                        <span>Tentang Let's Holiday</span>
                        <h2>Membuat anda nyaman saat liburan karena sudah terencana dan persiapan lebih baik</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between">
                <div class="col-lg-4">
                    <h3>Visi Kami</h3>
                    <p>Menjadi platform pusat pencarian informasi pariwisata yang ada di Indonesia</p>
                </div>
                <div class="col-lg-5">
                    <h3>Misi Kami</h3>
                    <p>Memberikan informasi pariwisata yang lengkap dan detail guna memberi kenyamanan anda saat
                        berwisata</p>
                </div>
            </div>
        </div>
    </div>
    <!-- About Details End -->
    <!-- peoples-visit Start -->
    <div class="peoples-visit dining-padding-top">
        <!-- Single Left img -->
        <div class="single-visit left-img">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-lg-8">
                        <div class="visit-caption">
                            <span>Let's Holiday Ada Untuk Kalian</span>
                            <h3 style="font-size: 17pt;">Temukan wisata yang menarik di Kabupaten Malang dengan Let's
                                Holiday</h3>

                            <!--Single Visit categories -->
                            <div class="visit-categories mb-40">
                                <div class="visit-location">
                                    <span class="flaticon-travel"></span>
                                </div>
                                <div class="visit-cap">
                                    <h4 style="font-size: 22pt;">Informasi Tempat Wisata di Malang</h4>
                                    <p>Holidayers bisa mencari dan mendapatkan informasi mengenai wisata di kabupaten
                                        malang yang dicari, mulai
                                        dari fasilitas yang tersedia hingga informasi penginapan yang terdekat.
                                    </p>
                                </div>
                            </div>
                            <!--Single Visit categories -->
                            <div class="visit-categories">
                                <div class="visit-location">
                                    <span class="flaticon-work"></span>
                                </div>
                                <div class="visit-cap">
                                    <h4 style="font-size: 22pt;">Rekomendasi Wisata</h4>
                                    <p>Holidayers bisa mendapat rekomendasi tempat wisata dari pencarian populer, rating
                                        tempat populer, dan melihat wisata
                                        dari setiap kategori, sehingga holidayers bisa tidak merasa kebingungan untuk
                                        memilih destinasi liburan.
                                    </p>
                                </div>
                            </div>
                            <div class="visit-categories" style="padding-top: 3rem;padding-bottom: 1rem;">
                                <div class="visit-location">
                                    <span class="flaticon-travel"></span>
                                </div>
                                <div class="visit-cap">
                                    <h4 style="font-size: 22pt;">Daftarkan Wisata</h4>
                                    <p>User yang telah melakukan sign up pada website ini, dapat mendaftarkan atau
                                        memberikan informasi wisata
                                        yang sekiranya belum ada pada website Let's Holiday ini
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- peoples-visit End --> 
    
    @include('layouts.service') 
    @include('layouts.team') 

</main>
@stop
