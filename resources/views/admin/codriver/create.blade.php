@extends('dashboard.layouts.main')

@section('container')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Co-Driver Baru</h1>
    </div>
    <div class="col-lg-5">
        <form method="post" action="/admin/codriver/">
            @csrf
            <div class="mb-3">
                <label for="nama_codriver" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control @error('nama_codriver') is-invalid @enderror" id="nama_codriver"
                    name="nama_codriver" value="{{ old('nama_codriver') }}" autofocus required>
                @error('nama_codriver')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="nik_codriver" class="form-label">NIK</label>
                <input type="text" class="form-control @error('nik_codriver') is-invalid @enderror" id="nik_codriver"
                    name="nik_codriver" value="{{ old('nik_codriver') }}" required>
                @error('nik_codriver')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Tambah Co-Driver Baru</button>
        </form>
    </div>


</div>
@endsection