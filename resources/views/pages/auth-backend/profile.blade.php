@extends('layouts/backend')

@section('title', 'Profile')
@section('content')
    <x-content-header title="Profile"></x-content-header>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">

                <!-- Profile Image -->
                <x-card style="card-primary card-outline">
                    <x-card-body style="box-profile">
                        <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle"
                                src="{{ asset('backend') }}/dist/img/user4-128x128.jpg" alt="User profile picture">
                        </div>
                        <h3 class="profile-username text-center">{{ Auth::user()->name }}</h3>
                    </x-card-body>
                    <!-- /.card-body -->
                </x-card>
                <!-- /.card -->
            </div>
            <!-- /.col -->
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header p-2">
                        <h4>Profile</h4>
                    </div><!-- /.card-header -->
                    <x-card-body>
                        <div class="tab-content">
                            <form class="form-horizontal" method="post" action="{{ route('admin.profile.update') }}">
                                @csrf
                                @method('PUT')
                                <div class="form-group row">
                                    <x-label label="name" style="col-sm-2 col-form-label">Nama</x-label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                            name="name" id="inputName" placeholder="Nama" value="{{ old('name', $user->name) }}">
                                        @error('name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input readonly type="text" class="form-control" name="email" id="inputEmail"
                                            placeholder="Email" value="{{ $user->email }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-sm-2 col-sm-10">
                                        <x-button type="submit" style="primary">Simpan Perubahan</x-button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /.tab-content -->
                    </x-card-body><!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
@endsection
