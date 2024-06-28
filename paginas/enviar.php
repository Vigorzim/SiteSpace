<?php
    $nome = $_POST["nome"] ?? NULL;
    $email = $_POST["email"] ?? NULL;
    $mensagem = $_POST["mensagem"] ?? NULL;

    echo "Você digitou: <br>
    Nome: {$nome} <br>
    E-mail: {$email} <br>
    Mensagem {$mensagem}";