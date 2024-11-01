<?php

namespace model;
require '..\model\conexao.php';
use conexao;
Class ProdutoDAO{


    public function salvar($produto){
      
        //recupera conexão
        $conexao = new Conexao();
        //recebe a conexao com o banco
        $connection = $conexao->getConnection();
        //statment quem faz a 'consulta'
        $stmt = $connection->prepare('INSERT INTO produtos(nome, categoria, preco) VALUES(:nome, :categoria, :preco)');
        //Preencher a consulta
        $stmt->bindParam(':nome',$produto->getNome());
        $stmt->bindParam(':categoria',$produto->getCategoria());
        $stmt->bindParam(':preco',$produto->getPreco());
        //executa a consulta
        $stmt->execute();
        return 'Produto cadastrado com sucesso';
    
    }

    public function atualizar($produto){
      
        //recupera conexão
        $conexao = new Conexao();
        //recebe a conexao com o banco
        $connection = $conexao->getConnection();
        //statment quem faz a 'consulta'
        $stmt = $connection->prepare('UPDATE produtos SET (nome =:nome, categoria = :categoria, preco = :preco) WHERE codigo=:codigo');
        //Preencher a consulta
        $stmt->bindParam(':codigo',$produto->getCodigo());
        $stmt->bindParam(':nome',$produto->getNome());
        $stmt->bindParam(':categoria',$produto->getCategoria());
        $stmt->bindParam(':preco',$produto->getPreco());
        //executa a consulta
        $stmt->execute();
        return 'Produto cadastrado com sucesso';
    
    }

    public function delete($produto){
      
        //recupera conexão
        $conexao = new Conexao();
        //recebe a conexao com o banco
        $connection = $conexao->getConnection();
        //statment quem faz a 'consulta'
        $stmt = $connection->prepare('DELETE produtos SET (nome =:nome, categoria = :categoria, preco = :preco) WHERE codigo=:codigo');
        //Preencher a consulta
        $stmt->bindParam(':codigo',$produto->getCodigo());
        $stmt->bindParam(':nome',$produto->getNome());
        $stmt->bindParam(':categoria',$produto->getCategoria());
        $stmt->bindParam(':preco',$produto->getPreco());
        //executa a consulta
        $stmt->execute();
        return 'Produto cadastrado com sucesso';
    
    }
    
}

?>