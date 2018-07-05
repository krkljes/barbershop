<!DOCTYPE html>
<html>
	<head>
		<title>Template</title>
		<meta charset="utf-8">
		<link href='css/fullcalendar.min.css' rel='stylesheet'>
		<link href='css/fullcalendar.print.min.css' rel='stylesheet' media='print'>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<script src="https://code.jquery.com/jquery-3.3.1.js"
		integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
		crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
		<script src='js/moment.min.js'></script>
		<script src='js/jquery.min.js'></script>
		<script src='js/jquery-ui.min.js'></script>
		<script src='js/fullcalendar.min.js'></script>
		<script src='js/main.js'></script>
	</head>
	<body>
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light">
			  <a class="navbar-brand pl-sm-2 pr-sm-2" href="#">Company</a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>

			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			    <ul class="navbar-nav ml-auto">
			      <li class="nav-item active">
			        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#">Link</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#">About us</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#">Contact</a>
			      </li>
			      <li class="nav-item dropdown">
			        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			          Products
			        </a>
			        <div class="dropdown-menu bg-transparent" aria-labelledby="navbarDropdown">
			          <a class="dropdown-item" href="#">Something</a>
			          <a class="dropdown-item" href="#">Anything</a>
			          <div class="dropdown-divider"></div>
			          <a class="dropdown-item" href="#">Categories</a>
			        </div>
			      </li>
			    </ul>
			    <form class="form-inline my-2 my-lg-0 ml-sm-2">
			      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
			      <button class="btn my-2 my-sm-0" type="submit">Search</button>
			    </form>
			  </div>
			</nav>
		    <div class="row">
		        <div id='wrap'>
				    <div id='calendar'></div>
				    <div style='clear:both'></div>
				</div>
		    </div>
		</div>
		<script type="text/javascript" src="js/main.js"></script>
	</body>
</html>