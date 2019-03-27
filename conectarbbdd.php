<?php
	$host='127.0.0.1';
	$user='root';
	$pass= 'er300896';
	// $mysqli = new mysqli($host, $user, $pass, 'nomina');
	$mysqli = mysqli_connect($host,$user,$pass,'nomina');
	// $mysqli->set_charset("utf8");

	// $mysqli = mysql_connect('$host', '$user', '$pass') or
    // die('Could not connect: ' . mysql_error());
	// mysql_select_db('facturacrm');
?>