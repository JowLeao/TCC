<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recebe os dados do formulário
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Consulta SQL para verificar se o usuário existe
    // e a senha está correta
    $sql = "SELECT * FROM usuarios WHERE email='$email' AND senha='$senha'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Usuário encontrado, iniciar a sessão
        $_SESSION['email'] = $email;
        header("Location: pagina_do_usuario.php");
    } else {
        // Usuário não encontrado, redirecionar de volta para a página de login
        header("Location: login.php");
    }
}
?>
