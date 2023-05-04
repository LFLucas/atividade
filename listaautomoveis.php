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

if(array_key_exists("automovelNome",$_GET) && $_GET["automovelNome"] != null){
    $automoveis_montadoras = mysqli_query($connection, 
    "SELECT * FROM automoveis JOIN montadora WHERE montadora.codigo = automoveis.montadora AND modelo = '{$_GET['automovelNome']}' ");}
else{
    $automoveis_montadoras = mysqli_query($connection, 
    "SELECT * FROM automoveis JOIN montadora WHERE montadora.codigo = automoveis.montadora");}
?>


<body>
    <h1>Lista de Automoveis</h1>

    <form action="listaautomoveis.php" method="get">
        <label for="search">
            <input type="text" name="automovelNome" placeholder="Pesquisar">
            <input type="submit" value="pesquisar">
        </label>
    </form>


<?php foreach($automoveis_montadoras as $automovel): ?>
    <a href="http://localhost:5000/detalhes.php?codigo=<?= $automovel['codigo']?>">
        <h2><?php echo($automovel["modelo"]) ?></h2>
        <p><?php echo($automovel["nome"]) ?></p>
    </a>
<?php endforeach ?>


</body>

</html>