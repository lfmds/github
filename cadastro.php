<!-- Cadastro -->
<?php
include("conexao.php");

if (isset($_POST["name"]) || isset($_POST["surname"]) || isset($_POST["email"]) || isset($_POST["password"]) || isset($_POST["phone"])) {
    $nome = $mysqli->real_escape_string($_POST["name"]);
    $sobrenome = $mysqli->real_escape_string($_POST["surname"]);
    $email = $mysqli->real_escape_string($_POST["email"]);
    $senha = $mysqli->real_escape_string($_POST["password"]);
    $telefone = $mysqli->real_escape_string($_POST["phone"]);
    $politica = $mysqli->real_escape_string($_POST["policy"]);

    // Consulta no banco para ver se ja tem cadastro
    $sql_email = "SELECT * FROM cadastro WHERE email = '$email'";
    $sql_query_email = $mysqli->query($sql_email) or die("Falha na execução do código SQL: " . $mysqli->error);

    $quantidade_email = $sql_query_email->num_rows;

    if ($quantidade_email > 0) { // Mensagem de alerta caso já exista o usuário
        echo ("
                <SCRIPT LANGUAGE='JavaScript'>
                    window.alert('E-mail já cadastrado, tente novamente!');
                    window.location.href = 'cadastro.php';
                </SCRIPT>
            ");
    } else {
        $sql = "INSERT INTO cadastro (nome, sobrenome, email, senha, telefone, politica) VALUES (?, ?, ?, ?, ?, ?)"; // Codigo SQL para inserção de dados no banco
        $stmt = $mysqli->prepare($sql); // Prepara o statement

        // Verifica se o statement foi preparado corretamente
        if ($stmt) {
            // Bind dos parâmetros (associa as variáveis aos placeholders)
            $stmt->bind_param("ssssss", $nome, $sobrenome, $email, $senha, $telefone, $politica);

            // Executa a consulta e verificação de sucesso
            if ($stmt->execute()) {
                echo ("
                        <SCRIPT LANGUAGE='JavaScript'>
                            window.alert('Usuário cadastrado com sucesso!');
                            window.location.href = 'login.php';
                        </SCRIPT>
                    ");
            } else {
                echo "Erro ao inserir dados: " . $stmt->error;
            }

            // Fecha o statement
            $stmt->close();
        } else {
            echo "Erro na preparação da consulta: " . $mysqli->error;
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css" text="text/css">
    <script src="main.js"></script>
    <title>Cadastro</title>
</head>

<body>
    <header>
        <div class="form-popup">
            <a href="index.html"><img src="imagens/x.png"></a>
            <div class="form-box login">
                <div class="form-details">
                    <h4>Cadastre-se</h4>
                    <p>Crie um login, para entrar na conta com as informações cadastradas</p>
                </div>
                <div class="form-content">
                    <h4>CADASTRO</h4>
                    <form action="#" method="POST" onsubmit="return cadastraForm()">
                        <div class="input-field">
                            <input type="text" id="name" name="name" placeholder="Nome">
                        </div>
                        <div class="show_span">
                            <span id="erro_name" class="erro_cadForm"></span>
                        </div>

                        <div class="input-field">
                            <input type="text" id="surname" name="surname" placeholder="Sobrenome">
                        </div>
                        <div class="show_span">
                            <span id="erro_surname" class="erro_cadForm"></span>
                        </div>

                        <div class="input-field">
                            <input type="email" id="email" name="email" placeholder="E-mail">
                        </div>
                        <div class="show_span">
                            <span id="erro_email" class="erro_cadForm"></span>
                        </div>

                        <div class="input-field">
                            <input type="password" id="password" name="password" placeholder="Senha">
                        </div>
                        <div class="show_span">
                            <span id="erro_password" class="erro_cadForm"></span>
                        </div>

                        <div class="input-field">
                            <input type="tel" id="phone" name="phone" placeholder="Telefone">
                        </div>
                        <div class="show_span">
                            <span id="erro_phone" class="erro_cadForm"></span>
                        </div>

                        <div class="policy-text">
                            <input type="checkbox" id="policy" name="policy" value="sim">
                            Eu concordo com as políticas do site
                        </div>
                        <div class="show_span">
                            <span id="erro_policy" class="erro_cadForm"></span>
                        </div>

                        <button type="submit">Cadastrar</button>
                    </form>

                    <div class="bottom-link">
                        Já possui cadastro?
                        <a href="login.php">Entrar</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
</body>

</html>