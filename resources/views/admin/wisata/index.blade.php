@extends('layouts.admin')
@section('wisata','active')
@section('konten')
<div class="row">
    <div class="col-md-12">
        <div class="card strpied-tabled-with-hover">
            <div class="card-header ">
                <h4 class="card-title">Wisata</h4>
                <h4 class="card-title"><a href="" class="btn btn-primary btn-fill" class="nav-link" data-toggle="modal"
                        data-target="#add">Add</a></h4>
            </div>
            <div class="card-body table-full-width table-responsive">
                <table class="table table-hover table-striped">
                    <thead>
                        <th>#</th>
                        <th>Kategori</th>
                        <th>Nama Tempat</th> 
                        <th>Deskripsi</th>
                        <th>Lokasi</th>
                        <th>Tiket Masuk</th>
                        <th>Fasilitas</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @foreach( $data as $d )
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $d->nama_kategori }}</td>
                            <td>{{ $d->nama }}</td>
                            <td>{{ Str::limit($d->deskripsi, 10, $end='...') }}</td>
                            <td>{{ $d->lokasi }}</td>
                            <td>{{ $d->harga_tiket }}</td>
                            <td>{{ $d->fasilitas }}</td>
                            <td>
                                <a href="{{ url('wisata/edit/'.$d->id) }}" class="btn btn-warning btn-fill">Edit</a>
                                <a href="{{ url('wisata/delete/'.$d->id) }}" class="btn btn-danger btn-fill">Hapus</a>
                            </td>
                        </tr> 
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <br>
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <form method="POST" action="{{ url('wisata/save') }}" enctype="multipart/form-data">
                                @csrf
                                <table class="table table-hover">
                                    <tbody>
                                        <tr>
                                            <th scope="row">Kategori ID</th>
                                            <td>
                                                <select class="form-control" name="kategori_id" required>
                                                    <option value="" selected>Kategori Wisata</option>
                                                    @foreach ($kategori as $k)
                                                    <option value="{{ $k->id }}">{{ $k->nama }}</option>
                                                    @endforeach
                                                </select>
                                            </td>
                                            <td>Fasilitas</td>
                                            <td>
                                                <input id="fasilitas" type="text" class="form-control form-control-sm"
                                                    name="fasilitas" value="" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Foto Utama</th>
                                            <td><input name="foto_utama" type="file"></td>
                                            <td>Nama Tempat</th>
                                            <td>
                                                <input id="name" type="text" class="form-control form-control-sm"
                                                    name="nama" value="" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Foto 1</th>
                                            <td><input name="foto_1" type="file"></td>
                                            <td>Lokasi</td>
                                            <td>
                                                <input id="lokasi" type="text" class="form-control form-control-sm"
                                                    name="lokasi" value="" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Foto 2</th>
                                            <td><input name="foto_2" type="file"></td>
                                            <td>Deskripsi</tdth>
                                            <td>
                                                <textarea name="deskripsi" rows="4" cols="100" class="form-control"
                                                    placeholder="Masukkan Deskripsi !!!"
                                                    value=""></textarea>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Foto 3</th>
                                            <td><input name="foto_3" type="file"></td>
                                            <td>Tiket Masuk</td>
                                            <td>
                                                <input id="harga_tiket" type="text" class="form-control form-control-sm"
                                                    name="harga_tiket" value="" required>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
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
