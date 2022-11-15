<?php

include_once "./BDconection.php";

$set = conection();

$cpf = filter_input(INPUT_POST, "cpf");
$email = filter_input(INPUT_POST, "email");
$password = filter_input(INPUT_POST, "pass");
$name = filter_input(INPUT_POST, "name");
$lastName = filter_input(INPUT_POST, "lastName");
$born = filter_input(INPUT_POST, "dataNasc");

$sql = "insert into person (pes_id, email, password,pes_nome, data_nasc)"
. " values ('$cpf','$email','$password','$name','$born')";

echo  "<script>alert('Cadastro realizado com sucesso!');</script>";

$set->exec($sql);

header("location:../index.php");