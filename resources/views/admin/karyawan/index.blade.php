@extends('dashboard.layouts.main')

@section('container')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Karyawan</h1>
    </div>

    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show col-lg-8" role="alert">
        {{ session('success') }}
    </div>
    @endif

    <div class="table-responsive col-lg-8">
        <table class="table table-hover table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Role</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->role }}</td>
                    <td>
                        <a href="" style="color: orange"><i class="fas fa-edit"></i></a>
                        <form action="/admin/karyawan/{{ $user->id }}" method="POST" class="d-inline">
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
    @endsection