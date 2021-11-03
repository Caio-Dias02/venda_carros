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

        $id_nome= ($_POST['nome']); 
         $id_modelo = ($_POST['modelo']);


        $sql = mysqli_query($mysqli, "INSERT INTO carros_pessoas(id_pessoas, id_carros) VALUES ('$id_nome', '$id_modelo')");
    } 
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
<nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="home.php">
        <img src="./img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        SISTEMA DE CARROS
      <a class="btn btn-danger" href="logout.php" role="button">Sair</a>
    </nav>


<form action="mostrar.php" method="POST" class="form">
  <fieldset>
    <legend class="legend"><b>Carros</b></legend> <br>

  <select name="modelo"  id="modelo">
     
    <?php 
    
    $consulta = "SELECT id_carros, modelo from tb_carros";
    $con = $mysqli->query($consulta) or die ($mysqli->error);
    
    while ($rows = mysqli_fetch_assoc($con)){
        ?>

        <option value="<?php echo $rows['id_carros'];?>"><?php echo $rows['modelo'];?></option>

        <?php
    }
        ?>
  </select>
    
  <legend class="legend"><b>Pessoas</b></legend> <br>

      <select name="nome"  id="nome" class="form-select">
        
        <?php 
        
        $consulta1 = "SELECT id_pessoas,nome from tb_pessoas";
        $con1 = $mysqli->query($consulta1) or die ($mysqli->error);
        
        while ($rows1 = mysqli_fetch_assoc($con1)){
            ?>

            <option value="<?php echo $rows1['id_pessoas'];?>"><?php echo $rows1['nome'];?></option>

            <?php
        }
            ?>
      </select> <br>

      <button type="submit" name="submit" class="btn btn-primary">Enviar</button>

    </fieldset>
  </form>

</body>
</html>