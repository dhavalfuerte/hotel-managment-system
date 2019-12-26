<!DOCTYPE HTML>
<html>
<head>
<title> Royal Hotel</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<link href="{{asset('User/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
<script src="{{asset('User/js/jquery-1.6.2.min.js')}}"></script>
<link href='//fonts.googleapis.com/css?family=Monda' rel='stylesheet' type='text/css'>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
</head>
<body>
<div class="header">
<div class="wrap">
	<div class="wrapper">
 	<div class="logo">
			<a href="index.php"><img src="{{asset('User/images/logo3.png')}}"/></a>
			<!--- <h1>The Grand Thakar Hotel</h1>  -->
	</div>
 	<div class="menu">
			<ul>
				<li class="active" ><a  href="home">Home</a></li>
				<li><a href="service">Services</a></li>
				<li><a  href="room">Rooms</a></li>
				<li><a  href="food">Foods</a></li>
				<li><a  href="contact">Contact Us</a></li>
				<li><a  href="about">About Us</a></li>
				<li><a  href="feedback">Feedback</a></li>
				@guest
					<li><a  href="login">Login</a></li>
				@else
					<li><a  href="logout">Logout</a></li>
					
				@endguest
				
			</ul>
			 <div class="clear"></div>
	</div>
	