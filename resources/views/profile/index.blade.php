@extends('dashboard.layouts.main')

@section('container')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Profil Saya</h1>

    <div class="row">
        <div class="col-12 col-sm8- offset-sm-2 col-md-6 offset-md-3 pt-3 pb-3">
            <div class="container text-center justify-content-center">
                <div class="row">
                    <div class="col-md-4 rounded d-block mx-auto mb-5">
                        <img src="..." class=" img-fluid rounded-start" alt="{{ auth()->user()->name }}">
                    </div>
                </div>
                <div class="col-12 col-sm-6 mb-3">
                    <label for="fullname">Fullname</label>
                    <input type="text" class="form-control" readonly name="fullname" value="{{ auth()->user()->name }}">
                </div>
                <div class="col-12 col-sm-6 mb-3">
                    <label for="email">Email Address</label>
                    <input type="text" class="form-control" readonly value="{{ auth()->user()->email }}">
                </div>
                <div class="col-12 col-sm-6 mb-3">
                    <label for="role">Role</label>
                    <input type="text" class="form-control" readonly name="role" value="{{ auth()->user()->role_id }}">
                    </span>
                </div>
                <small class="text-muted">Since <?= date('d F Y'); ?></small>
                <a href="/posts" class="text-decoration-none d-block mt-4">Update Profile</a>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
@endsection