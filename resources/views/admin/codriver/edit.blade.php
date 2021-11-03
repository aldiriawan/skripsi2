@extends('dashboard.layouts.main')

@section('container')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Data Co-Driver</h1>
    </div>
    <div class="col-lg-5">
        <form method="post" action="/admin/codriver/">
            @csrf
            <div class="mb-3">
                <label for="nama_codriver" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control @error('nama_codriver') is-invalid @enderror" id="nama_codriver"
                    name="nama_codriver" value="{{ old('nama_codriver', $codriver->nama_codriver) }}" autofocus
                    required>
                @error('nama_codriver')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="nik_codriver" class="form-label">NIK</label>
                <input type="text" class="form-control @error('nik_codriver') is-invalid @enderror" id="nik_codriver"
                    name="nik_codriver" value="{{ old('nik_codriver', $codriver->nik_codriver) }}" required>
                @error('nik_codriver')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="umur_codriver" class="form-label">Umur</label>
                <input type="text" class="form-control @error('umur_codriver') is-invalid @enderror" id="umur_codriver"
                    name="umur_codriver" value="{{ old('umur_codriver', $codriver->umur_codriver) }}" required>
                @error('umur_codriver')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="telepon_codriver" class="form-label">Telepon</label>
                <input type="text" class="form-control @error('telepon_codriver') is-invalid @enderror"
                    id="telepon_codriver" name="telepon_codriver"
                    value="{{ old('telepon_codriver', $codriver->telepon_codriver) }}" required>
                @error('telepon_codriver')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="alamat_codriver" class="form-label">Alamat</label>
                <input type="text" class="form-control @error('alamat_codriver') is-invalid @enderror"
                    id="alamat_codriver" name="alamat_codriver"
                    value="{{ old('alamat_codriver', $codriver->alamat_codriver) }}" required>
                @error('alamat_codriver')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="/admin/codriver/{{ $codriver->nik_codriver }}" class="my-2 btn btn-secondary">Batal</a>
            </div>
        </form>
    </div>


</div>
@endsection