@extends('dashboard.layouts.main')

@section('container')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Tambah Driver Baru</h1>
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <form method="post" action="/admin/driver/">
                        @csrf
                        <div class="form-group">
                            <label for="nama_driver" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control @error('nama_driver') is-invalid @enderror"
                                id="nama_driver" name="nama_driver" value="{{ old('nama_driver') }}" autofocus required>
                            @error('nama_driver')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="nik_driver" class="form-label">NIK</label>
                            <input type="text" class="form-control @error('nik_driver') is-invalid @enderror"
                                id="nik_driver" name="nik_driver" value="{{ old('nik_driver') }}" required>
                            @error('nik_driver')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="umur_driver" class="form-label">Umur</label>
                            <input type="text" class="form-control @error('umur_driver') is-invalid @enderror"
                                id="umur_driver" name="umur_driver" value="{{ old('umur_driver') }}" required>
                            @error('umur_driver')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="telepon_driver" class="form-label">Telepon</label>
                            <input type="text" class="form-control @error('telepon_driver') is-invalid @enderror"
                                id="telepon_driver" name="telepon_driver" value="{{ old('telepon_driver') }}" required>
                            @error('telepon_driver')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="alamat_driver" class="form-label">Alamat</label>
                            <input type="text" class="form-control @error('alamat_driver') is-invalid @enderror"
                                id="alamat_driver" name="alamat_driver" value="{{ old('alamat_driver') }}" required>
                            @error('alamat_driver')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-block mt-3">
                                Tambah Driver
                            </button>
                            <a href="/admin/driver" class="btn btn-secondary btn-block mt-3">Batal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection