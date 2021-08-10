<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>PizzaNOW</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
		<script src="https://kit.fontawesome.com/97327e6699.js" crossorigin="anonymous"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm sticky-top">
	<div class="container">
				<a class="navbar-brand" href="<?php echo base_url(); ?>index.php/home/index">
					<img class="logo" src="<?php echo base_url(); ?>assets/logo/logo.png">
				</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="collapsibleNavbar">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>index.php/home/index">Pizza</a></li>
				<li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>index.php/combo/index">Combo Deals</a></li>
				<li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>index.php/about/index">About Us</a></li>
			</ul>
			<div class="cart">
				<ul class="navbar-nav mr-auto">
					<li>
					<a class="nav-link" href="<?php echo base_url(); ?>index.php/cart/index"><i class="fas fa-shopping-cart"></i></a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</nav>
<div class="main-container">
