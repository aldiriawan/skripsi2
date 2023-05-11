@extends('dashboard.layouts.main')

@section('container')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Armada</h1>
        <a href="/admin/armada/create" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus fa-sm text-white-50"></i> Tambah Armada Baru</a>
    </div>

    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
    </div>
    @endif

    <!-- Table -->
    <div class="card shadow mb-4 text-center">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Kode Armada</th>
                            <th>Merek Armada</th>
                            <th>Kapasitas Armada</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($armadas as $armada)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $armada->kode_armada }}</td>
                            <td>{{ $armada->merek_armada }}</td>
                            <td>{{ $armada->ao_tipe_armada->kapasitas }}</td>
                            <td>
                                <div class="d-flex justify-content-center">
                                    <a href="/admin/armada/{{ $armada->kode_armada }}/edit"
                                        class="btn btn-warning btn-sm mr-2">
                                        <i class="fas fa-edit" data-bs-toggle="tooltip" data-bs-placement="top"
                                            title="Edit Data"></i>
                                    </a>
                                    <form action="/admin/armada/{{ $armada->kode_armada }}" method="POST"
                                        class="d-inline" title="Hapus Data"
                                        onsubmit="return confirm('Apakah anda yakin ingin menghapus armada ini?')">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                                    </form>
                                </div>
                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @endsection