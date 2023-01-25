@extends('layouts.admin')
@section('konten')
@foreach( $data as $d )
<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Edit Kategori</h4>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ url('kategori/update') }}" enctype="multipart/form-data">
                    @csrf
                    <input hidden type="text" name="id" value="{{ $d->id }}">
                    <input hidden type="text" name="foto_lama" value="{{ $d->foto }}">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Kategori</label>
                                <input name="nama" type="text" class="form-control" placeholder="{{ $d->nama }}"
                                    value="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Deskripsi</label>
                                <textarea name="deskripsi" rows="4" cols="80" class="form-control"
                                    placeholder="Here can be your description"
                                    value="">{{ $d->deskripsi }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Foto</label>
                                <input name="foto" type="file" class="form-control" placeholder="{{ $d->foto }}"
                                    value="">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-info btn-fill pull-right">Update Kategori</button>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection