<?php
include_once "../connection/Conexao.php";
// include_once "../dao/MesaDAO.php";
include_once "../model/Mesa.php";


//instancia as classes
// $mesa = new Mesa();
// $mesadao = new MesaDAO();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de produto</title>
</head>
<body>
    <p>CADASTRO PRODUTO</p> 
    <form action="../controller/PedidoController.php" method="POST">
    <input type="hidden" id="id_cliente">
      <div>
        <label for="nome">Nome</label>
        <input type="text" id="nome" name="nome" required>
      </div>
      <div>
        <label for="descricao">Descrição</label>
        <input type="text" id="descricao" name="descricao" required>
      </div>
      <div>
        <label for="valor">Valor</label>
        <input type="text" id="valor" name="valor" required>
      </div>
      <button type="submit" name="cadastrar" class="btn btn-primary">Salvar</button>
    </form>
    
    <p>Lista de Produtos:</p>
    <a href="">Produto1</a>
    <a href="">Produto2</a>
    <br> <br>
    <a href="index.php">VOLTAR</a>
</body>
</html>