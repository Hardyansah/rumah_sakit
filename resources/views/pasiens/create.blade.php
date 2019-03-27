@extends('layouts.app') 
@section('content')
<h3>Tambah Data Pasien</h3>
<form action="{{route('pasiens.store')}}" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}

    <div class="form-group">
        <label for="nik" class="label">NIK</label>
        <input type="text" name="nik" id="nik" autofocus="true" class="form-control">
        <div class="text-danger">{!! $errors->first('nik')!!}</div>
        <div class="clear"></div>
    </div>

    <div class="form-group">
        <label for="nama" class="label">NAMA</label>
        <input type="text" name="nama" id="nama" class="form-control">
        <div class="text-danger">{!! $errors->first('nama')!!}</div>
        <div class="clear"></div>
    </div>

    <div class="form-group">
        <label for="alamat" class="label">ALAMAT</label>
        <input type="text" name="alamat" id="alamat" class="form-control">
        <div class="text-danger">{!! $errors->first('alamat')!!}</div>
        <div class="clear"></div>
    </div>

    <div class="form-group">
        <label for="tgl_lahir" class="label">TANGGAL LAHIR</label>
        <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control">
        <div class="text-danger">{!! $errors->first('tgl_lahir')!!}</div>
        <div class="clear"></div>
    </div>

    <div class="form-group">
        <label for="file" class="label">LAMPIRAN</label>
        <input type="file" name="file" id="file" class="form-control-file border">
        <div class="text-danger">{!! $errors->first('file')!!}</div>
        <div class="clear"></div>
    </div>

    <br/>
    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="{{route('pasiens.index')}}" class="btn btn-primary">Cancel</a><br/>
</form>
@endsection