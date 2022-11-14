<?php

include_once "./BDconection.php";

$set = conection();

$cpf = filter_input(INPUT_GET, "cpf");
$email = filter_input(INPUT_GET, "email");
$password = filter_input(INPUT_GET, "pass");
$name = filter_input(INPUT_GET, "name");
$lastName = filter_input(INPUT_GET, "lastName");
$born = filter_input(INPUT_GET, "dataNasc");

try{
$sql = "insert into Carrinho_Person_Login (pes_id,email,password,pes_nome, data_nasc)"
. " values ('$cpf','$email',$password,'$name','$born')";

$set->exec($sql);
}catch(Exception $e){
    echo "<script type='javascript'>alert('Houve um erro, por favor tente novamente');</script>";
}



