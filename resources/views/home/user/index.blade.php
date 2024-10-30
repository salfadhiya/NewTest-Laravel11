@extends('layouts.master')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2>Halaman Data User</h2>
                    <a class="btn btn-primary" href="/user/tambah">Tambah</a>
                </div>
                <div class="card-body">

                    <div
                        class="table-responsive"
                    >
                        <table
                            class="table table-responsiv"
                        >
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Email</th>
                                    <th>No Telephone</th>
                                    <th>Tanggal</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($user as $u )

                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$u->name}}</td>
                                    <td>{{$u->email}}</td>
                                    <td>{{$u->notelp}}</td>
                                    <td>{{$u->created_at}}</td>
                                    <td>
                                        <a class="btn btn-warning" href="/user/edit/{{$u->id}}">Edit</a>
                                        <a class="btn btn-danger" href="/user/delete/{{$u->id}}">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>

@endsection
