@extends('layout.master')

@section('content')
    <h2 class="text-center">Update Data Pendaftar</h2>
    <div class="container border border-dark mt-3 p-2">
        <form action="/pendaftar/update/{{$pendaftar->id}}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nisn">NISN</label>
                <input type="number" class="form-control" id="nisn" name="nisn" value="{{ old('nisn') ?? $pendaftar->nisn }}">
                @error('nisn')
                    <p style="color:red;font-style:italic;">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{  old('nama') ?? $pendaftar->nama }}">
                @error('nama')
                    <p style="color:red;font-style:italic;">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="no_hp">No Hp</label>
                <input type="number" class="form-control" id="no_hp" name="no_hp" value="{{  old('no_hp') ?? $pendaftar->no_hp }}">
                @error('no_hp')
                    <p style="color:red;font-style:italic;">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea name="alamat" id="alamat" class="form-control">{{  old('alamat') ?? $pendaftar->alamat }}</textarea>
                @error('alamat')
                    <p style="color:red;font-style:italic;">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="nem">NEM</label>
                <input type="number" class="form-control" id="nem" name="nem" value="{{  old('nem') ?? $pendaftar->nem }}">
                <small class="form-text text-muted">Contoh Penulisan NEM : 385</small>
                @error('nem')
                    <p style="color:red;font-style:italic;">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary w-100 p-2">Daftar</button>
        </form>
    </div>
@endsection