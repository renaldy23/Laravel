@extends('layout.master')

@section('content') 
<a class="btn btn-success m-3" href="/pendaftar/create">Tambah Pendaftar</a>

@if($pendaftar->count())
    <table class="table table-hover">
        <thead>
            <tr>
            <th scope="col">NISN</th>
            <th scope="col">Nama</th>
            <th scope="col">No Hp</th>
            <th scope="col">Alamat</th>
            <th scope="col">NEM</th>
            <th scope="col">Action</th>
            <th scope="col">Detail</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pendaftar as $p)
                <tr>
                    <td>{{ $p->nisn }}</td>
                    <td>{{ $p->nama }} </td>
                    <td>{{ $p->no_hp }}</td>
                    <td>{{ $p->alamat }}</td>
                    <td>{{ $p->nem }}</td>
                    <td>
                        <a href="/pendaftar/edit/{{ $p->id }}" class="btn btn-primary float-left">Edit</a>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                            Delete
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Apakah anda yakin ingin menghapus?</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    NISN : {{ $p->nisn }}<br>
                                    Nama : {{ $p->nama }}
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <form action="/pendaftar/delete/{{ $p->id }}" method="post">
                                        @csrf
                                        {{ method_field('DELETE') }}
                                        <button class="btn btn-danger" id="confirm">Delete</button>
                                    </form>
                                </div>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <a href="/pendaftar/show/{{$p->id}}" class="btn btn-info">More</a>
                    </td>
                </tr>
            @endforeach
        {{$pendaftar->links()}}
@else
    <div>
        <p class="text-center">Saat ini belum ada data Pendaftar</p>
    </div>
@endif
            
        </tbody>
    </table>

@endsection
