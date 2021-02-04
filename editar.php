<?php


include_once "DaoProduto.php";

$objP = new DaoProduto();

$objP->setId(intval($_POST['cod']));
$objP->setDesc($_POST['desc']);
$objP->setQtd($_POST['qtn']);
$objP->setValor($_POST['valor']);


$resposta = $objP->Update();

echo json_encode($resposta);

?>