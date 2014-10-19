@extends('master')

@section('require')
@stop

@section('title')
@stop

@section('content')

<div class="row">
    <div class="col-md-6">
        <div class="row text-center">
            {{ Form::open(array('url' => '/pokepeople', 'method' => 'POST')) }}
            	{{ Form::label('Number of People', 'Number of People') }}
            	{{ Form::text('numPeople', '5') }}
            	{{ Form::label('Include Birthday?', 'Include Birthday?') }}
            	{{ Form::checkbox('includeBirthday', '1', true) }}
            	{{ Form::label('Include Description?', 'Include Description?') }}
            	{{ Form::checkbox('includeDescription', '1', true) }}
            	{{ Form::submit('Submit') }}
			{{ Form::close() }}
        </div>
    </div>
    <div class="col-md-6">
        <div class="row text-center">
        	{{-- output --}}
        </div>
    </div>
</div>

@stop