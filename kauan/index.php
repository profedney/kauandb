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
    $username="id20481152_kauan";
    $password="@Kemsgta1234";
    $database="id20481152_database";
    //cria conexão
    $conn=new mysqli($servername,$username,$password,$database);
    //testa conexão
    if ($conn->connect_error){
        die("conexão com db falhou:".$conn->connect_error);
    }
    echo"conectado ao db";
    $sql="SELECT nome,sobrenome,telefone FROM agenda";
    $result=$conn -> query($sql);
    if ($result->num_row >0 ) {
        while ($row=$result->tetch_assoc()) {
            echo"nome". $row ["nome"].$row ["sobrenome"].$row ["telefone"]"<br>";

        }else {
            echo"table vazia"
           
        }
    
    }
    $conn->close();
    ?>
</body>
</html><!DOCTYPE html>
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
    $username="id20481152_kauan";
    $password="@Kemsgta1234";
    $database="id20481152_database";
    //cria conexão
    $conn=new mysqli($servername,$username,$password,$database);
    //testa conexão
    if ($conn->connect_error){
        die("conexão com db falhou:".$conn->connect_error);
    }
    echo"conectado ao db";
    $sql="SELECT nome,sobrenome,telefone FROM agenda";
    $result=$conn -> query($sql);
    if ($result->num_row >0 ) {
        while ($row=$result->tetch_assoc()) {
            echo"nome". $row ["nome"].$row ["sobrenome"].$row ["telefone"]"<br>";

        }else {
            echo"table vazia"
           
        }
    
    }
    $conn->close();
    ?>
</body>
</html>
