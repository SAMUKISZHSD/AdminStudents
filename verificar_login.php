<?php
session_start();

// Verifique se o usuário está logado
if(isset($_SESSION['usuario_logado'])) {
    // Retorne o caminho para dashboard.php
    echo './pages/dashboard.php';
} else {
    // Retorne o caminho para index.php
    echo 'index.php';
}
?>


