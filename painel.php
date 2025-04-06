<?php
session_start();

// Verifica se o usuário está logado
if (!isset($_SESSION['usuario'])) {
    header("Location: index.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel do Usuário</title>
    <link rel="shortcut icon" href="img/icon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/painel.css">
</head>
<body>
<body>
    <main>
        <a href="index.html"><img src="img/icon.png" alt="Logo da turma S3 rede N1"></a>
        <h1 class="welcome">Bem-vindo, <?php echo $_SESSION['usuario']; ?>!</h1>
        <p>Seu login foi realizado com sucesso.</p>
    <a href="logout.php"><button>Logoff</button></a>
    </main>

    <footer>
        <a href="https://www.instagram.com/ascomceepisaiasalves/" target="_blank">
        <img class="isaias" src="img/ceep.png" alt="Logo do CEEP Isaías Alves">
        </a>
        <p>CEEP ISAÍAS ALVES: S3 REDE N1 - SEGURANÇA DE SISTEMAS - 3º SEMESTRE.</p>
    </footer>
</body>
</html>
