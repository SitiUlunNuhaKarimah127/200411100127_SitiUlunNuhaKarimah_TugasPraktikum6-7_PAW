@extends('layouts.main')
@section('container')

            <div class="card-body">
                <form action="/create" method="POST">
                    @csrf
                  <div class="form-group row">
                      <label class="col-sm-2 col-form-label">NRP</label>
                      <div class="col-md-3">
                        <input type="text" class="form-control" name="nrp" placeholder="200411100010">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">NAMA </label>
                      <div class="col-md-3">
                        <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">EMAIL</label>
                      <div class="col-md-3">
                        <input type="email" class="form-control" name="email" placeholder="nama@gmail.com">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="input_stock_barang" class="col-sm-2 col-form-label">ALAMAT</label>
                      <div class="col-md-3">
                        <input type="text" class="form-control" name="alamat" placeholder="Nama Kota">
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-10">
                        <button type="submit" class="btn btn-dark">Tambah</button>
                        <a href="index.php"><button type="button" class="btn btn-dark" >Batal</button></a>
                      </div>
                    </div>
                </form>
            </div>

@endsection
