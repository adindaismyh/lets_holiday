@extends('layouts.admin')
@section('hotel','active')
@section('konten')
<div class="row">
    <div class="col-md-12">
        <div class="card strpied-tabled-with-hover">
            <div class="card-header ">
                <h4 class="card-title">Hotel</h4>
                <h4 class="card-title"><a href="" class="btn btn-primary btn-fill" class="nav-link" data-toggle="modal"
                        data-target="#add">Add</a></h4>
            </div>
            <div class="card-body table-full-width table-responsive">
                <table class="table table-hover table-striped">
                    <thead>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Letak</th>
                        <th>Harga Hotel</th>
                        <th>Fasilitas</th>
                        <th>Foto</th>
                        <th>Deskripsi</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @foreach( $data as $d )
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $d->nama }}</td>
                            <td>{{ $d->letak }}</td>
                            <td>{{ $d->harga_hotel }}</td>
                            <td>{{ $d->fasilitas }}</td>
                            <td>{{ $d->foto }}</td>
                            <td>{{ Str::limit($d->deskripsi, 10, $end='...') }}</td>
                            <td>
                                <a href="{{ url('hotel/edit/'.$d->id) }}" class="btn btn-warning btn-fill">Edit</a>
                                <a href="{{ url('hotel/delete/'.$d->id) }}" class="btn btn-danger btn-fill">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Add Data -->
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="add" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <br>
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <form method="POST" action="{{ url('hotel/save') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    <label for="nama" class="col-md-4 col-form-label text-md-left">Nama</label>
                                    <div class="col-lg-8">
                                        <input id="nama" type="text" class="form-control form-control-sm" name="nama"
                                            value="" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="letak" class="col-md-4 col-form-label text-md-left">Letak</label>
                                    <div class="col-lg-8">
                                        <input id="letak" type="text" class="form-control form-control-sm" name="letak"
                                            value="" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="harga_hotel" class="col-md-4 col-form-label text-md-left">Harga</label>
                                    <div class="col-lg-8">
                                        <input id="harga_hotel" type="text" class="form-control form-control-sm" name="harga_hotel"
                                            value="" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fasilitas" class="col-md-4 col-form-label text-md-left">Fasilitas</label>
                                    <div class="col-lg-8">
                                        <input id="fasilitas" type="text" class="form-control form-control-sm" name="fasilitas"
                                            value="" required>
                                    </div>
                                </div>
                                <!-- Foto -->
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-left"
                                        for="exampleInputFile">Foto</label>
                                    <div class="col-lg-8">
                                        <input name="foto" type="file">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="deskripsi"
                                        class="col-md-4 col-form-label text-md-left">Deskripsi</label>
                                    <div class="col-lg-8">
                                        <textarea name="deskripsi" rows="4" cols="80" class="form-control"
                                            placeholder="Masukkan Deskripsi !!!" value=""></textarea>
                                    </div>
                                </div>
                                <div class="col-form-label text-md-center">
                                    <button type="submit" class="btn btn-primary btn-fill">Add</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
