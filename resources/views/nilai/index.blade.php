@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                Data Nilai Mahasiswa
                <a href="{{ route('tambah.nilai') }}" class="btn btn-md btn-primary float-right">Tambah Data</a>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <th>NO.</th>
                                <th>NPM</th>
                                <th>NAMA MAHASISWA</th>
                                <th>NAMA MATA KULIAH</th>
                                <th>SKS</th>
                                <th>NILAI</th>
                                <th>AKSI</th>
                            </tr>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($nilai as $ni)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $ni->mahasiswa->npm }}</td>                        
                                <th>{{ $ni->mahasiswa->user->name }}</th>
                                <td>{{ $ni->makul->nama_makul }}</td>
                                <td>{{ $ni->makul->sks }}</td>
                                <td>{{ $ni->nilai }}</td>
                                <td>
                                    <a href="{{ route('edit.nilai', $ni->id) }}" class="btn btn-sm btn-warning">EDIT</a>
                                    <a href="{{ route('hapus.nilai', $ni->id) }}" class="btn btn-sm btn-danger">HAPUS</a>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
