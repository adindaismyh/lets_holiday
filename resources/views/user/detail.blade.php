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

                        <div class="search-form">
                            <a href="#">Search</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @foreach( $data as $d )
    <!--Hero End -->
    <div class="popular-location">
        <div class="jumbotron" style="background-color: white;padding-bottom: rem;margin-bottom: -10rem;">
            <div class="section-tittle text-center mb-20">
                <h1 style="margin-top: 15 px;">{{ $d->nama }}</h1>
            </div>
            <div class="container" style="align-self: center;">
                <img src="{{ asset('foto_wisata/'.$d->foto_utama ) }}" style="padding-left: 25rem;">
            </div>
        </div>
    </div>

    <!-- Listing caption start-->
    <div class="listing-caption section-padding2" style="padding-bottom: 0%;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h3 class="mb-20">Deskripsi Wisata</h3>
                    <p class="mb-30">{{ $d->deskripsi }} </p>
                </div>
            </div>
        </div>
    </div>
    <!--  Start -->
    <div class="popular-location section-padding5" style="padding-top: 0%;">
        <div class="container">
            <div class="jumbotron" style="background-color:white; padding-top: 0rem;">
                <!-- Section Tittle -->
                <table>
                    <tbody>
                        <tr>
                            <td style="padding-left: 10rem; font-size: 20px;">Letak </td>
                            <td style="padding-left: 5rem;font-size:16px;"> {{ $d->lokasi }}</td>
                        </tr>
                        <tr>
                            <td style="padding-left: 10rem; font-size: 20px;">Jenis Wisata </td>
                            <td style="padding-left: 5rem;font-size:16px;">: {{ $d->kategori }}</td>
                        </tr>
                        <tr>
                            <td style="padding-left: 10rem; font-size: 20px;">Akses Kendaraan </td>
                            <td style="padding-left: 5rem;font-size:16px;">: Mobil, Sepeda motor, Bus</td>
                        </tr>
                        <tr>
                            <td style="padding-left: 10rem; font-size: 20px;">Harga Tiket </td>
                            <td style="padding-left: 5rem;font-size:16px;">: Rp. {{ $d->harga_tiket }}</td>
                        </tr>
                        <tr>
                            <td style="padding-left: 10rem; font-size: 20px;">Fasislitas</td>
                            <td style="padding-left: 5rem;font-size:16px;">: {{ $d->fasilitas }}</td>
                        </tr>
                        <tr>
                            <td style="padding-left: 5rem; font-size: 20px; padding-top: 1rem;">
                                <img src="{{ asset('foto_wisata/'.$d->foto_1 ) }}" style="width: 240px;height: 230px;">
                            </td>
                            <td style="padding-left: 5rem;font-size:20px;padding-right: 0rem;padding-top: 1rem;">
                                <img src="{{ asset('foto_wisata/'.$d->foto_2 ) }}" style="width: 240px;height: 230px;">
                            </td>
                            <td style="padding-left: 5rem; font-size:20px;padding-right: 5rem;padding-top: 1rem;">
                                <img src="{{ asset('foto_wisata/'.$d->foto_3 ) }}" style="width: 240px;height: 230px;">
                            </td>
                        </tr>
                    </tbody>
                </table>
                @if (Route::has('login'))
                @auth
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <h3 class="mb-20" style="padding-top: 4rem;">REVIEW </h3>
                        <!-- Form -->
                        <form enctype="multipart/form-data" class="form-contact contact_form mb-80" action="{{ url('review/send') }}" method="post">
                            @csrf
                            <?php
                                if(function_exists('date_default_timezone_set')) date_default_timezone_set('Asia/Jakarta');
                                $tanggal_now = date('Y-m-d');
                                $jam_now = date('H:i:s');

                                echo "<input hidden name='jam' value='$jam_now'>" . "</input>";
                                echo "<input hidden name='tanggal' value='$tanggal_now'>" . "</input>";
                            ?>
                            <div class="row">
                                <div class=" col-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100 error" name="review" id="message" cols="30"
                                            rows="9" placeholder="Enter Message" placeholder=" Enter
                                            Message"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <button name="simpan" type="submit" class="button button-contactForm boxed-btn">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
                @endauth
                @endif
            </div>
        </div>
    </div>
    @endforeach
    <!-- End -->

    <!-- listing Details Stat-->
    <div class="listing-details-area">
        <div class="container">
            <h2 class="row justify-content-center">Informasi Penginapan Terdekat</h2>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-listing mb-30">
                        <div class="list-img">
                            <img src="{{ asset('assets/img/gallery/penginapan 1.png') }}" alt="">
                            <!-- <span>Open</span> -->
                        </div>
                        <div class="list-caption">

                            <h3><a href="listing_details.html">Restu Alternatif</a></h3>
                            <p>Jalan Lintas Selatan Rt/Rw 42/05 Gajahrejo, Gedangan, Malang, Jawa Timur 65178</p>
                            <p>LOKASI TERDEKAT:
                                Pantai Ungapan:2KM ke timur,
                                Pantai Watu Leter:3.5KM ke timur,
                                Pantai Goa China:4km ke tenggara</p>
                            <div class="list-footer">
                                <ul>
                                    <li>+10 278 367 9823</li>
                                    <li>contact@midnight.com</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-listing mb-30">
                        <div class="list-img">
                            <img src="{{ asset('assets/img/gallery/penginapan 2.png') }}" alt="">
                            <!-- <span>Open</span> -->
                        </div>
                        <div class="list-caption">

                            <h3><a href="listing_details.html">Lina Homestay</a></h3>
                            <p>Jalan Lintas Selatan Rt/Rw 42/05 Gajahrejo, Gedangan, Malang, Jawa Timur 65178</p>
                            <p>LOKASI TERDEKAT:
                                Pantai Ungapan:2KM ke timur,
                                Pantai Watu Leter:3.5KM ke timur,
                                Pantai Goa China:4km ke tenggara</p>
                            <div class="list-footer">
                                <ul>
                                    <li>+10 278 367 9823</li>
                                    <li>contact@midnight.com</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-listing mb-30">
                        <div class="list-img">
                            <img src="{{ asset('assets/img/gallery/penginapan 3.png') }}" alt="">
                            <!-- <span>Open</span> -->
                        </div>
                        <div class="list-caption">

                            <h3><a href="listing_details.html">Homestay Sendang Biru</a></h3>
                            <p>Jalan Lintas Selatan Rt/Rw 42/05 Gajahrejo, Gedangan, Malang, Jawa Timur 65178</p>
                            <p>LOKASI TERDEKAT:
                                Pantai Ungapan:2KM ke timur,
                                Pantai Watu Leter:3.5KM ke timur,
                                Pantai Goa China:4km ke tenggara</p>
                            <div class="list-footer">
                                <ul>
                                    <li>+10 278 367 9823</li>
                                    <li>contact@midnight.com</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- listing Details End -->
    </div>
    </div>
    <!-- Listing caption End-->

    </div>    
    <div class="comments-area">
        <div class="comment-list" style="padding-left: 4rem;">
            <div class="single-comment justify-content-between d-flex">
                <div class="user justify-content-between d-flex">
                    <div class="thumb">
                        <img src="{{ asset('assets/img/comment/comment_1.png') }}" alt="">
                    </div>
                    <div class="desc">
                        <p class="comment">
                            Pantai batu bekung lebih indah jika bida datang ketempatnya secara langsung, jadi pengen
                            lagi kesana sama doi
                        </p>
                        <div class="d-flex justify-content-between">
                            <div class="d-flex align-items-center">
                                <h5>
                                    <a href="#">Galaksi Aldebaran</a>
                                </h5>
                                <p class="date">Senin, 17 January 2021 9.15 WIB </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="comment-list" style="padding-left: 4rem;">
            <div class="single-comment justify-content-between d-flex">
                <div class="user justify-content-between d-flex">
                    <div class="thumb">
                        <img src="{{ asset('assets/img/comment/comment_2.png') }}" alt="">
                    </div>
                    <div class="desc">
                        <p class="comment">
                            Di pantai bekung kita bisa main air di kolam yang ada pada bibir pantai walaupun
                            ombaknya besar
                        </p>
                        <div class="d-flex justify-content-between">
                            <div class="d-flex align-items-center">
                                <h5>
                                    <a href="#">Areksa</a>
                                </h5>
                                <p class="date">Kamis, 16 Maret 2021 15.00 WIB </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="comment-list" style="padding-left: 4rem;">
            <div class="single-comment justify-content-between d-flex">
                <div class="user justify-content-between d-flex">
                    <div class="thumb">
                        <img src="{{ asset('assets/img/comment/comment_3.png') }}" alt="">
                    </div>
                    <div class="desc">
                        <p class="comment">
                            Pleaseee bawa aku kesanaaaaa.........
                        </p>
                        <div class="d-flex justify-content-between">
                            <div class="d-flex align-items-center">
                                <h5>
                                    <a href="#">Arga Pramana</a>
                                </h5>
                                <p class="date">Minggu, 6 Juni 2021 19.01 WIB </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>
@stop
