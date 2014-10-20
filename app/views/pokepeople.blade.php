@extends('master')

@section('require')
<title>PokeGenerator: PokePeople</title>
@stop

@section('title')
@stop

@section('content')

<div class="row">
    <div class="col-md-6">
    	<div class="top">
	        <div class="row text-center">
	            {{ Form::open(array('url' => '/pokepeople', 'method' => 'POST')) }}
	            	{{ Form::label('Number of People', 'Number of People') }}
	            	{{ Form::text('numPeople', '5') }}
	            	<br>
	            	{{ Form::label('Include Birthday?', 'Include Birthday?') }}
	            	{{ Form::checkbox('includeBirthday', '1', true) }}
	            	<br>
	            	{{ Form::label('Include Address?', 'Include Address?') }}
	            	{{ Form::checkbox('includeAddress', '1', true) }}
	            	<br>
	            	{{ Form::label('Include Description?', 'Include Description?') }}
	            	{{ Form::checkbox('includeDescription', '1', true) }}
	            	<br>
	            	{{ Form::submit('Submit') }}
				{{ Form::close() }}
	        </div>
	    </div>
    </div>
    <div class="col-md-6">
        <div class="row text-center">
        	{{-- output --}}
        </div>
    </div>
</div>

@stop