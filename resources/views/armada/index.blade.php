@extends('dashboard.layouts.main')

@section('container')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Armada</h1>
    </div>

    <div class="table-responsive col-lg-8">
        <table class="table table-hover table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Kode Armada</th>
                    <th scope="col">Tipe Armada</th>
                    <th scope="col">Merek Armada</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($armadas as $armada)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $armada->kode_armada }}</td>
                    <td>{{ $armada->tipe_armada }}</td>
                    <td>{{ $armada->merek_armada }}</td>
                    <td>
                        <a href="" style="color: orange"><i class="fas fa-edit"></i></a>
                        <a href="" style="color: red"><i class="fas fa-trash danger"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endsection