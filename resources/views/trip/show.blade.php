@extends('dashboard.layouts.main')

@section('container')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Laporan Admin</h1>
    </div>

    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
    </div>
    @endif

    <div class="card shadow mb-4">
        <div class="card-body">
            <h4>Tanggal Trip: {{ $tanggal_trip }}</h4>
            <div class="table-responsive">
                <table class="table table-bordered table-hover" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Kode Armada</th>
                            <th>Rute</th>
                            <th>Ritase</th>
                            <th>Driver</th>
                            <th>Co-Driver</th>
                            <th>Jumlah Penumpang</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($trip as $t)
                        <tr>
                            <td>{{ $t->ao_armada->kode_armada}}</td>
                            <td>{{ $t->ao_rute->nama_rute}}</td>
                            <td>{{ $t->ao_ritase->kode_ritase}}</td>
                            <td>{{ $t->ao_driver->nama_driver }}</td>
                            <td>{{ $t->ao_codriver->nama_codriver }}</td>
                            <td>{{ $t->jumlah_penumpang_admin }}</td>
                            <td>
                                <a href="/admin/{{ $t->tanggal_trip }}/edit" style="color: orange"><i
                                        class="px-1 fas fa-edit"></i></a>
                                <form action="/admin/{{ $t->tanggal_trip }}" method="POST" class="px-1 d-inline">
                                    @method('delete')
                                    @csrf
                                    <button class="border-0" style="color: red"
                                        onclick="return confirm('Apakah anda yakin?')"><i
                                            class="fas fa-trash danger"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @endsection