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
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Opps!</strong> Something went wrong, please check below errors.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="card">
                        <div class="card-header">Create role
                            <span class="float-right">
                                <a class="btn btn-primary" href="{{ route('roles.index') }}">Roles</a>
                            </span>
                        </div>
                        <div class="card-body">
                            {!! Form::open(['route' => 'roles.store', 'method' => 'POST']) !!}
                            <div class="form-group">
                                <strong>Name:</strong>
                                {!! Form::text('name', null, ['placeholder' => 'Name', 'class' => 'form-control']) !!}
                            </div>
                            <div class="form-group">
                                <strong>Permission:</strong>
                                <br />
                                @foreach ($permission as $value)
                                    <label>{{ Form::checkbox('permission[]', $value->id, false, ['class' => 'name']) }}
                                        {{ $value->name }}</label>
                                    <br />
                                @endforeach
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
