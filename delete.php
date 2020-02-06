<?php

  $pdo = new PDO('mysql:localhost=127.0.0.1;dbname=classicmodels', 'root', '');

  $query = $pdo->prepare('DELETE FROM employees WHERE employeeNumber=:fonction');

  $result = $query->execute([
    "fonction" => $_GET['employeeNumber'] 
  ]);

  echo $result;