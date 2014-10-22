@extends('master')

@section('title')
<title>Ipsum Generator</title>
@stop

@section('content')

<div class="row">
    <div class="col-md-4">
        <div class="column row text-center">
            {{ Form::open(array('url' => '/ipsum', 'method' => 'POST', 'id' => 'ipsum')) }}
                {{ Form::label('Number of Paragraphs', 'Number of Paragraphs') }}
                {{ Form::text('numParagraphs', '5') }}
                <br><br id="insertError">
                {{ Form::submit('Submit') }}
            {{ Form::close() }}
        </div>
    </div>
    <div class="col-md-8">
        <div class="column row text-center">

        </div>
    </div>
</div>

@stop

@section('validation')
<script type="text/javascript" src="/ipsumValidation.js"></script>
@stop