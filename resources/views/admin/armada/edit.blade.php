@extends('dashboard.layouts.main')

@section('container')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Edit Data Armada</h1>
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <form action="/admin/armada/{{ $armada->kode_armada }}" method="POST">
                        @method('put')
                        @csrf
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <label for="kode_armada" class="form-label">Kode Armada</label>
                                    <input type="text"
                                        class="form-control form-control-user @error('kode_armada') is-invalid @enderror"
                                        id="kode_armada" placeholder="Kode Armada" name="kode_armada"
                                        value="{{ old('kode_armada', $armada->kode_armada) }}" autofocus required>
                                    @error('kode_armada')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col">
                                    <label for="merek_armada" class="form-label">Merek Armada</label>
                                    <input type="text"
                                        class="form-control form-control-user @error('merek_armada') is-invalid @enderror"
                                        id="merek_armada" placeholder="Merek Armada" name="merek_armada"
                                        value="{{ old('merek_armada', $armada->merek_armada) }}" required>
                                    @error('merek_armada')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col">
                                    <label for="id_tipe_armada" class="form-label">Tipe Armada</label>
                                    <br>
                                    <select class="form-control" name="id_tipe_armada">
                                        @foreach ($tipe_armadas as $tipe_armada)
                                        @if (old('id_tipe_armada', $armada->id_tipe_armada) == $tipe_armada->id)
                                        <option value="{{ $armada->id_tipe_armada }}" selected>{{
                                            $tipe_armada->tipe_armada }}
                                        </option>
                                        @else
                                        <option value="{{ $armada->id_tipe_armada }}">{{ $tipe_armada->tipe_armada }}
                                        </option>
                                        @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-block mt-3">
                                Edit Armada
                            </button>
                            <a href="/admin/armada" class="btn btn-secondary btn-block mt-2">Batal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection