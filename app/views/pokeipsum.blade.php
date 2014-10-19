@extends('master')

@section('require')
@stop

@section('title')
@stop

@section('content')

<div class="row">
    <div class="col-md-6">
        <div class="row text-center">
            {{ Form::open(array('url' => '/pokeipsum', 'method' => 'POST')) }}
            	{{ Form::label('Number of Paragraphs', 'Number of Paragraphs') }}
            	{{ Form::text('numParagraphs', '5') }}
			    {{ Form::select('paragraphSize', array(
			        'small'  => 'Small',
			        'medium' => 'Medium',
			        'large'  => 'Large'
			    ), 'medium') }}
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