<?php

session_start();

if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)){

    header('Location: login.php');
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
} else{

$logado = $_SESSION['email'];

}


    include_once('config.php');


    if(isset($_POST['submit'])){


       //carros
       $modelo = ($_POST['modelo']);
       $fabricante = ($_POST['fabricante']);
       $ano = ($_POST['ano']);
       $categoria = ($_POST['categoria']);

       $sqli = mysqli_query($mysqli, "INSERT INTO tb_carros(modelo, fabricante, ano, categoria) VALUES('$modelo', '$fabricante', '$ano', '$categoria')");

       header("Location: mostrar.php");

    }
     
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Painel</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>

body {

background-color: #1e90ff;
}
.form{
    width: 50%;
    text-align: center;
    margin: 0 auto;
    background-color: rgba(0,0, 0, 0.8);
    color: white;
    justify-content: center;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    padding: 50px;
    border-radius: 20px;
    
}

</style>
</head>
<body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="home.php">
        <img src="./img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        SISTEMA DE CARROS
      <a class="btn btn-danger" href="logout.php" role="button">Sair</a>

    </nav>

    <form action="carros.php" method="POST" class="form">
        <fieldset>
            <legend class="legend"><b>Cadastro de Carro</b></legend> <br>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label for="modelo" class ="input-group-text">Modelo</label>
                </div>
                <input type="text" name="modelo" required placeholder="Digite o modelo" class="form-control">  
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label for="fabricante" class ="input-group-text">Fabricante</label>
                </div>
                <input type="text" name="fabricante" required placeholder="Digite o fabricante" class="form-control">  
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label for="ano" class ="input-group-text">Ano de Fabricação</label>
                </div>
                <input type="number" name="ano" required placeholder="Digite o Ano" class="form-control">  
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label for="categoria" class ="input-group-text">Categoria</label>
                </div>
                <input type="text" name="categoria" required placeholder="Digite a Categoria" class="form-control">  
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Enviar</button>
    </fieldset>
</form>
</body>
</html>