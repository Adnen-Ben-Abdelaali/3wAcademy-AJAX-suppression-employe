<?php

$pdo = new PDO('mysql:host=127.0.0.1;dbname=classicmodels', 'root', '');

$query = $pdo->query('SELECT firstName, lastName, jobTitle, city 
					 FROM employees 
					 INNER JOIN offices ON employees.officeCode = offices.officeCode'
					);

if ($query === false) {
	die('Erreur SQL');
}

$employees = $query->fetchAll(PDO::FETCH_ASSOC); 

include 'ex02.phtml';