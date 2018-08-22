<?php include("header.php") ?>
    <?php
        $nome = $_GET["nome"];
        $preco = $_GET["preco"];
        ?>
    <p class="alert-success"    >Produto <?php echo $nome; ?> adicionado com sucesso, preço = <?php echo $preco?></p>
<?php include("footer.php") ?>