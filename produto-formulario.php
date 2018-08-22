<?php include("header.php") ?>
    <h1>Formulário de produto</h1>
    <form action="adiciona-produto.php">
        Nome: <input type="text" name="nome">
        Preço: <input type="number" name="preco">
        <input type="submit" value="Cadastrar">
    </form>
<?php include("footer.php") ?>