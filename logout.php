<?php
session_start();
session_destroy(); // Destroi todas as sessões

// Redireciona de volta para a página de login
header("Location: login.php");
exit();
?>

