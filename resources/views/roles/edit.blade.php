@extends('layouts.app')

@section('content')
    <h1>Create Role</h1>
    {!! Form::open(['action' => 'RolesController@store', 'method' => 'POST']) !!}
    <div class="form-group">
        {{Form::label('role', 'Role')}}
        {{Form::text('role', $role->role , ['class' => 'form-control', 'placeholder' => 'Role'])}}
    </div>
    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {{Form::hidden('_method', 'PUT')}}
    {!! Form::close() !!}
@endsection