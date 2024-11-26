<?php
session_start();
include("conexao.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>DESENVOLVIMENTO</h1>
</br></br>
    <div>
        <h1>Detalhes</h1>
            <span>Nome: </span> <p><?php echo $_SESSION["name"];?></p>
            <span>Sobrenome: </span> <p><?php echo $_SESSION["surname"];?></p>
            <span>E-mail: </span> </p><?php echo $_SESSION["email"];?></p>
            <span>Senha: </span> <p><?php echo $_SESSION["password"];?></p>
            <span>Telefone: </span> <p><?php echo $_SESSION["phone"];?></p>
    </div>
</body>
</html>