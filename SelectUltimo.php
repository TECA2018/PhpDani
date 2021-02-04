<?php


include_once "DaoProduto.php";

$objP = new DaoProduto();


$dados = $objP->SelectDESC();

while($resultado = mysqli_fetch_assoc($dados)){
    $resposta[] = array_map('utf8_encode', $resultado); 
}


echo json_encode($resposta);

?>