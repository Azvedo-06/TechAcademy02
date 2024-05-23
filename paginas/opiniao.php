<div class="container">
    <h2>Enviar sua opinião</h2>
</div>

<div class="formulario">
    <form action="respostaForm" name="form" method="$_POST">
        <label for="nome">Digite seu nome:</label>
        <input type="text" name="nome" id="nome" placeholder="Nome completo" required>
        <br>
        <label for="email">Digite seu E-mail</label>
        <input type="email" name="email" id="email" placeholder="Digite um Gmail" inputmode="email" required>
        <br>
        <label for="mensagem">Deixe Sua opinião</label>
        <textarea name="mensagem" id="mensagem" rows="4" required></textarea>

        <button type="submit">Enviar Dados</button>
    </form>
</div>