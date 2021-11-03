<?php


    
    session_start();

    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)){
   
        header('Location: login.php');
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
    } else{

    $logado = $_SESSION['email'];
    

    }

    include('config.php');

    if(isset($_POST['submit'])){

        $nome = ($_POST['nome']);
        $data_nasc = ($_POST['data_nasc']);
          $cpf = ($_POST['cpf']);
          $email = ($_POST['email']);
          $senha = ($_POST['senha']);

          $sql = mysqli_query($mysqli, "INSERT INTO tb_pessoas(nome, data_nasc, cpf, email, senha) VALUES('$nome', '$data_nasc', '$cpf', '$email', '$senha')");


       header("Location: carros.php");

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

    <form action="painel.php" method="POST" class="form">
    <fieldset>
        <legend class="legend"><b>Cadastro de Pessoa</b></legend> <br>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label for="nome" class ="input-group-text">Nome</label>
                </div>
                <input type="text" name="nome" required placeholder="Digite o seu nome" class="form-control">  
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label for="data_nasc" class ="input-group-text">Data de Nascimento</label>
                </div>
                <input type="date" name="data_nasc" required class="form-control">  
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label for="cpf" class ="input-group-text">CPF</label>
                </div>
                <input type="text" name="cpf" required class="form-control"  \
                pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" \
                title="Digite um CPF no formato: xxx.xxx.xxx-xx">  
            </div>
    


            <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    <label for="email" class ="input-group-text">E-mail</label>
                    </div>
                    <input type="email" name="email" required placeholder="Digite o seu email" class="form-control">  
                </div>

        
        
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    <label for="senha" class ="input-group-text">Senha</label></div>
                    <input type="password" name="senha" required placeholder="Digite a sua senha" class="form-control">
                </div>


   

        <button type="submit" name="submit" class="btn btn-primary">Enviar</button>

</fieldset>
</form>


<br>
        <a href="logout.php">Sair</a>
 
</body>
</html>