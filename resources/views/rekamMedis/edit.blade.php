@extends('layouts.app') 
@section('content')
<h3>Tambah Data Pasien</h3>
<form action="{{route('dokters.update',$dokter->id)}}" method="POST" enctype="multipart/form-data">
    {{csrf_field()}} {{method_field('PUT')}}

    <div class="form-group">
        <label for="nip" class="label">NIP</label>
        <input type="text" name="nip" id="nip" autofocus="true" class="form-control" value="{{$value = $dokter->nip}}">
        <div class="text-danger">{!! $errors->first('nip')!!}</div>
        <div class="clear"></div>
    </div>

    <div class="form-group">
        <label for="nama" class="label">NAMA</label>
        <input type="text" name="nama" id="nama" class="form-control" value="{{$value = $dokter->nama}}">
        <div class="text-danger">{!! $errors->first('nama')!!}</div>
        <div class="clear"></div>
    </div>

    <div class="form-group">
        <label for="spesialis" class="label">SPESIALIS</label>
        <input type="text" name="spesialis" id="spesialis" class="form-control" value="{{$value = $dokter->spesialis}}">
        <div class="text-danger">{!! $errors->first('spesialis')!!}</div>
        <div class="clear"></div>
    </div>

    <br/>
    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="{{route('dokters.index')}}" class="btn btn-primary">Cancel</a><br/>
</form>
@endsection