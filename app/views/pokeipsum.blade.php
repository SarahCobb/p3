@extends('master')

@section('title')
<title>PokeGenerator: PokeIpsum</title>
@stop

@section('content')

<div class="row">
    <div class="col-md-6">
    	<div class="top">
	        <div class="row text-center">
	            {{ Form::open(array('url' => '/pokeipsum', 'method' => 'POST')) }}
	            	{{ Form::label('Number of Paragraphs', 'Number of Paragraphs') }}
	            	{{ Form::text('numParagraphs', '5') }}
	            	<br>
	            	{{ Form::label('Paragraph Size', 'Number of Paragraphs') }}
				    {{ Form::select('paragraphSize', array(
				        'small'  => 'Small',
				        'medium' => 'Medium',
				        'large'  => 'Large'
				    ), 'medium') }}
				    <br>
				    {{ Form::submit('Submit') }}
				{{ Form::close() }}
        	</div>
    	</div>
    </div>
    <div class="col-md-6">
        <div class="row text-center">
        	{{ $pokeIpsum }}
        </div>
    </div>
</div>

@stop