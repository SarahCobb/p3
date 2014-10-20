<!doctype html>
<?php require="p3/app/models/logic.php" ?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	@yield('title', "PokeGenerator: A PokeFan Developer's Best Friend")
	<link rel="stylesheet" type="text/css" href="htdocs/p3/public/style.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
        <nav role="navigation" class="navbar navbar-fixed-top">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <h1 style="text-align:center">PokeGenerator: A Developer's Best Friend</h1>
                </div>
                <!-- Collection of nav links and other content for toggling -->
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
