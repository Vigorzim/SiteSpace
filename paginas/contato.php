<div class="container">
    <h1 class="text-center">Entre em contato</h1>
    <form name="formContato" method="post" action="enviar">
        <label for="nome">Preencha o seu nome:</label>
        <input type="text" name="nome" id="nome" 
        required class="form-control">
        <br>
        <label for="email">Preencha o seu email:</label>
        <input type="email" name="email" id="email" 
        required class="form-control form-control-lg">
        <br>
        <label for="mensagem">Digite sua mensagem:</label>
        <textarea name="mensagem" class="form-control"
        rows="5" required></textarea>
        <br>
        <button type="submit" class="btn btn-success">Enviar mensagem:</button>
    </form>
</div>