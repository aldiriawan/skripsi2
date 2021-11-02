@extends('layouts.main')

@section('container')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-6">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Edit Armada</h1>
                                </div>
                                <form class="user" action="/admin/armada/{{ $armada->kode_armada }}" method="POST"
                                    enctype="multipart/form-data">
                                    @method('put')
                                    @csrf
                                    <div class="form-group">
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
                                    <div class="form-group">
                                        <input type="text"
                                            class="form-control form-control-user @error('tipe_armada') is-invalid @enderror"
                                            id="tipe_armada" placeholder="Tipe Armada" name="tipe_armada"
                                            value="{{ old('tipe_armada', $armada->tipe_armada) }}" required>
                                        @error('tipe_armada')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
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
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Edit Data Armada
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection