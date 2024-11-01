<html>
    <body>
        <a href="../controller/ProdutoController.php?method=salvar"> 
            Testar Controlador 
        </a>
        <form action="../controller/ProdutoController.php" method="POST">
            <input type="hidden" name="method" value="salvar" />
            
            <label for="nome_produto">Nome do Produto:</label>
            <input type="text" name="nome_produto" id="nome_produto" />

            <label for="categoria">Categoria:</label>
            <input type="text" name="categoria" id="categoria" />

            <label for="preco">Preço:</label>
            <input type="text" name="preco" id="preco" />

            <input type="submit" value="Enviar" />
        </form>
    </body>
</html>
