@extends('dashboard.layouts.main')

@section('container')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Tambah Armada Baru</h1>
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <form method="post" action="/admin/armada/">
                        @csrf
                        <div class="form-group">
                            <label for="kode_armada" class="form-label">Kode Armada</label>
                            <input type="text" class="form-control @error('kode_armada') is-invalid @enderror"
                                id="kode_armada" name="kode_armada" value="{{ old('kode_armada') }}" autofocus required>
                            @error('kode_armada')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="merek_armada" class="form-label">Merek Armada</label>
                            <input type="text" class="form-control" id="merek_armada" name="merek_armada"
                                value="{{ old('merek_armada') }}" required>
                            @error('merek_armada')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="id_tipe_armada" class="form-label">Tipe Armada</label>
                            <select class="form-control" name="id_tipe_armada">
                                @foreach ($tipe_armadas as $ta)
                                @if (old('id_tipe_armada') == $ta->id)
                                <option value="{{ $ta->id }}" selected>{{ $ta->tipe_armada }}</option>
                                @else
                                <option value="{{ $ta->id }}">{{ $ta->tipe_armada }}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-block mt-3">
                                Tambah Armada
                            </button>
                            <a href="/admin/armada" class="btn btn-secondary btn-block mt-3">Batal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection