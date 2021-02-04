<?php


include_once "DaoProduto.php";

$objP = new DaoProduto();

$objP->setId(intval($_POST['cod']));


$resposta = $objP->Delete();

echo json_encode($resposta);

?>