<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="stylesheet" href="pub/styles/css-framework.css">
	<link rel="stylesheet" href="pub/styles/main.css">
	<title>Codes</title>
</head>
<body>
	
	<main id="main-wrapper">
		<header id="main-header">
			<nav class="main-navigation">
				<ul>
					<li><a href="javascript:void();" data-tab="home" class="active-menu"><i class="fa fa-home fa-fw"></i> Home</a></li>
					<li><a href="javascript:void();" data-tab="css"><i class="fa fa-css3 fa-fw"></i> CSS</a></li>
					<li><a href="javascript:void();" data-tab="jquery"><i class="fa fa-jsfiddle fa-fw"></i> JQuery</a></li>
					<li><a href="javascript:void();" data-tab="wp"><i class="fa fa-wordpress fa-fw"></i> Wordpress</a></li>
				</ul>
			</nav> <!-- end of .main-navigation -->
		</header> <!-- end of #main-header -->
		<section id="main-section">
			<?php include('pub/inc/home.php'); ?>
			<?php include('pub/inc/css.php'); ?>
		</section> <!-- end of #main-section -->
		<footer id="main-footer">
			
		</footer> <!-- end of #main-footer -->
	</main> <!-- end of #main-wrapper -->
	
	<!-- scripts -->
		<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
		<script src="pub/js/prism.js"></script>
		<script src="pub/js/functions.js"></script>
	<!-- end of scripts -->
</body>
</html>