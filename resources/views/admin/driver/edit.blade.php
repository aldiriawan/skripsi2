@extends('dashboard.layouts.main')

@section('container')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Data Driver</h1>
    </div>
    <div class="col-lg-5">
        <form method="post" action="/admin/driver/">
            @csrf
            <div class="mb-3">
                <label for="nama_driver" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control @error('nama_driver') is-invalid @enderror" id="nama_driver"
                    name="nama_driver" value="{{ old('nama_driver', $driver->nama_driver) }}" autofocus required>
                @error('nama_driver')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="nik_driver" class="form-label">NIK</label>
                <input type="text" class="form-control @error('nik_driver') is-invalid @enderror" id="nik_driver"
                    name="nik_driver" value="{{ old('nik_driver', $driver->nik_driver) }}" required>
                @error('nik_driver')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="umur_driver" class="form-label">Umur</label>
                <input type="text" class="form-control @error('umur_driver') is-invalid @enderror" id="umur_driver"
                    name="umur_driver" value="{{ old('umur_driver', $driver->umur_driver) }}" required>
                @error('umur_driver')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="telepon_driver" class="form-label">Telepon</label>
                <input type="text" class="form-control @error('telepon_driver') is-invalid @enderror"
                    id="telepon_driver" name="telepon_driver"
                    value="{{ old('telepon_driver', $driver->telepon_driver) }}" required>
                @error('telepon_driver')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="alamat_driver" class="form-label">Alamat</label>
                <input type="text" class="form-control @error('alamat_driver') is-invalid @enderror" id="alamat_driver"
                    name="alamat_driver" value="{{ old('alamat_driver', $driver->alamat_driver) }}" required>
                @error('alamat_driver')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Edit Data Driver</button>
        </form>
    </div>


</div>
@endsection