@extends('layouts.admin')
@section('kategori','active')
@section('konten')
<div class="row">
    <div class="col-md-12">
        <div class="card strpied-tabled-with-hover">
            <div class="card-header ">
                <h4 class="card-title">Kategori</h4>
                <h4 class="card-title"><a href="" class="btn btn-primary btn-fill" class="nav-link" data-toggle="modal"
                        data-target="#add">Add</a></h4>
            </div>
            <div class="card-body table-full-width table-responsive">
                <table class="table table-hover table-striped">
                    <thead>
                        <th>#</th>
                        <th>Kategori</th>
                        <th>Deskripsi</th>
                        <th>Foto</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @foreach( $data as $d )
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $d->nama }}</td>
                            <td>{{ Str::limit($d->deskripsi, 10, $end='...') }}</td>
                            <td>{{ $d->foto }}</td>
                            <td>
                                <a href="{{ url('kategori/edit/'.$d->id) }}" class="btn btn-warning btn-fill">Edit</a>
                                <a href="{{ url('kategori/delete/'.$d->id) }}" class="btn btn-danger btn-fill">Hapus</a>
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
                            <form method="POST" action="{{ url('kategori/save') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    <label for="nama" class="col-md-4 col-form-label text-md-left">Kategori</label>
                                    <div class="col-lg-8">
                                        <input id="nama" type="text" class="form-control form-control-sm" name="nama"
                                            value="" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="deskripsi"
                                        class="col-md-4 col-form-label text-md-left">Deskripsi</label>
                                    <div class="col-lg-8">
                                        <textarea name="deskripsi" rows="4" cols="80" class="form-control"
                                            placeholder="Masukkan Deskripsi !!!"
                                            value=""></textarea>
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
