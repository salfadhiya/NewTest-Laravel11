@extends('layouts.master')
@section('content')


<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2>Halaman tambah data user</h2>
                </div>
                <form action="/user/simpan" method="POST">
                    @csrf
                <div class="card-body">

                    <div class="mb-3">
                        <label for="" class="form-label">Nama</label>
                        <input
                            type="text"
                            class="form-control"
                            name="name"
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                        />
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Email</label>
                        <input
                            type="email"
                            class="form-control"
                            name="email"
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                        />
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Password</label>
                        <input
                            type="password"
                            class="form-control"
                            name="password"
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                        />
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">No Telephone</label>
                        <input
                            type="number"
                            class="form-control"
                            name="notelp"
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                        />
                    </div>

                </form>
                    <button class="btn btn-primary" type="submit">Kirim</button>


                </div>
            </div>
        </div>
    </div>
</div>

@endsection
