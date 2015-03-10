<?php
	// Validate e-mail address is not empty.
	if ((!isset($_POST['email'])) || ($_POST['email'] == "") || (strpos($_POST['email'], '@') == false))
	{
		echo "0";
		exit;
	}
	
	try
	{
		// Insert line in database
		$c = new PDO('mysql:host=DB_HOST;dbname=DB_NAME', 'DB_USER', 'DB_PASSWORD', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
		$stmtInsert = $c->prepare("
			INSERT INTO mailinglist (subscription_date, ip, email) 
			VALUES (:date, :ip, :email)"
		);
			
		$stmtInsert->execute(array(
			"date" => date("Y-m-d H:i:s"),
			"ip" => $_SERVER['REMOTE_ADDR'],
			"email" => $_POST['email']
		));
		
		echo "1";
		exit;
	}
	catch (Exception $e)
	{
		echo "0";
		exit;
	}
?>