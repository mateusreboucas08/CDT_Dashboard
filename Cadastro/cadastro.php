<?php
CREATE DATABASE cadastro;
USE cadastro;
CREATE TABLE usuario (
    cpf INT PRIMARY KEY,
    nome VARCHAR(100),
    email VARCHAR(100),
    senha VARCHAR(100)
);
?>
<?php
$host = "localhost
$user = "root
$pass = ""
$db = "cadastro"

)
?>
'''crie um link desse php com o index.html'''
// Path: Cadastro/cad.html
<!DOCTYPE html>
<html>
<head>
    <title>Cadastro</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>
    <form action="cadastro.php" method="post">
        <input type="text" name="cpf" placeholder="CPF">
        <input type="text" name="nome" placeholder="Nome">
        <input type="text" name="email" placeholder="Email">
        <input type="password" name="senha" placeholder="Senha">
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>

