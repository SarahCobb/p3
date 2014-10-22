@extends('master')

@section('title')
<title>Developer's Best Friend</title>
@stop

@section('content')
<div class="row">
    <div class="col-md-12">
    	<div class="top">
    		<h2>Welcome to Developer's Best Friend!</h2>
			<p>Developer's Best Friend can create lorem ipsum text and random users for your database. Lorem Ipsum text will output as a PHP array, and users are served up as a JSON object.</p>
    	</div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <br><br>
        <div class="row text-center">
            <button class="btn-large"><a class="button" href="/ipsum">Lorem Ipsum Generator</a></button>
        </div>
    </div>
    <div class="col-md-6">
        <br><br>
        <div class="row text-center">
        	<button class="btn-large"><a class="button" href="/users">Random User Generator</a></button>
        </div>
    </div>
</div>
@stop