@extends('dashboard.layouts.main')

@section('container')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Laporan Admin</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus fa-sm text-white-50"></i> Tambah Laporan Baru</a>
    </div>

    <ul class="list-group">
        @foreach ($trip as $t)
        <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
            {{ date('d-m-Y', strtotime($t->tanggal_trip)) }}
            <i class="fas fa-fw fa-long-arrow-alt-right"></i>
        </a>
        @endforeach
    </ul>

</div>
@endsection