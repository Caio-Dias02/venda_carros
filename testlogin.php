<?php

    session_start();

    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])){

        require_once('config.php');

        $email = $_POST['email'];
        $senha = $_POST['senha'];

        // print_r('Email'. $email);
        // print_r('senha'. $senha);

        $sql = "SELECT * FROM cadastro_user WHERE email = '$email' and senha = '$senha'";

        $result = $mysqli->query($sql);

        if(mysqli_num_rows($result) < 1){

            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            header('Location: login.php');
            
        } else {

            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;

            header('location: home.php');
        }

    } else {

        header('Location: login.php');
    }



?>