<form method="POST" action="../produc_save.php" enctype="multipart/form-data">
    <div class="form-group">
        <label>Nome</label>
        <input type="name" class="form-control" id="name" name="name" placeholder="Nome">
    </div>
    <div class="form-group">
        <label>Descrição</label>
        <input type="text" class="form-control" id="description" name="description" placeholder="Descrição">
    </div>
    <div class="form-group">
        <label>Preço R$</label>
        <input type="number" step="any" class="form-control" id="price" name="price" placeholder="Preço">
    </div>
    <div class="form-group">
        <label>Imagem</label>
        <input type="file" id="image" name="image">

        <p class="help-block">Insira uma imagem para o produto.</p>
    </div>
    <div class="form-group">
        <label>Estoque</label>
        <input type="number" class="form-control" id="stock" name="stock" placeholder="Estoque">
    </div>
    <button type="submit" id="btn-product-submit" class="btn btn-default">Cadastrar</button>
</form>