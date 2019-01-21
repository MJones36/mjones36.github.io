<?php 

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$mailFrom = $_POST['email'];
	$message = $_POST['message'];

	$mailTo = "Marthao.jones15@gmail.com";
	$headers = "From: ".$mailFrom;
	$txt = "You have recieved an e-mail from ".$name.".\n\n".$message;

	mail($mailTo, $txt, $headers);
	headers("Location: page2.html?mailsend");

}

 