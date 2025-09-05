<?php
// login.php

// Definindo usuário e senha válidos (você pode trocar por dados de um banco futuramente)
$usuario_correto = "admin";
$senha_correta = "1234";

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $usuario = $_POST["username"] ?? '';
    $senha = $_POST["password"] ?? '';

    // Verificação simples
    if ($usuario === $usuario_correto && $senha === $senha_correta) {
        echo "<h2>Login realizado com sucesso!</h2>";
        echo "<p>Bem-vindo, <strong>" . htmlspecialchars($usuario) . "</strong>.</p>";
    } else {
        echo "<h2>Usuário ou senha incorretos.</h2>";
        echo "<p><a href='index.html'>Tentar novamente</a></p>";
    }
} else {
    // Se não for um POST, redireciona para o formulário
    header("Location: index.html");
    exit();
}
?>
