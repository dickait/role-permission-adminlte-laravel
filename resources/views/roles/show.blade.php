@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Roles</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Roles</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->

            <div class="container-fluid">
                <div class="justify-content-center">
                    @if (\Session::has('success'))
                        <div class="alert alert-success">
                            <p>{{ \Session::get('success') }}</p>
                        </div>
                    @endif
                    <div class="card">
                        <div class="card-header">Role
                            @can('role-create')
                                <span class="float-right">
                                    <a class="btn btn-primary" href="{{ route('roles.index') }}">Back</a>
                                </span>
                            @endcan
                        </div>
                        <div class="card-body">
                            <div class="lead">
                                <strong>Name:</strong>
                                {{ $role->name }}
                            </div>
                            <div class="lead">
                                <strong>Permissions:</strong>
                                @if (!empty($rolePermissions))
                                    @foreach ($rolePermissions as $permission)
                                        <label class="badge badge-success">{{ $permission->name }}</label>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
