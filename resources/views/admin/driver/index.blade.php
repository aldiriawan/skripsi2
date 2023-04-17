@extends('dashboard.layouts.main')

@section('container')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Driver</h1>
        <a href="/admin/driver/create" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus fa-sm text-white-50"></i> Tambah Driver Baru</a>
    </div>

    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
    </div>
    @endif

    <div class="card shadow mb-4 text-center">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Lengkap</th>
                            <th>Telepon</th>
                            <th>Jumlah Minus</th>
                            <th>Jumlah Kesalahan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($driver as $d)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $d->nama_driver }}</td>
                            <td>{{ $d->telepon_driver }}</td>
                            <td>{{ $d->jumlah_minus }}</td>
                            <td>{{ $d->jumlah_kesalahan }}</td>
                            <td>
                                <div class="d-flex justify-content-center">
                                    <a href="/admin/driver/{{ $d->nik_driver }}" class="btn btn-primary btn-sm mr-2"
                                        title="Lihat Detail">
                                        <i class="fas fa-info-circle" data-bs-toggle="tooltip" data-bs-placement="top"
                                            title="Lihat Detail"></i>
                                    </a>
                                    <a href="/admin/driver/{{ $d->nik_driver }}/edit"
                                        class="btn btn-warning btn-sm mr-2" title="Edit Data">
                                        <i class="fas fa-edit" data-bs-toggle="tooltip" data-bs-placement="top"
                                            title="Edit Data"></i>
                                    </a>
                                    <form action="/admin/driver/{{ $d->nik_driver }}" method="POST" class="d-inline"
                                        title="Hapus Data">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-danger btn-sm" style="color: rgb(255, 255, 255)"
                                            onclick="return confirm('Apakah anda yakin?')">
                                            <i class="fas fa-trash" data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="Hapus Data"></i>
                                        </button>
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