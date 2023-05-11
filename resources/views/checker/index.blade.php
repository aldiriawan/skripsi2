@extends('dashboard.layouts.main')

@section('container')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Laporan Checker</h1>
        <a href="checker/create" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus fa-sm text-white-50"></i> Tambah Laporan Baru</a>
    </div>

    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
    </div>
    @endif

    <ul class="list-group">
        @foreach ($trip as $t)
        <a href="/checker/{{ $t->tanggal_trip }}"
            class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
            {{ date('d F Y', strtotime($t->tanggal_trip)) }}
            <i class="fas fa-fw fa-long-arrow-alt-right"></i>
        </a>
        @endforeach
    </ul>

</div>
@endsection