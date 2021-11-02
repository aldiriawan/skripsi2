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
                            <th>NIK</th>
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
                            <td>{{ $d->nik_driver }}</td>
                            <td>{{ $d->telepon_driver }}</td>
                            <td>{{ $d->jumlah_minus }}</td>
                            <td>{{ $d->jumlah_kesalahan }}</td>
                            <td>
                                <a href="/admin/driver/{{ $d->nik_driver }}" style="color: blue"><i
                                        class="px-1 fas fa-eye"></i></a>
                                <a href="/admin/driver/{{ $d->nik_driver }}/edit" style="color: orange"><i
                                        class="px-1 fas fa-edit"></i></a>
                                <form action="/admin/driver/{{ $d->nik_driver }}" method="POST" class="px-1 d-inline">
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