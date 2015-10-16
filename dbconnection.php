<?php

session_start();

$host = "localhost";
$user = "root";
$pass = "root";
$dbname = "blog";

try
{
	$dbcon = new PDO("mysql:host={$host};dbname={$dbname}",$user,$pass);
	$dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
	echo $e->getMessage();
}