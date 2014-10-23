@extends('master')

@section('title')
<title>Developer's Best Friend</title>
@stop

@section('content')
<div class="row">
    <div class="col-md-12">
    	<h2>Welcome to Developer's Best Friend!</h2>
		<p class="center">Developer's Best Friend can create lorem ipsum text and random users for your database. The Lorem Ipsum text generator will return a PHP array, and the Random User generator will return a JSON array.</p>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <br><br>
        <div class="row text-center">
            <a class="button" href="/ipsum">Lorem Ipsum Generator</a>
        </div>
    </div>
    <div class="col-md-6">
        <br><br>
        <div class="row text-center">
        	<a class="button" href="/users">Random User Generator</a>
        </div>
    </div>
</div>
@stop