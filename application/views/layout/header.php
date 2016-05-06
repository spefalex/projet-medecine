<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> <?php echo $title; ?> </title>
	<link href=" <?php echo base_url('public/css/bootstrap.css'); ?> " rel="stylesheet" type="text/css" />
	<link href=" <?php echo base_url('public/css/style.css'); ?> " rel="stylesheet" type="text/css" />
	<link href=" <?php echo base_url('public/css/mobile.css'); ?> " rel="stylesheet" type="text/css" />
</head>
<body>

	<header>
		<nav class="navbar navbar-dark bg-inverse">
			<button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar2">
		    &#9776;
		  	</button>
		  	<div class="collapse navbar-toggleable-xs" id="exCollapsingNavbar2">
		    	<a class="navbar-brand" href="#">LOGO</a>
				<ul class="nav navbar-nav">
			    	<li class="nav-item active">
			      	<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
				    </li>
				    <li class="nav-item">
				      	<a class="nav-link" href="#">Features</a>
				    </li>
				    <li class="nav-item">
				      	<a class="nav-link" href="#">Pricing</a>
				    </li>
				    <li class="nav-item">
				      	<a class="nav-link" href="#">About</a>
				    </li>
			  	</ul>
			   	<form class="form-inline pull-xs-right">
			    	<input class="form-control" type="text" placeholder="Rechercher...">
			    	<button class="btn btn-info-outline" type="submit">OK</button>
			 	 </form>
			</div>
		</nav>
	</header>

	<div class="site-content">
		<div class="container">
			
		