<?php 	

	include 'connect.php';
	
	// Routes

	$tpl = 'includes/templates/'; //Template Directory
	$css = 'layout/css/'; //Css Directory
	$js = 'layout/js/'; //Js Directory
	$lang = 'includes/languages/'; // Language Directory
	
	
	// IncludeThe Important Files

	//include $lang . 'english.php';
	include $tpl . 'header.php'; 

	// Includes Navbar On All Pages Except The One With $noNavbar Variable

	if (!isset($noNavbar)) { include $tpl . 'navbar.php'; }

	
	