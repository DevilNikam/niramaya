<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// echo base_url();
$path=base_url().'index.php';
$assetpath=base_url().'assets/';
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Welcome to Niramaya Health Foundation - Niramaya</title>

	<link rel="stylesheet" href="<?php echo $assetpath ?>/plugins/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo $assetpath ?>/plugins/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="<?php echo $assetpath ?>/css/main.css">
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light">
	    <div class="container">
	        <a class="navbar-brand" href="index.html">
	            <img src="https://niramaya.org/wp-content/uploads/2015/12/logo.png" alt="">
	        </a>
	        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftcoNav" aria-controls="ftcoNav" aria-expanded="false" aria-label="Toggle navigation">
	            <span class="oi oi-menu"></span> Menu
	        </button>
	        <div class="collapse navbar-collapse" id="ftcoNav">
	            <ul class="navbar-nav ml-auto">
					<li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
					<li class="nav-item"><a href="support.html" class="nav-link">Support Us</a></li>
					<li class="nav-item"><a href="javascript:void(0)" class="nav-link">News</a></li>
					<li class="nav-item"><a class="nav-link" href="javascript:void(0)">Events</a></li>
					<li class="nav-item"><a href="javascript:void(0)" class="nav-link">Podcast</a></li>
					<li class="nav-item"><a href="javascript:void(0)" class="nav-link">Contact</a></li>
	            </ul>
	            <ul class="navbar-nav ml-auto">
	                <li class="nav-item cta"><a href="#" class="nav-link"><span>Donate</span></a></li>
	            </ul>
	        </div>
	    </div>
	</nav>

