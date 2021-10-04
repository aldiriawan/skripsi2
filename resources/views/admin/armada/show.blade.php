@extends('dashboard.layouts.main')

@section('container')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 text-gray-800">Detail Armada {{ $armada->kode_armada }}</h1>

    <a href="" class="my-2 btn btn-warning"><i class="fas fa-edit"></i> Edit</a>
    <form action="/admin/armada/{{ $armada->kode_armada }}" method="POST" class="d-inline">
        @method('delete')
        @csrf
        <button class="my-2 btn btn-danger" onclick="return confirm('Apakah anda yakin?')"><i
                class="fas fa-trash danger"></i>
            Hapus</button>
    </form>

    <div class="card col-lg-5 my-2">
        <img src=" https://source.unsplash.com/1200x400/?bus" class="card-img-top img-fluid rounded"
            alt="{{ $armada->kode_armada }}">
        <div class="card-body">
            <h5 class="card-title">{{ $armada->kode_armada }}</h5>
            <h6 class="card-text">Kode Armada : {{ $armada->kode_armada }}</h6>
            <h6 class="card-text">Tipe Armada : {{ $armada->tipe_armada }}</h6>
            <h6 class="card-text">Merek Armada : {{ $armada->merek_armada }}</h6>
            <h6 class="card-text">Beroperasi Sejak : <?= date('d F Y'); ?></h6>
        </div>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">KM yang ditempuh Bulan
                <div class="dropdown pl-2 my-2 d-inline">
                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                    </button>
                    <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>

            </h6>
        </div>
        <div class="card-body">
            <div class="chart-bar">
                <canvas id="myBarChart"></canvas>
            </div>
            <hr>
            Test
        </div>
    </div>


</div>
@endsection