@extends('master')

@section('title')
<title>Random User Generator</title>
@stop

@section('content')
<div class="col-md-4">
    <div class="column row text-center">
        {{ Form::open(array('url' => '/users', 'method' => 'POST', 'class' => 'form-horizontal', 'id' => 'users')) }}
        	<div class="form-group">
        		{{ Form::label('numPeople', 'Number of People',
        						array('class' => 'control-label col-s-2 text')) }}
        		{{ Form::text('numPeople', '5',
        						array('class' => 'form-control')) }}
        	</div><br>
        	<div class="form-group">
		        {{ Form::label('includeBirthday', 'Include Birthday?',
		            			array('class' => 'control-label col-s-2')) }}
		        {{ Form::checkbox('includeBirthday', 'true', true) }}
        	</div><br>
        	<div class="form-group">
		        {{ Form::label('includeAddress', 'Include Address?',
		            			array('class' => 'control-label col-s-2')) }}
		        {{ Form::checkbox('includeAddress', 'true', true) }}
        	</div><br>
        	<div class="form-group">
		        {{ Form::label('includeFavColor', 'Include Favorite Color?',
		            			array('class' => 'control-label col-s-2')) }}
		        {{ Form::checkbox('includeFavColor', 'true', true) }}
        	</div><br id="insertError">
        	<div class="form-group">
        		{{ Form::submit('Submit') }}
        	</div>
			{{ Form::close() }}
	    </div>
    </div>
    <div class="col-md-8"></div>
@stop

@section('validation')
<script type="text/javascript" src="/usersValidation.js"></script>
@stop