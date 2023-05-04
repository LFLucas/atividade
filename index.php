<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Inserir Automoveis</h1>

<a href="http://localhost:5000/listaautomoveis.php">Lista de Automoveis</a>
<?php 
$connection = mysqli_connect('localhost',"root","","mydb");
$montadoras = mysqli_query($connection,"SELECT * FROM mydb.montadora");   
?>

<form action="insere_automovel.php" method="post">
    <p>modelo:</p> <input type="text" name="modelo" />
    <p>placa:</p> <input type="text" name="placa" />
    <p>chassi:</p> <input type="text" name="chassi" />
    <p>montadora:</p> 
        <select name="montadora" id="montadora">
            <?php foreach ($montadoras as $montadora): ?>
                <option value=<?php echo $montadora["codigo"] ?> > <?php echo $montadora["nome"] ?></option>
            <?php endforeach; ?>
        </select>
    
    <p><input type="submit" value="Enviar"/></p>
</form>
    
    
</body>
</html>