@extends('layout.master')

@section('content')
<div class="container">
    <div class="card mt-3 shadow p-3 mb-5 bg-white rounded border">
        <div class="card-header">DATA SISWA</div>
        <div class="card-body">
            <h5 class="card-title">Nama : {{ $pendaftar->nama }}</h5>
            <h5 class="card-title">NISN : {{ $pendaftar->nisn }}</h5>
            <h5 class="card-title">Alamat : {{ $pendaftar->alamat }}</h5>
            <h5 class="card-title">NEM : {{ $pendaftar->nem }}</h5>
            <h5 class="card-title" style="display:none;" id="details">Sekolah : {{ $pendaftar->sekolah->nama }}</h5>
            <a href="" class="btn btn-primary" id="submit">Riwayat Pendidikan</a>
        </div>
    </div>
</div>


<script>
    let submit = document.getElementById('submit');
    submit.addEventListener('click' , function(){
        event.preventDefault();
        let details = document.getElementById('details');
        details.style.display = "block";
    });
</script>
@endsection