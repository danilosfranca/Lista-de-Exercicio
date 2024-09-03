<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recebe a idade do formulário
    $idade = intval($_POST["idade"]);
    
    // Verifica se o usuário tem 18 anos ou mais
    if ($idade >= 18) {
        echo "<h2>Cadastro permitido! Você tem $idade anos.</h2>";
    } else {
        echo "<h2>Cadastro não permitido! Você deve ter pelo menos 18 anos para se cadastrar.</h2>";
    }
}
?>
