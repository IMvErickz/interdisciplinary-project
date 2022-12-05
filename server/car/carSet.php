<?php

include_once '../BDconection.php';

$con = conection();
//conexão com a tabela de pessoas
$codProd = filter_input(INPUT_POST, "cod");
echo $codProd;

$sql = "INSERT INTO `carrinho`(`cod_prod`) "
. "VALUES ('$codProd')";

$con->exec($sql);

header("location:../../../../../psychoMango/pages/car.php");