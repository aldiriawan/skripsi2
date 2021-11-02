@extends('dashboard.layouts.main')

@section('container')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Data Armada</h1>
    </div>
    <div class="col-lg-5">
        <form method="post" action="/admin/armada/">
            @csrf
            <div class="mb-3">
                <label for="kode_armada" class="form-label">Kode Armada</label>
                <input type="text" class="form-control @error('kode_armada') is-invalid @enderror" id="kode_armada"
                    name="kode_armada" value="{{ old('kode_armada') }}" autofocus required>
                @error('kode_armada')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="merek_armada" class="form-label">Merek Armada</label>
                <input type="text" class="form-control" id="merek_armada" name="merek_armada"
                    value="{{ old('merek_armada') }}" required>
                @error('merek_armada')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="id_tipe_armada" class="form-label">Tipe Armada</label>
                <select class="form-select" name="id_tipe_armada">
                    @foreach ($tipe_armadas as $ta)
                    @if (old('id_tipe_armada') == $ta->id)
                    <option value="{{ $ta->id }}" selected>{{ $ta->tipe_armada }}</option>
                    @else
                    <option value="{{ $ta->id }}">{{ $ta->tipe_armada }}</option>
                    @endif
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Tambah Armada</button>
        </form>
    </div>


</div>
@endsection