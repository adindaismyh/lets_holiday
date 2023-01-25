@extends('layouts.admin')
@section('konten')
@foreach( $data as $d )
<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Edit Profile</h4>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ url('wisata/update') }}" enctype="multipart/form-data">
                    @csrf

                    <input hidden type="text" name="id" value="{{ $d->id }}">
                    <input hidden type="text" name="foto_lama_utama" value="{{ $d->foto_utama }}">
                    <input hidden type="text" name="foto_lama_1" value="{{ $d->foto_1 }}">
                    <input hidden type="text" name="foto_lama_2" value="{{ $d->foto_2 }}">
                    <input hidden type="text" name="foto_lama_3" value="{{ $d->foto_3 }}">

                    <div class="row">
                        <div class="col-md-6 pr-1">
                            <div class="form-group">
                                <label>Kategori</label>
                                <select class="js-example-basic-single3 form-control" name="kategori_id" required>
                                    <option value="" selected>{{ $d->nama_kategori }}</option>
                                    @foreach ($kategori as $k)
                                    <option value="{{ $k->id }}">{{ $k->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 pl-1">
                            <div class="form-group">
                                <label>Fasilitas</label>
                                <input id="fasilitas" type="text" class="form-control form-control-sm" name="fasilitas"
                                    placeholder="{{ $d->fasilitas }}" value="" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 pr-1">
                            <div class="form-group">
                                <label>Foto Utama</label>
                                <input name="foto_utama" type="file">
                            </div>
                        </div>
                        <div class="col-md-6 pl-1">
                            <div class="form-group">
                                <label>Nama Tempat</label>
                                <input id="name" type="text" class="form-control form-control-sm" name="nama" value=""
                                placeholder="{{ $d->nama }}" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 pr-1">
                            <div class="form-group">
                                <label>Foto 1</label>
                                <input name="foto_1" type="file">
                            </div>
                        </div>
                        <div class="col-md-6 pl-1">
                            <div class="form-group">
                                <label>Lokasi</label>
                                <input id="lokasi" type="text" class="form-control form-control-sm" name="lokasi"
                                   placeholder="{{ $d->lokasi }}" value="" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 pr-1">
                            <div class="form-group">
                                <label>Foto 2</label>
                                <input name="foto_2" type="file">
                            </div>
                        </div>
                        <div class="col-md-6 pl-1">
                            <div class="form-group">
                                <label>Deskripsi</label>
                                <input id="deskripsi" type="text" class="form-control form-control-sm" name="deskripsi"
                                   placeholder="{{ $d->deskripsi }}" value="" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 pr-1">
                            <div class="form-group">
                                <label>Foto 3</label>
                                <input name="foto_3" type="file">
                            </div>
                        </div>
                        <div class="col-md-6 pl-1">
                            <div class="form-group">
                                <label>Tiket Masuk</label>
                                <input id="harga_tiket" type="text" class="form-control form-control-sm"
                                   placeholder="{{ $d->harga_tiket }}" name="harga_tiket" value="" required>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success btn-fill pull-right">Save</button>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection
