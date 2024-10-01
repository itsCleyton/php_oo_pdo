<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Validação simples de login
    $authenticated = false;
    
    foreach ($users as $user) {
        if ($user['username'] === $username && $user['password'] === $password) {
            $authenticated = true;
            break;
        }
    }

    if ($authenticated) {
        echo "<script>alert('Login com sucesso. Redirecionando para o início!'); window.location.href = 'paciente.php';</script>";
    } else {
        echo "<script>alert('Usuário ou senha inválidos.'); window.location.href = 'index.php';</script>";
    }
} else {
    header('Location: index.php');
    exit();
}