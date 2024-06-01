
<div class="container">
    <h2>Dados Enviados</h2>
</div>

    <div class="center">
        <?php
            $email = $_POST["email"] ?? null;
            $mensagem = $_POST["mensagem"] ?? null;
            $nome = $_POST["nome"] ?? null;
            
            echo "<p>Nome: {$nome} <br> Gmail: {$email}</p>"; 
            echo "<p> Mensagem: {$mensagem} </p>";
        ?>
        
    </div>

<div class="voltar">
    <a href="index.php">voltar para o home</a>
</div>