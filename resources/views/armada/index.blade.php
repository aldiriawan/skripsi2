@extends('dashboard.layouts.main')

@section('container')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Armada</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus fa-sm text-white-50"></i> Tambah Armada Baru</a>
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
                    <th scope="col">Kode Armada</th>
                    <th scope="col">Tipe Armada</th>
                    <th scope="col">Merek Armada</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($armadas as $armada)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $armada->kode_armada }}</td>
                    <td>{{ $armada->tipe_armada }}</td>
                    <td>{{ $armada->merek_armada }}</td>
                    <td>
                        <a href="/armada/{{ $armada->kode_armada }}" style="color: orange"><i
                                class="fas fa-edit"></i></a>
                        <form action="/armada/{{ $armada->kode_armada }}" method="POST" class="d-inline">
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