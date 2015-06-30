<form method="POST" action="user_save.php">
    <div class="form-group">
        <label>Nome</label>
        <input type="name" class="form-control" id="name" name="name" placeholder="Nome">
    </div>
    <div class="form-group">
        <label>E-mail</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
    </div>
    <div class="form-group">
        <label>Senha</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Senha">
    </div>
    <div class="form-group">
        <label>Confirmar Senha</label>
        <input type="password" class="form-control" id="password_confirm" name="password_confirm"
               placeholder="Confirmar Senha">
    </div>
    <button type="submit" id="btn-user-submit" class="btn btn-default">Cadastrar</button>
</form>