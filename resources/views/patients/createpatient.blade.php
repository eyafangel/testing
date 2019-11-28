@extends('layouts.app')

@section('content')
	<h1>Create Patient</h1>
	{!! Form::open(['action' => 'PatientsController@store', 'method' => 'POST']) !!}
	
    	<div class="form-group">
    		{{Form::label('lastName', 'Last Name')}}
    		{{Form::text('lastName', '', ['class' => 'form-control', 'placeholder'=> 'Last Name'])}}

    		{{Form::label('firstName', 'First Name')}}
    		{{Form::text('firstName', '', ['class' => 'form-control', 'placeholder'=> 'First Name'])}}

    		{{Form::label('middleName', 'Middle Name')}}
    		{{Form::text('middleName', '', ['class' => 'form-control', 'placeholder'=> 'Middle Name'])}}
	
    	</div>
    	<div class="form-group">
    		{{Form::label('birthday', 'Birthday')}}
    		{{Form::text('birthday', '', ['class' => 'form-control', 'placeholder'=> 'Birthday'])}}
    	</div>

    	<div class="form-group">
    		{{Form::label('maritalStatus', 'Marital Status')}}
    		{{Form::text('maritalStatus', '', ['class' => 'form-control', 'placeholder'=> 'Marital Status'])}}
    	</div>


	{!! Form::close() !!}
@endsection