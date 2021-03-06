@extends('dashboard.layouts.main')

@section('container')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Co-Driver</h1>
        <a href="/admin/codriver/create" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus fa-sm text-white-50"></i> Tambah Co-Driver Baru</a>
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
                        @foreach ($codriver as $cd)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $cd->nama_codriver }}</td>
                            <td>{{ $cd->telepon_codriver }}</td>
                            <td>{{ $cd->jumlah_minus }}</td>
                            <td>{{ $cd->jumlah_kesalahan }}</td>
                            <td>
                                <a href="/admin/codriver/{{ $cd->nik_codriver }}" style="color: blue"><i
                                        class="px-1 fas fa-eye"></i></a>
                                <a href="/admin/codriver/{{ $cd->nik_codriver }}/edit" style="color: orange"><i
                                        class="px-1 fas fa-edit"></i></a>
                                <form action="/admin/codriver/{{ $cd->nik_codriver }}" method="POST"
                                    class="px-1 d-inline">
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