<?php
	$hostname = 'localhost';
	$username = 'root';
	$passsword = '';
	$dbname	= 'db_sampinggarage';

	$conn = mysqli_connect($hostname, $username, $passsword, $dbname) or die ('Gagal terhubung ke database');
?>