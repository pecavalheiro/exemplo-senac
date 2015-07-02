<ul class="nav nav-pills nav-stacked">
    <li class="<?php echo $_GET['p'] == '' ? 'active' : '' ?>">
        <a href="./index.php">Home</a>
    </li>
    <li class="<?php echo $_GET['p'] == 'produtos' ? 'active' : '' ?>">
        <a href="./index.php?p=produtos">Produtos</a>
    </li>
    <li class="<?php echo $_GET['p'] == 'sobre' ? 'active' : '' ?>">
        <a href="./index.php?p=sobre">Sobre</a>
    </li>
    <li class="<?php echo $_GET['p'] == 'contato' ? 'active' : '' ?>">
        <a href="./index.php?p=contato">Contato</a>
    </li>
    <?php if ($_SESSION['user']['id']) { ?>
        <li class="<?php echo $_GET['p'] == 'user-form' ? 'active' : '' ?>">
            <a href="./index.php?p=user-form">Gerenciar Usuários</a>
        </li>
        <li class="<?php echo $_GET['p'] == 'product-list' ? 'active' : '' ?>">
            <a href="./index.php?p=product-form">Gerenciar Produtos</a>
        </li>
    <?php } ?>
</ul>