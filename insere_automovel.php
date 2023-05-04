<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Automovel Inserido</h1>
    <a href="http://localhost:5000/">Pagina Inicial</a>
    <a href="http://localhost:5000/listaautomoveis.php">Lista de Automoveis</a>
</body>
</html>
<?php 

$modelo = $_POST['modelo'];
$placa = $_POST['placa'];
$chassi = $_POST['chassi'];
$montadora = $_POST['montadora'];

$connection = mysqli_connect('localhost',"root","","mydb");

$query = "INSERT INTO mydb.automoveis (modelo,placa,chassi,montadora)
          VALUES('$modelo','$placa','$chassi',$montadora)";

mysqli_query($connection, $query);


?>    
