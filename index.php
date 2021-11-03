<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <style>
        body{

            font-family: Arial, Helvetica, sans-serif;
            text-align: center;
            color: white;
            background-color: #1e90ff;

        }
        .box{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 30px;
            border-radius: 10px;
        }

        a {
            text-decoration: none;
            color: white;
            border: 3px solid dodgerblue;
            border-radius: 10px;
            padding: 10px;
        }
        
        a:hover {
            background-color: dodgerblue;
        }

    </style>
</head>
<body>
    
    <div class="box">
        <a href="login.php">Login</a>
        <a href="cadastro.php">Cadastra-se</a>
    </div>

</body>
</html>