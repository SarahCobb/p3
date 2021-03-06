@extends('master')

@section('title')
<title>Ipsum Generator</title>
@stop

@section('content')
<div class="col-md-4">
    <div class="column row text-center">
        {{ Form::open(array('url' => '/ipsum', 'method' => 'POST', 'id' => 'ipsum')) }}
            {{ Form::label('numParagraphs', 'Number of Paragraphs') }}
            {{ Form::text('numParagraphs', '5') }}
            <br><br id="insertError">
            {{ Form::submit('Submit') }}
        {{ Form::close() }}
    </div>
</div>
<div class="col-md-8">
    <div class="column row text-center">
        @if (isset($paragraphs))
            <p><span class="inverseIndent highlight">$loremIpsum = array(</span><br><br>
                @foreach ($paragraphs as $key => $paragraph)
                    @if ($countParagraphs == $numParagraphs)
                        <p><span class="subHighlight">"</span>{{ $paragraph }}<span class="subHighlight">"</span></p><br>
                    @else
                        <p><span class="subHighlight">"</span>{{ $paragraph }}<span class="subHighlight">",</span></p><br>
                    @endif
                @endforeach
            <p><span class="inverseIndent highlight">);</span><br>
        @endif
    </div>
</div>
@stop

@section('validation')
<script type="text/javascript" src="/ipsumValidation.js"></script>
@stop