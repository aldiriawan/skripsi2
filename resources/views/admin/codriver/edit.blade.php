@extends('dashboard.layouts.main')

@section('container')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Edit Data Co-Driver</h1>
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <form method="post" action="/admin/codriver/{{ $codriver->nik_codriver }}">
                        @method('put')
                        @csrf
                        <div class="form-group">
                            <label for="nama_codriver" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control @error('nama_codriver') is-invalid @enderror"
                                id="nama_codriver" name="nama_codriver"
                                value="{{ old('nama_codriver', $codriver->nama_codriver) }}" autofocus required>
                            @error('nama_codriver')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="nik_codriver" class="form-label">NIK</label>
                            <input type="text" class="form-control @error('nik_codriver') is-invalid @enderror"
                                id="nik_codriver" name="nik_codriver"
                                value="{{ old('nik_codriver', $codriver->nik_codriver) }}" required>
                            @error('nik_codriver')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-2">
                                    <label for="umur_codriver" class="form-label">Umur</label>
                                    <input type="text" class="form-control @error('umur_codriver') is-invalid @enderror"
                                        id="umur_codriver" name="umur_codriver"
                                        value="{{ old('umur_codriver', $codriver->umur_codriver) }}" required>
                                    @error('umur_codriver')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col">
                                    <label for="telepon_codriver" class="form-label">Telepon</label>
                                    <input type="text"
                                        class="form-control @error('telepon_codriver') is-invalid @enderror"
                                        id="telepon_codriver" name="telepon_codriver"
                                        value="{{ old('telepon_codriver', $codriver->telepon_codriver) }}" required>
                                    @error('telepon_codriver')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3">
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
                            <button type="submit" class="btn btn-primary btn-block mt-3">
                                Edit Data Co-Driver
                            </button>
                            <a href="/admin/codriver" class="btn btn-secondary btn-block mt-2">Batal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection