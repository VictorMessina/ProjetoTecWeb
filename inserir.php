<!DOCTYPE html>
<html>
	<head>
		<title>AULA 2 - BANCO DE DADOS</title>
		<meta charset="utf-8"/>
	</head>
	<body>
		<?php
                echo " <form action='create.php' method='POST'>
                <p>Nome:<br/><input type='varchar' name='nome'/></p>
		<p>TIA:<br/><input type='bigint' name='tia'/></p>
		<p>sobrenome:<br/><input type='varchar' name='sobrenome'/></p>
                <p>email:<br/><input type='varchar' name='email'/></p>
                <p>curso:<br/><input type='text' name='curso'/></p>
                <p>senha:<br/><input type='varchar' name='senha'/></p>
                <p>sexo:<br/><input type='char' name='sexo'/></p>
                <p>data:<br/><input type='Date' name='data'/></p>
		<p><input type='submit' value='CADASTRAR'/></p>
						</form>";		
                ?>
