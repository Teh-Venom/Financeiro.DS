<?php
	try
	{
		header('Content-Type: text/html; charset=utf-8');
		$conex = new PDO("mysql:host=localhost;dbname=financeiro_bd;charset=utf8","root","");
		$conex -> query("SET NAMES 'utf8'");
	}
	catch(PDOexception $e)
	{
		echo $e->getMessage();
	}
?>