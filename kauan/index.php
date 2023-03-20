<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>teste php</title>
</head>
<body>
    <h1> teste php</h1>
    <?php
    //kauan, ana julia, amanda
    echo"isso é php";
    echo" kauan";
    ?>
    <?php
    $servername="localhost";
    $username="ana";
    $password="12345678";
    //cria conexão
    $conn=new mysqli($servername,$username,$password);
    //testa conexão
    if ($conn->connect_error){
        die("conexão com db falhou:".$conn->connect_error);
    }
    echo"conectado ao db";
    ?>
</body>
</html>