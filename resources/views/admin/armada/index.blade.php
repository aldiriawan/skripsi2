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
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Kode Armada</th>
                            <th>Tipe Armada</th>
                            <th>Merek Armada</th>
                            <th>Mulai Operasi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($armadas as $armada)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $armada->kode_armada }}</td>
                            <td>{{ $armada->tipe_armada }}</td>
                            <td>{{ $armada->merek_armada }}</td>
                            <td><?= date('d F Y'); ?></td>
                            <td>
                                <a href="/admin/armada/{{ $armada->kode_armada }}" style="color: blue"><i
                                        class="px-1 fas fa-eye"></i></a>
                                <a href="/admin/armada/{{ $armada->kode_armada }}" style="color: orange"><i
                                        class="px-1 fas fa-edit"></i></a>
                                <form action="/admin/armada/{{ $armada->kode_armada }}" method="POST"
                                    class="px-1 d-inline">
                                    @method('delete')
                                    @csrf
                                    <button class="border-0 px-1" style="color: red"
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