<!--Luiz fez o código-->
<?php
session_start();
include("conexao.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imprimir Tabela DB</title>
</head>

<body>
    <h2>Tabela Cadastro:</h2>
    <form action="" method="POST">
        <button type="submit" name="showdata" value="enviar">Mostrar Dados</button>
        </br></br>
    </form>
</body>

</html>


<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' and isset($_POST['showdata'])) {
    echo '<table border=1>
    <tr>
    <th>Id</th>
    <th>Nome</th>
    <th>Sobrenome</th>
    <th>E-mail</th>
    <th>Senha</th>
    <th>Telefone</th>
    <th>Política</th>
    </tr>';

    $connection = mysqli_connect($server, $user, $password, $database);
    $consult = "SELECT * FROM cadastro";
    $consultdata = mysqli_query($connection, $consult);

    while ($linha = mysqli_fetch_assoc($consultdata)) {
        echo '<tr><td>' . $linha['id'] . '</td>';
        echo '<td>' . $linha['nome'] . '</td>';
        echo '<td>' . $linha['sobrenome'] . '</td>';
        echo '<td>' . $linha['email'] . '</td>';
        echo '<td>' . $linha['senha'] . '</td>';
        echo '<td>' . $linha['telefone'] . '</td>';
        echo '<td>' . $linha['politica'] . '</td></tr>';
    }
    echo '</table>';
}
?>
