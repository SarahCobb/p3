@extends('master')

@section('title')
<title>Random User Generator</title>
@stop

@section('content')
<div class="row">
    <div class="col-md-4">
	        <div class="column row text-center">
	            {{ Form::open(array('url' => '/users', 'method' => 'POST', 'class' => 'form-horizontal', 'id' => 'users')) }}
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
				        {{ Form::label('Include Address?', 'Include Address?',
				            			array('class' => 'control-label col-s-2')) }}
				        {{ Form::checkbox('includeAddress', 'true', true) }}
	            	</div><br>
	            	<div class="form-group">
				        {{ Form::label('Include Favorite Color?', 'Include Favorite Color?',
				            			array('class' => 'control-label col-s-2')) }}
				        {{ Form::checkbox('includeFavColor', 'true', true) }}
	            	</div><br id="insertError">
	            	<div class="form-group">
	            		{{ Form::submit('Submit') }}
				{{ Form::close() }}
	        </div>
	    </div>
    </div>
    <div class="col-md-8">
	        <div class="column">
	        	<p><span class="doubleInverseIndent">[</span><br><br>
	        	@foreach($people as $entry => $person)
	        		<?php $countPeople++ ?>
	        	    <p><span class="inverseIndent">{</span><br>
	        	    <span class="highlight">"Name" :</span> "{{$person['firstName']}} {{$person['lastName']}}",</p>
	        	    <p><span class="highlight">"Email" :</span> "{{$person['firstName']}}.{{$person['lastName']}}@<?=$person['emailDomain']?>",</p>
	        		@if ($includeBirthday)
	        			<p><span class="highlight">"Birthday" :</span> "{{ $person['birthday'] }}",</p>
	        		@endif
	        		@if ($includeAddress)
	        			<p><span class="highlight">"Address" :</span> "{{ $person['address'] }}",</p>
	        		@endif
	        		@if ($includeFavColor)
	        			<p><span class="highlight">"Favorite Color" :</span> "{{ $person['favColor'] }}",</p>
	        		@endif
	        			<p><span class="highlight">"Description" :</span> "{{ $person['description'] }}"
        			@if ($countPeople == $numPeople)
        				<br><span class="inverseIndent">}</span></p></br>
        			@else
        				<br><span class="inverseIndent">},</span></p></br>
        			@endif
	        	@endforeach
	        	<p><span class="doubleInverseIndent">]</span><br>
	        </div>
	    </div>
    </div>
@stop

@section('validation')
<script type="text/javascript" src="/usersValidation.js"></script>
@stop