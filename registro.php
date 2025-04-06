<?php
// Conexão com o banco de dados
$host = "localhost";
$user = "root";
$pass = "";
$db = "usuarios_db"; // nome do seu banco de dados

$conn = new mysqli($host, $user, $pass, $db);

// Verifica conexão
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

// Pega os dados do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT); // Criptografa a senha

// Insere no banco
$sql = "INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $nome, $email, $senha);

if ($stmt->execute()) {
    echo "Usuário registrado com sucesso!";
} else {
    echo "Erro ao registrar: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>