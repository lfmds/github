<!-- Login -->
<?php
include("conexao.php");

if (isset($_POST["authemail"]) || isset($_POST["authpassword"])) { // Verifica se 'existe' isset
    $email = $mysqli->real_escape_string($_POST["authemail"]); // Efetua um'limpa' no email para evitar SQL Injection
    $senha = $mysqli->real_escape_string($_POST["authpassword"]);

    // Consulta o banco
    $sql_code = "SELECT * FROM cadastro WHERE email = '$email' AND senha = '$senha'"; // Selecione tudo de usuarios onde email digitado = email do banco e senha digitada = senha do banco
    $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

    $quantidade = $sql_query->num_rows; // Armazena a quantidade de linhas (usuarios) que o SELECT retornou

    if ($quantidade == 1) { // Se apenas um usuario

        $usuario = $sql_query->fetch_assoc();

        if (!isset($_SESSION)) { // Caso não existir uma sessão
            session_start(); // Inicia a sessão
        }

        $_SESSION["id"] = $usuario["id"]; // Passa as variavéis para a sessão
        $_SESSION["name"] = $usuario["nome"];
        $_SESSION["surname"] = $usuario["sobrenome"];
        $_SESSION["email"] = $usuario["email"];
        $_SESSION["password"] = $usuario["senha"];
        $_SESSION["phone"] = $usuario["telefone"];

        echo ("
                <SCRIPT LANGUAGE='JavaScript'>
                    var userName = '" . $_SESSION["name"] . "';
                    window.alert('Bem-Vindo ' + userName);
                    window.location.href = 'logado.php';
                </SCRIPT>
            ");
        // header("Location: logado.php");
    } else {
        echo ("
                <SCRIPT LANGUAGE='JavaScript'>
                    window.alert('E-mail ou senha incorretos!');
                </SCRIPT>
            ");
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/stylesheet.css" text="text/css">
    <script src="main.js"></script>
    <title>Login</title>
</head>

<body>
    <header>
        <div class="form-entrar">
            <div class="form-popup">
                <a href="index.html"><img src="imagens/x.png"></a>
                <div class="form-box login">
                    <div class="form-details">
                        <h4>Bem Vindo</h4>
                        <p>Faça o login, utilizando suas informações cadasradas</p>
                    </div>
                    <div class="form-content">
                        <h4>LOGIN</h4>
                        <form action="#" method="POST" onsubmit="return authForm()">
                            <div class="input-field">
                                <input type="text" id="authemail" name="authemail" placeholder="E-mail">
                            </div>
                            <div class="show_span">
                                <span id="erro_authemail" class="erro_cadForm"></span>
                            </div>

                            <div class="input-field">
                                <input type="password" id="authpassword" name="authpassword" placeholder="Senha">
                            </div>
                            <div class="show_span">
                                <span id="erro_authpassword" class="erro_cadForm"></span>
                            </div>
                            <button type="submit">Entrar</button>
                        </form>

                        <div class="bottom-link">
                            Novo INFOTEC!
                            <a href="cadastro.php">Cadastre-se</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
</body>

</html>