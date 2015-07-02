<div class="container">
    <div class="row" style="margin-top: 10px">
        <div class="col-md-9 column">
            <div class="row clearfix">
                <div class="col-md-3 column">
                    <img alt="140x140" height="140" src="http://lorempixel.com/140/140/">
                </div>
                <div class="col-md-9 column">
                    <div class="page-header">
                        <h1>
                            Loja do Café
                            <small>sabores para todos os gostos</small>
                        </h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2 column">
            <?php if (!empty($_SESSION['user']['id'])) { ?>
                <h4>Bem vindo, <?php echo $_SESSION['user']['name'] ?>!</h4>
                <a href="./logoff.php">Sair</a>
            <?php } else { ?>
                <form role="form" style="margin-top: 15px" action="login.php" method="post">
                    <div class="form-group ">
                        <input type="email" placeholder="E-mail" class="form-control input-sm" name="email"
                               id="exampleInputEmail1">
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="Senha" class="form-control input-sm" name="password"
                               id="exampleInputPassword1">
                    </div>
                    <button type="submit" class="btn btn-default btn-sm">Login</button>
                </form>
            <?php } ?>
        </div>
    </div>
</div>