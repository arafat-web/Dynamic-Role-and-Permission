@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Create New Role</h2>
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

    {!! Form::open(['route' => 'roles.store', 'method' => 'POST']) !!}
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {!! Form::text('name', null, ['placeholder' => 'Name', 'class' => 'form-control mt-3']) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
            <div class="form-group">
                <strong class="d-inline-block mb-3">Permission:</strong>
                <br />
                @foreach ($permission as $value)
                    <label class="border p-2 d-block">{{ Form::checkbox('permission[]', $value->id, false, ['class' => 'name']) }}
                        <span class="d-lnline-block ps-2 h5">{{ $value->name }}</span> 
                    </label>
                    <br />
                @endforeach
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-success">Submit</button>
            <a class="btn btn-warning" href="{{ route('roles.index') }}"> Back</a>
        </div>
    </div>
    {!! Form::close() !!}
    <p class="text-center text-primary"><small>Arafat Hossain Ar</small></p>

@endsection
