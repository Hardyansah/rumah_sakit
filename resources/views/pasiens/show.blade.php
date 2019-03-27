@extends("layouts.app") 
@section("content")

<h1>
    <center>Rekam Medis</center>
</h1>
<div class="pad col-md-12">
    <h2>Data Pasien</h2>
    <p>Nama : {!! $pasien->nama !!}</p>
    <p>Alamat : {!! $pasien->alamat !!}</p>
    <p>Tanggal Lahir : {!! $pasien->tgl_lahir !!}</p>
</div>


<div class="pad col-md-12">
    <h2>Data Dokter</h2>
    <p>Nama : Dadang</p>
    <p>Spesialis : UMUM</p>
</div>

<div class="pad col-md-12 text-right">
    <h5>Tanggal Pemeriksaan : 12 Maret 2019</h5>
</div>

<div class="pad col-md-12">

</div>

<div class="pad col-md-12">
    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>No Rekam Medis</th>
                <th>Keluhan</th>
                <th>Pemeriksaan</th>
                <th>Penunjang</th>
                <th>Diagnosa</th>
                <th>Terapi</th>
                <th>Pengobatan</th>
                <th>Alergi Obat</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>asdasd</td>
                <td>asdasd</td>
                <td>asdsad</td>
                <td>sadasd</td>
                <td>asdsadas</td>
                <td>asdasd</td>
                <td>asdsad</td>
                <td>asdasd</td>
            </tr>
            {{-- @foreach($pasiens as $pasien)
            <tr>
                <td>{!!$pasien->keluhan!!}</td>
                <td>{!!$pasien->pemeriksaan!!}</td>
                <td>{!!$pasien->penunjang!!}</td>
                <td>{!!$pasien->diagnosa!!}</td>
                <td>{!!$pasien->terapi!!}</td>
                <td>{!!$pasien->pengobatan!!}</td>
                <td>{!!$pasien->alergi!!}</td>
            </tr>
            @endforeach --}}
        </tbody>
    </table>
</div>
@endsection