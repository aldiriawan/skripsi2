@extends('dashboard.layouts.main')

@section('container')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Laporan Admin</h1>
    </div>

    <form method="post" action="/admin/">
        @csrf
        <div class="col-lg-4 mb-3">
            <label for="tanggal_trip" class="form-label">Tanggal Trip</label>
            <input type="date" class="form-control @error('tanggal_trip') is-invalid @enderror" id="tanggal_trip"
                name="tanggal_trip" value="{{ old('tanggal_trip', $trip->tanggal_trip) }}" autofocus required>
            @error('tanggal_trip')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="col-lg-4 mb-3">
            <label for="id_armada" class="form-label">Kode Armada</label><br>
            <select class="form-control" name="id_armada">
                @foreach ($armadas as $armada)
                @if (old('id_armada', $trip->kode_armada) == $armada->id)
                <option value="{{ $armada->id }}" selected>{{ $armada->kode_armada }}</option>
                @else
                <option value="{{ $armada->id }}">{{ $armada->kode_armada }}</option>
                @endif
                @endforeach
            </select>
        </div>
        <div class="col-lg-4 mb-3">
            <label for="rute" class="form-label">Rute</label>
            <input type="text" class="form-control @error('rute') is-invalid @enderror" id="rute" name="rute"
                value="{{ old('rute', $trip->rute) }}" required>
            @error('rute')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="col-lg-4 mb-3">
            <label for="id_driver" class="form-label">Nama Driver</label><br>
            <select class="form-control" name="id_driver">
                @foreach ($drivers as $driver)
                @if (old('id_driver', $trip->driver) == $driver->id)
                <option value="{{ $driver->id }}" selected>{{ $driver->nama_driver }}</option>
                @else
                <option value="{{ $driver->id }}">{{ $driver->nama_driver }}</option>
                @endif
                @endforeach
            </select>
        </div>
        <div class="col-lg-4 mb-3">
            <label for="id_codriver" class="form-label">Nama Co-Driver</label><br>
            <select class="form-control" name="id_codriver">
                @foreach ($codrivers as $codriver)
                @if (old('id_codriver', $trip->codriver) == $codriver->id)
                <option value="{{ $codriver->id }}" selected>{{ $codriver->nama_codriver }}</option>
                @else
                <option value="{{ $codriver->id }}">{{ $codriver->nama_codriver }}</option>
                @endif
                @endforeach
            </select>
        </div>
        <div class="col-lg-4 mb-3">
            <label for="jumlah_penumpang_admin" class="form-label">Jumlah Penumpang</label>
            <input type="text" class="form-control @error('jumlah_penumpang_admin') is-invalid @enderror"
                id="jumlah_penumpang_admin" name="jumlah_penumpang_admin"
                value="{{ old('jumlah_penumpang_admin', $trip->jumlah_penumpang_admin) }}" required>
            @error('jumlah_penumpang_admin')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="col-lg-4 mb-3">
            <label for="catatan" class="form-label">Catatan Penting</label>
            <input type="text" class="form-control @error('catatan') is-invalid @enderror" id="catatan" name="catatan"
                value="{{ old('catatan', $trip->catatan) }}">
            @error('catatan')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">
            Update
        </button>
        <a href="/admin" class="my-2 btn btn-secondary">Batal</a>
    </form>
</div>

@endsection