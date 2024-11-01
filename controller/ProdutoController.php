<?php
 namespace controller;
 require '..\model\Produto.php';
 use Produto;
 require '..\model\ProdutoDAO.php';
 use model\ProdutoDAO;

 // Identifica a requisição e o parâmetro na url
if($_SERVER['REQUEST_METHOD'] == 'GET' 
&& isset($_GET['method']) ){
$method = $_GET['method'];
var_dump($method);
// Verifica se no controlador tem a função chamada
if(method_exists('Controller\ProdutoController', $method)){
   // Cria o objeto do Controlador
   $produtoController = new ProdutoController();
   // Chama a função que foi selecionada
   $produtoController->$method($_GET);
}else{
    echo "Método não existe.";
}
}else if($_SERVER['REQUEST_METHOD'] == 'POST'
&& isset($_POST['method'])){
 // Recebe a requisição
 $method = $_POST['method'];
 if(method_exists('Controller\ProdutoController', $method)){
    // cria o objeto ProdutoController
    $produtoController = new ProdutoController();
    // chama o método solicitado
    $produtoController->$method($_POST);
 }else{
    echo "Método não existe";
 }
}
class ProdutoController{

    public function index(){

    }
    public function salvar(){
        $nome = filter_input(INPUT_POST, 'nome_produto');
        $categoria = filter_input(INPUT_POST, 'categoria');
        $preco = filter_input(INPUT_POST, 'preco');

        //Montar o objeto
        $produto = new Produto();
        $produto->setNome($nome);
        $produto->setCategoria($categoria);
        $produto->setPreco($preco);

        //instancia quem vai guardar no banco
        $produtoDAO = new ProdutoDAO();

        //grava no banco
        $produtoDAO->salvar($produto);
    

        echo 'Cadastrado com sucesso';
    }
}
?>
