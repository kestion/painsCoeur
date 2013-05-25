<!DOCTYPE html>

<html>
	
	<head>
		
		<title>Kestion - Calypso Skinner</title>
		
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="Content-Language" content="fr" />
		
		<link rel="stylesheet" type="text/css" href="assets/styles/main.css" />
		
		<script type="text/javascript" src="assets/scripts/jquery.js"></script> 
		<script type="text/javascript" src="assets/scripts/script.js"></script> 
		
	</head>
	
	<body>
			
			<header>
				
				<?php 
				
					if(isset($ext_header) && $ext_header == TRUE)
						include 'mains/header.php'; 
					else
						include 'mains/header_min.php'; 
				?>
				
			</header>
			
			<div id="content">
					
				<?php
						
					if(isset ($template))
						include 'templates/'.$template.'.php';
					else 
						include 'templates/home.php';

				?>
					
			</div>
			
			<footer>
				
				<?php 
				
					if(isset($footer) && $footer == TRUE)
						include 'mains/footer.php'; 
				?>
				
			</footer>
		
	</body>
	
</html>