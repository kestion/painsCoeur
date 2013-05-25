<?php 
	
	if(isset ($_GET['page'])) //inclut les pages.
	{
		$template = $_GET['page'];
	}
	
	$header_pages = array
	(
		'charte' => 'header',
		'presse' => 'header',
		'adherer' => 'header'
	);
	
	$footer_pages = array
	(
		'charte' => 'footer',
		'presse' => 'footer',
		'adherer' => 'footer'
	);
	
	if(isset($template) && array_key_exists($template, $header_pages))
		$ext_header = TRUE;
	
	$header_pages = array
	(
		'charte' => 'header',
		'presse' => 'header',
		'adherer' => 'header'
	);
	
	if(isset($template) && array_key_exists($template, $footer_pages))
		$footer = TRUE;
		
	include 'views/main.php';
	
?>