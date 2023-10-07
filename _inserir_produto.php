<?php

include 'conexao.php';

//recebe o valor do atributo
$nroproduto = $_POST['nroproduto'];
$nomeproduto = $_POST['nomeproduto'];
$categoria = $_POST['categoria'];
$quantidade = $_POST['quantidade'];
$fornecedor = $_POST['fornecedor'];
/*
o insert into pode ser copiado do php myadmin na aba sql >> botão insert.
obs.: tem q retirar a primary key pois ela é autoincrement, e tem que substituir os nomes dos campos pelas respectivas variáveis, e não pode esquecer de envolver toda a declaração em aspas duplas e o texto dentro das chaves com aspas simples

INSERT INTO `estoque`(`id_estoque`, `nroProduto`, `nomeProduto`, `categoria`, `fornecedor`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]')

vai ficar como abaixo
*/
$sql = "INSERT INTO `estoque`(`nroproduto`, `nomeproduto`, `categoria`, `quantidade`,`fornecedor` ) VALUES ($nroproduto,'$nomeproduto','$categoria', $quantidade,'$fornecedor')";

$inserir = mysqli_query($conexao, $sql);

?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<div class="container" style="width:500px;">
    <center>
        <h4>Produto adicionado com sucesso!</h4>
    </center>


    <div style="padding-top: 20px;">
        <center>
            <a href="index.php" role="button" class="btn btn-sm btn-primary">Cadastrar novo item</a>
        </center>

    </div>

</div>