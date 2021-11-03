@extends('dashboard.layouts.main')

@section('container')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Data Armada</h1>
    </div>
    <div class="col-lg-5">
        <form action="/admin/armada/{{ $armada->kode_armada }}" method="POST">
            @method('put')
            @csrf
            <div class="form-group">
                <label for="kode_armada" class="form-label">Kode Armada</label>
                <input type="text" class="form-control form-control-user @error('kode_armada') is-invalid @enderror"
                    id="kode_armada" placeholder="Kode Armada" name="kode_armada"
                    value="{{ old('kode_armada', $armada->kode_armada) }}" autofocus required>
                @error('kode_armada')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="merek_armada" class="form-label">Merek Armada</label>
                <input type="text" class="form-control form-control-user @error('merek_armada') is-invalid @enderror"
                    id="merek_armada" placeholder="Merek Armada" name="merek_armada"
                    value="{{ old('merek_armada', $armada->merek_armada) }}" required>
                @error('merek_armada')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="id_tipe_armada" class="form-label">Tipe Armada</label>
                <br>
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
                <button type="submit" class="btn btn-primary">
                    Update
                </button>
                <a href="/admin/armada" class="my-2 btn btn-secondary">Batal</a>
            </div>
        </form>
    </div>
</div>

@endsection