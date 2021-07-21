@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header"><center>
                Edit Data Mahasiswa</center>
                </div>

                <div class="card-body">   
                    <form action="{{ route('update.nilai', $nilai->id) }}" method="post" class="form-item">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nama Mahasiswa</label>
                        <select name="mahasiswa_id" id="mahasiswa_id" class="form-control col-md-10">
                            <option value="" disabled selected>--Pilih User--</option>
                            @foreach ($mahasiswa as $mh)
                            <option value="{{ $mh->id }}" {{ $nilai->mahasiswa_id == $mh->id ? 'selected' : ''  }} > {{$mh->user->name}}</option>                            
                            @endforeach
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="nama_makul">Nama Matakuliah</label>
                        <select name="makul_id" id="makul_id" class="form-control col-md-10">
                            <option value="" disabled selected>--Pilih User--</option>
                            @foreach ($makul as $mkl)
                            <option value="{{ $mkl->id }}"{{ $nilai->makul_id == $mkl->id ? 'selected' : '' }} > {{$mkl->nama_makul}}</option>
                             @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="nilai">Nilai</label>
                        <input type="number" name="nilai" class="form-control col-md-6" placeholder="Masukkan Nilai" maxlength="4" value="{{ is_null
                        ($nilai) ? '' : $nilai->nilai }}">
                    </div>


                    <div class="form-group">
                        <div class="form-row float-right">
                            <div class="col">
                                <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                                <a href="{{ route('nilai') }}" class="btn btn-md btn-danger">BATAL</a>
                            </div>
                        </div>
                    </div>
                
                </form>
                    @foreach ($mahasiswa as $mhs)
                    
                    @endforeach

                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
