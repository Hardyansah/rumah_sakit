@extends('layouts.app') 
@section('content')


<div class="col-md-12">
    <a href="{{route('dokters.create')}}" class="btn btn-primary">Tambah</a>
</div>
<br/>
<div class="container">
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead class="thead-dark">
                <h3>Data Dokter</h3>
                <tr>
                    <th>NIP</th>
                    <th>Nama</th>
                    <th>Spesialis</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($dokters as $dokter)
                <tr>
                    <td>{!!$dokter->nip!!}</td>
                    <td>{!!$dokter->nama!!}</td>
                    <td>{!!$dokter->spesialis!!}</td>
                    <td>
                        <form method="POST" action="{{route('dokters.destroy', $dokter->id)}}" class="form-horizontal" role="form">
                            {{csrf_field()}}{{method_field('DELETE')}}
                            <a href="{{route('dokters.edit', $dokter->id)}}" class="btn btn-primary"> Edit</a>
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