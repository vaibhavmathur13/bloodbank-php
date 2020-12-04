<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style>
    	body{
			background-image: url("https://www.blooddrivesafety.com/wp-content/uploads/2015/04/cropped-bdsbackground.jpg");
			height: 100%;
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;
			opacity: 0.9;
		}
		a{
			color: black;
		}
		.jumbotron{
		    background-color:#343A40;
		    text-align:center;
		    color: #FFFFFF;
		}
    </style>
	<title>Blood Bank</title>
</head>
<body>
	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		  <a class="navbar-brand" href="/base.php">BloodBank</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item">
		        <a class="nav-link" href="/loginh.php">Hospital Login</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="/loginr.php">Receiver Login</a>
		      </li>
		  </ul>
		</nav>
		<div class="jumbotron">
			<h1><?php print('Blood Bank'); ?></h1>
		</div>