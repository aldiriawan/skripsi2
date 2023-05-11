@extends('dashboard.layouts.main')

@section('container')

<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center">
        <h1 class="h3 text-gray-800">Laporan Checker Tanggal : {{ strftime('%d %B %Y', strtotime($tanggal_trip)) }}</h1>
        <div>
            <a href="/checker/" class="btn btn-secondary"><i class="fas fa-arrow-left" title="Kembali"></i>
                Kembali</a>
        </div>
        @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
        </div>
        @endif
    </div>

    <div class="card shadow mt-4 mb-4">
        <div class="card-body">
            <h4></h4>
            <div class="table-responsive">
                <table class="table table-bordered table-hover" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Kode Armada</th>
                            <th>Rute</th>
                            <th>Ritase</th>
                            <th>Jumlah Penumpang</th>
                            <th>Jumlah Penumpang Checker</th>
                            <th>Jumlah Minus</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($trip as $t)
                        <tr>
                            <td>{{ $t->ao_armada->kode_armada}}</td>
                            <td>{{ $t->ao_rute->kode_rute}}</td>
                            <td>{{ $t->ao_ritase->kode_ritase}}</td>
                            <td>{{ $t->jumlah_penumpang_admin }}</td>
                            <td>{{ $t->jumlah_penumpang_checker }}</td>
                            <td>{{ $t->jumlah_minus }}</td>
                            <td>
                                <a href="/admin/{{ $t->tanggal_trip }}/edit" class="btn btn-warning btn-sm mr-2"><i
                                        class="fas fa-edit" data-bs-toggle="tooltip" data-bs-placement="top"
                                        title="Edit Data Perjalanan"></i></a>
                                <form action="/admin/{{ $t->tanggal_trip }}" method="POST" class="d-inline"
                                    title="Hapus Data Perjalanan">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-danger btn-sm" style="color: rgb(255, 255, 255)"
                                        onclick="return confirm('Apakah anda yakin?')" title="Hapus Data Perjalanan"><i
                                            class="fas fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection