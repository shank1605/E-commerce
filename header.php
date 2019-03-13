<?php
session_start();
$con=mysqli_connect('localhost','root','root','phpbatch34') or die("<h1>Problem in db connection</h1>");
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="description" content="" />
<meta name="keywords" content="" />
<title>PostKrde.com</title>
<link rel="icon" href="logo.jpeg" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="stylesheets/style.css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="javascripts/jquery.dropotron-1.0.js"></script>
<script type="text/javascript" src="javascripts/jquery.slidertron-1.1.js"></script>
<script type="text/javascript">
	$(function() {
		$('#menu > ul').dropotron({
			mode: 'fade',
			globalOffsetY: 11,
			offsetY: -15
		});
	});
</script>
</head>
<body>
<div id="wrapper">
	
 <div id="header">
		<div id="logo">
			<h1><a href="#">PostKrde.com</a></h1>
		</div>
		<div id="slogan">
			<h2>Buy & Sell Anything....</h2>
		</div>
	</div>
