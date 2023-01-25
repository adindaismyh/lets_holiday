@extends('layouts.admin')
@section('review','active')
@section('konten')
<div class="row">
    <div class="col-md-12">
        <div class="card strpied-tabled-with-hover">
            <div class="card-header ">
                <h4 class="card-title">Review</h4>
            </div>
            <div class="card-body table-full-width table-responsive">
                <table class="table table-hover table-striped">
                    <thead>
                        <th>#</th>
                        <th>Pengirim</th>
                        <th>Review</th>
                        <th>Tanggal Review</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @foreach( $data as $d )
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $d->name }}</td>
                            <td>{{ Str::limit($d->review, 10, $end='...') }}</td>
                            <td>{{ date('H:i', strtotime($d->jam)) .' '. date('d-m-Y', strtotime($d->tanggal)) }}</td>
                            <td>
                                <a href="{{ url('review/delete/'.$d->id) }}" class="btn btn-danger btn-fill">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
