@extends('dashboard.layouts.main')

@section('container')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Tambah Laporan Admin Baru</h1>
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <form method="post" action="/admin/">
                        @csrf
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <label for="tanggal_trip" class="form-label">Tanggal Trip</label>
                                    <input type="date" class="form-control @error('tanggal_trip') is-invalid @enderror"
                                        id="tanggal_trip" name="tanggal_trip" value="{{ old('tanggal_trip') }}"
                                        autofocus required>
                                    @error('tanggal_trip')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col">
                                    <label for="id_armada" class="form-label">Kode Armada</label><br>
                                    <select class="form-control" name="id_armada">
                                        @foreach ($armadas as $armada)
                                        @if (old('id_armada') == $armada->id)
                                        <option value="{{ $armada->id }}" selected>{{ $armada->kode_armada }}</option>
                                        @else
                                        <option value="{{ $armada->id }}">{{ $armada->kode_armada }}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <label for="id_driver" class="form-label">Nama Driver</label><br>
                                    <select class="form-control" name="id_driver">
                                        @foreach ($drivers as $driver)
                                        @if (old('id_driver') == $driver->id)
                                        <option value="{{ $driver->id }}" selected>{{ $driver->nama_driver }}</option>
                                        @else
                                        <option value="{{ $driver->id }}">{{ $driver->nama_driver }}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col">
                                    <label for="id_codriver" class="form-label">Nama Co-Driver</label><br>
                                    <select class="form-control" name="id_codriver">
                                        @foreach ($codrivers as $codriver)
                                        @if (old('id_codriver') == $codriver->id)
                                        <option value="{{ $codriver->id }}" selected>{{ $codriver->nama_codriver }}
                                        </option>
                                        @else
                                        <option value="{{ $codriver->id }}">{{ $codriver->nama_codriver }}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-3">
                                    <label for="id_rute" class="form-label">Kode Rute</label><br>
                                    <select class="form-control" name="id_rute">
                                        @foreach ($rutes as $rute)
                                        @if (old('id_rute') == $rute->id)
                                        <option value="{{ $rute->id }}" selected>{{ $rute->kode_rute }}</option>
                                        @else
                                        <option value="{{ $rute->id }}">{{ $rute->kode_rute }}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-3">
                                    <label for="id_ritase" class="form-label">Kode Ritase</label><br>
                                    <select class="form-control" name="id_ritase">
                                        @foreach ($ritases as $ritase)
                                        @if (old('id_ritase') == $ritase->id)
                                        <option value="{{ $ritase->id }}" selected>{{ $ritase->kode_ritase }}</option>
                                        @else
                                        <option value="{{ $ritase->id }}">{{ $ritase->kode_ritase }}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col">
                                    <label for="jumlah_penumpang_admin" class="form-label">Jumlah Penumpang</label>
                                    <input type="text"
                                        class="form-control @error('jumlah_penumpang_admin') is-invalid @enderror"
                                        id="jumlah_penumpang_admin" name="jumlah_penumpang_admin"
                                        value="{{ old('jumlah_penumpang_admin') }}" required>
                                    @error('jumlah_penumpang_admin')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="catatan" class="form-label">Catatan Penting</label>
                            <textarea class="form-control @error('catatan') is-invalid @enderror" id="catatan"
                                name="catatan">{{ old('catatan') }}</textarea>
                            @error('catatan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-block mt-3">
                                Tambah Laporan Baru
                            </button>
                            <a href="/admin/armada" class="btn btn-secondary btn-block mt-2">Batal</a>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection