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
        <div class="card-body">
            <h5 class="card-title">{{ $armada->kode_armada }}</h5>
            <h6 class="card-text">Kode Armada : {{ $armada->kode_armada }}</h6>
            <h6 class="card-text">Merek Armada : {{ $armada->merek_armada }}</h6>
            <h6 class="card-text">Tipe Armada : {{ $armada->id_tipe_armada }}</h6>
            <h6 class="card-text">Kapasitas Armada : {{ $armada->id_tipe_armada }}</h6>
            <h6 class="card-text">Beroperasi Sejak :
                <?= date('d F Y'); ?>
            </h6>
        </div>
    </div>
</div>


</div>
@endsection