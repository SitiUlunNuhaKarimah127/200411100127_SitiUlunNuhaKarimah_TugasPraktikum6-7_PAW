@extends('layouts/main')
@section('container')


    <!-- As a heading -->
    <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>NO.</th>
                                <th>NRP</th>
                                <th>NAMA</th>
                                <th>EMAIL</th>
                                <th>ALAMAT</th>
                                <th cosplan="2">Action</th>
                            </tr>

                        </thead>
                        <tbody>
                        @foreach ($mahasiswa as $item)


                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{$item->nrp}}</td>
                                <td>{{$item->nama}}</td>
                                <td>{{$item->email}}</td>
                                <td>{{$item->alamat}}</td>
                                <td><a href="/{{ $item->nrp }}/edit"><button> Edit</button>

                                <form action="/{{ $item->nrp }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('delete')
                                    <button >Hapus</button>
                                </form>
                            </tr>
                        @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
 @endsection

