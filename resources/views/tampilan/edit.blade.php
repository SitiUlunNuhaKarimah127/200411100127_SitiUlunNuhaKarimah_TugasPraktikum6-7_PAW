@extends('layouts.main')
@section('container')
    <div class="container-fluid" style="padding-top: 50px;>
            <!-- Data Tabel -->
            <div class=" card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark">Edit Data Mahasiswa</h6>
        </div>
        <div class="card-body">
            <form action="/{{ $mahasiswa->nrp }}/edit" method="POST">
                @csrf
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">NRP</label>
                    <div class="col-md-3">
                        <input type="text" class="form-control" name="nrp" value="{{ old('nrp', $mahasiswa->nrp) }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">NAMA</label>
                    <div class="col-md-3">
                        <input type="text" class="form-control" name="nama" value="{{ old('nrp', $mahasiswa->nama) }}">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">EMAIL</label>
                    <div class="col-md-3">
                        <input type="text" class="form-control" name="email"
                            value="{{ old('nrp', $mahasiswa->email) }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">ALAMAT</label>
                    <div class="col-md-3">
                        <input type="text" class="form-control" name="alamat"
                            value="{{ old('nrp', $mahasiswa->alamat) }}">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-dark" name="update">Update</button>
                        <a href="/"><button type="button" class="btn btn-dark" name="batal">Batal</button></a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>
@endsection
