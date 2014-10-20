@extends('master')

@section('title')
<title>PokeGenerator: A Developer's Best Friend</title>
@stop

@section('content')

<div class="row">
    <div class="col-md-12">
    	<div class="top">
    		<h2>Welcome to PokeGenerator!</h2>
			<p>PokeGenerator is your one stop shop to create pokemon related lorem ipsum text and random users for your database. Click the buttons below or the links in the navigation bar to check it out.</p>
    	</div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="row text-center">
            <a href="/pokeipsum">PokeIpsum Generator</a>
        </div>
    </div>
    <div class="col-md-6">
        <div class="row text-center">
        	<a href="/pokepeople">PokePeople Generator</a>
        </div>
    </div>
</div>


@stop