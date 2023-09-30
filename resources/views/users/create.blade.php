@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Create New User</h2>
            </div>
        </div>
    </div>

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {!! Form::open(['route' => 'users.store', 'method' => 'POST']) !!}
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 mb-3">
            <div class="form-group">
                <strong>Name:</strong>
                {!! Form::text('name', null, ['placeholder' => 'Name', 'class' => 'form-control mt-3']) !!}
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 mb-3">
            <div class="form-group">
                <strong>Email:</strong>
                {!! Form::text('email', null, ['placeholder' => 'Email', 'class' => 'form-control mt-3']) !!}
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 mb-3">
            <div class="form-group">
                <strong>Password:</strong>
                {!! Form::password('password', ['placeholder' => 'Password', 'class' => 'form-control mt-3']) !!}
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 mb-3">
            <div class="form-group">
                <strong>Confirm Password:</strong>
                {!! Form::password('confirm-password', ['placeholder' => 'Confirm Password', 'class' => 'form-control mt-3']) !!}
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 mb-3">
            <div class="form-group">
                <strong>Role:</strong>
                {!! Form::select('roles[]', $roles, [], ['class' => 'form-control mt-3', 'multiple']) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3">
            <button type="submit" class="btn btn-success">Submit</button>
            <a class="btn btn-warning" href="{{ route('users.index') }}"> Back</a>
        </div>
    </div>
    {!! Form::close() !!}
    <p class="text-center text-primary"><small>Arafat Hossain Ar</small></p>
@endsection
