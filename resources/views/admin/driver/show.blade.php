@extends('dashboard.layouts.main')

@section('container')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 text-gray-800">{{ $driver->nama_driver }}</h1>
    <a href="/admin/driver" class="my-2 btn btn-secondary"><i class="fas fa-arrow-left"></i>
        Kembali</a>
    <a href="/admin/driver/{{ $driver->nik_driver }}/edit" class="my-2 btn btn-warning"><i class="fas fa-edit"></i>
        Edit</a>
    <form action="/admin/driver/{{ $driver->nik_driver }}" method="POST" class="d-inline">
        @method('delete')
        @csrf
        <button class="my-2 btn btn-danger" onclick="return confirm('Apakah anda yakin?')"><i
                class="fas fa-trash danger"></i>
            Hapus</button>
    </form>
    <div class="card shadow mb-4">
        <div class="col-lg-5 my-2">
            <div class="card-body">
                <h5 class="card-title">{{ $driver->nama_driver }}</h5>
                <h6 class="card-text">Nomor Induk Kependudukan : {{ $driver->nik_driver }}</h6>
                <h6 class="card-text">Umur : {{ $driver->umur_driver }}</h6>
                <h6 class="card-text">Nomor Telepon : {{ $driver->telepon_driver }}</h6>
                <h6 class="card-text">Alamat : {{ $driver->alamat_driver }}</h6>
                <h6 class="card-text">Bekerja Sejak :
                    <?= date('d F Y'); ?>
                </h6>
            </div>
        </div>
        <div class="card-body">

            <div class="row">
                <div class="col-lg-6">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Jumlah Minus</h6>
                        </div>
                        <div class="card-area">
                            <div class="chart-bar">
                                <canvas id="myAreaChart"></canvas>
                            </div>
                            <hr>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Jumlah Kesalahan</h6>
                        </div>
                        <div class="card-area">
                            <div class="chart-bar">
                                <canvas id="myAreaChart"></canvas>
                            </div>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection