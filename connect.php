<?php

$connection = mysqli_connect('localhost','root','');
if (!$connection) {
	die("vérifiez votre configuration SQL" .	 mysqli_error($connection)); }
	
$select_db = mysqli_select_db($connection, 'database' );
if(!select_db) {
	die("selection de la database failed" . mysqli_error($connection)); }



?>