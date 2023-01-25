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
    <!-- listing Area Start -->
    <div class="listing-area pt-120 pb-120">
        <div class="container">
            <div class="row">
                <!-- Left content -->
                <!-- 
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="row">
                        <div class="col-12">
                            <div class="small-section-tittle2 mb-45">
                                <h4>Filter</h4>
                            </div>
                        </div>
                    </div>
                    <div class="category-listing mb-50">
                        <div class="single-listing">
                            <div class="select-job-items1">
                                <select name="select1">
                                    <option value="">Urutkan Berdasarkan</option>
                                    <option value="">Rating Tertinggi</option>
                                    <option value="">Banyak Dikunjungi</option>
                                    <option value="">Banyak Dicari</option>
                                </select>
                            </div>
                            <div class="select-job-items1">
                                <select name="select1">
                                    <option value="">Semua Kategori</option>
                                    <option value="">Budaya</option>
                                    <option value="">Bahari</option>
                                    <option value="">Agrowisata</option>
                                    <option value="">Cagar Alam</option>
                                </select>
                            </div>
                            <div class="select-job-items2">
                                <select name="select2">
                                    <option value="">Semua Lokasi</option>
                                    <option value="">Kecamatan Blimbing</option>
                                    <option value="">Kecamatan Kedungkandang</option>
                                    <option value="">Kecamatan Klojen</option>
                                    <option value="">Kecamatan Lowokwaru</option>
                                </select>
                            </div>
                            <div class="select-Categories pt-140 pb-20">
                            </div>
                            <div class="select-Categories pt-140 pb-20">
                                <label class="container">Gratis
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                            </div>

                        </div>
                    </div>
                </div> -->
                <!-- Right content -->
                <div class="col-xl-8 col-lg-8 col-md-6">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="count mb-35">
                                <span>Tempat Ditemukan</span>
                            </div>
                        </div> 
                    </div>
                    <!-- listing Details Stat-->
                    <div class="listing-details-area">
                        <div class="container">
                            <div class="row">
                                @foreach( $data as $d )
                                <div class="col-lg-6 ">
                                    <div class="single-listing mb-30">
                                        <div class="list-img">
                                            <img src="{{ asset('foto_wisata/'.$d->foto_utama ) }}" alt="">
                                            <!-- <span>Open</span> -->
                                        </div>
                                        <div class="list-caption">
                                            <span>Rp{{$d->harga_tiket}}</span>
                                            <h3><a href="{{ url('user/detailwisata/'.$d->id) }}">{{$d->nama}}</a></h3>
                                            <p>{{$d->lokasi}}</p>
                                            <p>{{$d->fasilitas}}</p>
                                            <div class="list-footer">
                                                <ul>
                                                    <!-- <li>+10 278 367 9823</li>
                                                        <li>contact@midnight.com</li> -->
                                                </ul>
                                                <tr>
                                                    <td style="text-align: center;width: 80px;">
                                                        <h1 style="font-size: 15px;"><img src="{{ asset('assets/img/icon/rating kuning.png') }}"
                                                                style="align-self: inherit;width: 200px;"></h1>
                                                    </td>
                                                </tr>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- listing-area Area End -->

</main>
@stop
