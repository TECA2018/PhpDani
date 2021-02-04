<?php


include_once "DaoProduto.php";

$objP = new DaoProduto();

$objP->setDesc($_POST['desc']);
$objP->setQtd($_POST['qtn']);
$objP->setValor($_POST['valor']);


$resposta = $objP->Insert();

echo json_encode($resposta);

?>