<!doctype html>
<?php require_once '/Applications/MAMP/htdocs/p3/app/models/logic.php' ?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	@yield('title')
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    	<link rel="stylesheet" type="text/css" href="/style.css">
</head>
<body>
	<div class="container">
        <nav role="navigation" class="navbar navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <h1 style="text-align:center">PokeGenerator: A Developers Best Friend</h1>
                </div>
                <div id="navbarCollapse" class="collapse navbar-collapse">
                	<li><a href="/">Home</a></li>
                	<li><a href="/pokeipsum">PokeIpsum</a></li>
                	<li><a href="/pokepeople">PokePeople</a></li>
                </div>
            </div>
        </nav>
		@yield('content')
	</div>
</body>
</html>
