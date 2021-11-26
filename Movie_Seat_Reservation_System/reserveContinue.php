<?php

	ini_set ('display_errors', 1);
	error_reporting (E_ALL | E_STRICT);
	
	// Get the values from the $_POST array:
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$ticket = $_POST['qty'];

	print nl2br ("Hi, thank you for your order $firstname $lastname!\n
	You have booked $ticket ticket(s).");


?>