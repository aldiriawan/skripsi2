@extends('dashboard.layouts.main')

@section('container')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Detail Armada {{ $armada->kode_armada }}</h1>

    <div class="row">
        <div class="col-12 col-sm8- offset-sm-2 col-md-6 offset-md-3 pt-3 pb-3">
            <div class="container text-center justify-content-center">
                <div class="row">
                    <div class="col-md-4 rounded d-block mx-auto mb-5">
                        <img src="..." class=" img-fluid rounded-start" alt="{{ $armada->kode_armada }}">
                    </div>
                </div>
                <div class="col-12 col-sm-6 mb-3">
                    <label for="fullname">Kode Armada</label>
                    <input type="text" class="form-control" readonly name="fullname" value="{{ $armada->kode_armada }}">
                </div>
                <small class="text-muted">Since <?= date('d F Y'); ?></small>
                <a href="/posts" class="text-decoration-none d-block mt-4">Update Profile</a>
            </div>
        </div>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Projects</h6>
        </div>
        <div class="card-body">
            <h4 class="small font-weight-bold">Server Migration <span class="float-right">20%</span></h4>
            <div class="progress mb-4">
                <div class="progress-bar bg-danger" role="progressbar" style="width: 20%" aria-valuenow="20"
                    aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <h4 class="small font-weight-bold">Sales Tracking <span class="float-right">40%</span></h4>
            <div class="progress mb-4">
                <div class="progress-bar bg-warning" role="progressbar" style="width: 40%" aria-valuenow="40"
                    aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <h4 class="small font-weight-bold">Customer Database <span class="float-right">60%</span></h4>
            <div class="progress mb-4">
                <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0"
                    aria-valuemax="100"></div>
            </div>
            <h4 class="small font-weight-bold">Payout Details <span class="float-right">80%</span></h4>
            <div class="progress mb-4">
                <div class="progress-bar bg-info" role="progressbar" style="width: 80%" aria-valuenow="80"
                    aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <h4 class="small font-weight-bold">Account Setup <span class="float-right">Complete!</span></h4>
            <div class="progress">
                <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100"
                    aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
    </div>
</div>
@endsection