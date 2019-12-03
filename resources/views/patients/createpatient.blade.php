@extends('layouts.app')

@section('content')
	<div class="container-fluid" >
    <div class="container col-lg-7 col-md-8 col-sm-8">
      <div class="panel panel-success">
        <div class="panel-heading" style="font-size: 20px; background-color: #85C1E9 ">Create Patient<br></div>
          <div class="panel-body responsive">
            {!! Form::open(['action' => 'PatientsController@store', 'method' => 'POST', 'class' => 'form-horizontal']) !!}
            <div class="col-lg-12">
              <div class="form-group" >
    		    {{Form::label('lastName', 'Last Name')}}
            {{Form::text('lastName', '', ['class' => 'form-control', 'placeholder'=> 'Last Name', 'required' => 'Required'])}}
                <br><br>
    		    {{Form::label('firstName', 'First Name')}}
    		    {{Form::text('firstName', '', ['class' => 'form-control', 'placeholder'=> 'First Name'])}}
                <br><br>
    		    {{Form::label('middleName', 'Middle Name')}}
    		    {{Form::text('middleName', '', ['class' => 'form-control', 'placeholder'=> 'Middle Name'])}}
              <br><br>
              </div>
            

    	     <div class="form-group">
    		    {{Form::label('birthday', 'Birthday')}}
    		    {{Form::text('birthday', '', ['class' => 'form-control', 'placeholder'=> 'Birthday'])}}
              <br><br>
            {{Form::label('birthplace', 'Birth Place')}}
            {{Form::text('birthplace', '', ['class' => 'form-control', 'placeholder'=> 'Birth Place'])}}
              <br><br>
            {{Form::label('age', 'Age')}}
            {{Form::text('age', '', ['class' => 'form-control', 'placeholder'=> 'Age'])}}
              <br><br>
          </div>    	

    	   <div class="form-group">
    	     {{Form::label('maritalStatus', 'Marital Status')}}
    		  {{Form::text('maritalStatus', '', ['class' => 'form-control', 'placeholder'=> 'Marital Status'])}}
              <br><br>
              {{Form::label('guardian', 'Guardian')}}
              {{Form::text('guardian', '', ['class' => 'form-control', 'placeholder'=> 'Guardian'])}}
              <br><br>
              {{Form::label('maritalStatus', 'Marital Status')}}
              {{Form::text('maritalStatus', '', ['class' => 'form-control', 'placeholder'=> 'Marital Status'])}}
              <br><br>
    	   </div>

        <span style="color: gray;">&nbsp;</span><input class="btn btn-primary btn-block" type="submit" class = "form-control" value="Save" />
   
	     {!! Form::close() !!}
     </div>
      </div>
    </div>
    </div>
  </div>
@endsection