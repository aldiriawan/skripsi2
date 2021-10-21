@extends('dashboard.layouts.main')

@section('container')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Driver Baru</h1>
    </div>
    <div class="col-lg-5">
        <form method="post" action="/admin/driver/">
            @csrf
            <div class="mb-3">
                <label for="nama_driver" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control @error('nama_driver') is-invalid @enderror" id="nama_driver"
                    name="nama_driver" value="{{ old('nama_driver') }}" autofocus required>
                @error('nama_driver')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="nik_driver" class="form-label">NIK</label>
                <input type="text" class="form-control @error('nik_driver') is-invalid @enderror" id="nik_driver"
                    name="nik_driver" value="{{ old('nik_driver') }}" required>
                @error('nik_driver')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Tambah Driver Baru</button>
        </form>
    </div>


</div>
@endsection