@extends('dashboard.layouts.main')

@section('container')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Karyawan</h1>
    </div>

    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
    </div>
    @endif

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Lengkap</th>
                            <th>Alamat Email</th>
                            <th>Posisi</th>
                            <th>Mulai Bekerja</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->role }}</td>
                            <td><?= date('d F Y'); ?></td>
                            <td>
                                <a href="/admin/karyawan/{{ $user->id }}" style="color: blue"><i
                                        class="px-1 fas fa-eye"></i></a>
                                <a href="/admin/karyawan/{{ $user->id }}" style="color: orange"><i
                                        class="px-1 fas fa-edit"></i></a>
                                <form action="/admin/karyawan/{{ $user->id }}" method="POST" class="px-1 d-inline">
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