@extends('master')

@section('title')
<title>Random User Generator</title>
@stop

@section('content')

<div class="row">
    <div class="col-md-4">
	        <div class="column row text-center">
	            {{ Form::open(array('url' => '/users', 'method' => 'POST', 'class' => 'form-horizontal')) }}
	            	<div class="form-group">
	            		{{ Form::label('Number of People', 'Number of People',
	            						array('class' => 'control-label col-s-2 text')) }}
	            		{{ Form::text('numPeople', '5',
	            						array('class' => 'form-control')) }}
	            	</div><br>
	            	<div class="form-group">
				        {{ Form::label('Include Birthday?', 'Include Birthday?',
				            			array('class' => 'control-label col-s-2')) }}
				        {{ Form::checkbox('includeBirthday', 'true', true) }}
	            	</div><br>
	            	<div class="form-group">
	            		{{ Form::label('Include Description?', 'Include Description?',
	            						array('class' => 'control-label col-s-2')) }}
	            		{{ Form::checkbox('includeDescription', 'true', true) }}
	            	</div><br>
	            	<div class="form-group">
	            		{{ Form::submit('Submit') }}
				{{ Form::close() }}
	        </div>
	    </div>
    </div>


    <div class="col-md-8">
	        <div class="column">
	        	
	        </div>
	    </div>
    </div>


@stop