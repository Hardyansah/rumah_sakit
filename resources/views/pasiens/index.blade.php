@extends('layouts.app') 
@section('content')


<div class="col-md-12">
    <a href="{{route('pasiens.create')}}" class="btn btn-primary">Tambah</a>
</div>
<br/>
<div class="container">
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead class="thead-dark text-center">
                <h3>Data Pasien</h3>
                <tr>
                    <th>NIK</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Tanggal Lahir</th>
                    <th>Lampiran</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pasiens as $pasien)
                <tr>
                    <td>{!!$pasien->nik!!}</td>
                    <td>{!!$pasien->nama!!}</td>
                    <td>{!!$pasien->alamat!!}</td>
                    <td>{!!$pasien->tgl_lahir!!}</td>
                    <td><img src="{{ asset($pasien->file)}}" height="50"></img>
                    </td>
                    <td>
                        <form method="POST" action="{{route('pasiens.destroy', $pasien->id)}}" class="form-horizontal" role="form">
                            {{csrf_field()}}{{method_field('DELETE')}}
                            <a href="{{route('pasiens.show', $pasien->id)}}" class="btn btn-primary"> View</a>
                            <a href="{{route('pasiens.edit', $pasien->id)}}" class="btn btn-primary"> Edit</a>
                            <input type="submit" value="Delete" class="btn btn-danger">
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection