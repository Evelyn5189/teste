<?php
require "conexao.php";
require "Modelo\Produto.php";
require "Repositorio\ProdutoRepositorio.php";

if ($_SERVER["REQUEST_METHOD"] =="POST"){
    $nome = $_POST["nome"];
    $tipo = $_POST["tipo"];
    $descricao = $_POST["descricao"];
    $preco = $_POST["preco"];
    $imagem = $_POST["imagem"];
// Depois, vamos criar o objeto


/* auto_increment= isso faz com que auto adicione o número do produto, o id, então, esse 10 aí só é pra nada, só pra falar que orecisa de um id */
    $produto = new Produto(10,
    $tipo,
    $nome,
    $descricao,
    $imagem,
    $preco,    
);

$produtoRepositorio = new ProdutoRepositorio ($conn);
$produtoRepositorio->cadastrar($produto);
header("Location: cadastrar-produto-sucesso.php");
}
?>
<!-- aqui, estamos nos conectando no banco de dados para enviar os dados que foram pegados no cadastrar-produto. Sempre deixar as classes com a 1ª letra maiúscula. -->
