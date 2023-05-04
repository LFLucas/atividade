<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php
$connection = mysqli_connect('localhost',"root","","mydb");
$automovel = mysqli_query($connection,
    "SELECT * FROM automoveis JOIN montadora WHERE montadora.codigo = automoveis.montadora AND automoveis.codigo = {$_GET['codigo']};"); 
?>

<body>
    <?php foreach($automovel as $automovel): ?>
        <h1><?php echo($automovel["modelo"]) ?></h2>
        <p>montadora: <?php echo($automovel["nome"]) ?></p>
        <p>placa: <?php echo($automovel["placa"]) ?></p>
        <p>chassi: <?php echo($automovel["chassi"]) ?></p>
    <?php endforeach ?>

</body>
</html>