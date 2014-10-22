@extends('master')

@section('title')
<title>Ipsum Generator</title>
@stop

@section('content')

<div class="row">
    <div class="col-md-6">
    	<div class="top">
	        <div class="row text-center">
	            {{ Form::open(array('url' => '/ipsum', 'method' => 'POST')) }}
	            	{{ Form::label('Number of Paragraphs', 'Number of Paragraphs') }}
	            	{{ Form::text('numParagraphs', '5') }}
	            	<br>
	            	{{ Form::label('Paragraph Size', 'Number of Paragraphs') }}
	            	<br>
				    {{ Form::submit('Submit') }}
				{{ Form::close() }}
        	</div>
    	</div>
    </div>
    <div class="col-md-6">
        <div class="row text-center">
        	
        </div>
    </div>
</div>

@stop