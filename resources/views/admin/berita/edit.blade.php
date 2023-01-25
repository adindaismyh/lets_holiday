@extends('layouts.admin')
@section('konten')
@foreach( $data as $d )
<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Edit Berita</h4>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ url('berita/update') }}" enctype="multipart/form-data">
                    @csrf
                    <input hidden type="text" name="id" value="{{ $d->id }}">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Judul</label>
                                <input name="judul" type="text" class="form-control" 
                                    value="{{ $d->judul }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Deskripsi</label>
                                <textarea name="deskripsi" rows="4" cols="80" class="form-control"
                                     value="">{{ $d->deskripsi }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Tanggal</label>
                            <input id="tanggal" type="date" class="form-control" name="tanggal" value="{{ $d->tanggal }}" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-info btn-fill pull-right">Update Berita</button>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection
