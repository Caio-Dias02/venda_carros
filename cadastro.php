<?php

    require_once('config.php');

    if(isset($_POST['submit'])){


        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $sql = mysqli_query($mysqli, "INSERT INTO cadastro_user(email, senha) VALUES ('$email', '$senha')");

        header('Location: login.php');



    } 


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuario</title>
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

        button{

            margin: 10px 0;
        }

        .legend{

            font-weight: bold;
            font-size: 50px;
        }
            
        
    </style>
</head>
<body>
    
    <form action="cadastro.php" method="POST" class="form">
        <fieldset>
            <legend class="legend"><b>Cadastro de Usuario</b></legend> <br>

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
        

        <button type="submit" name="submit" class="btn btn-primary">Cadastrar</button>

        <p>Já cadastrado?<a href="login.php" class="stretched-link">Acesse aqui</a></p>
        </fieldset>
    </form>
   
    
</body>
</html>