<?php
function checkLogin($email, $password){
    include_once '../BDconection.php';

    $myBank = conection();

    $sql = "select * from person";

    $result = $myBank->query($sql);

    $list = $result->fetch(PDO::FETCH_ASSOC);
    
    $inputEmail = filter_input(INPUT_POST, "email");
    $inputPass = filter_input(INPUT_POST, "pass");
    
    $email = $list['email'];
    $password = $list['password'];

    if($email != $inputEmail || $password != $inputPass){
        echo "<script>alert('Email ou senha incorretos');</script>";
    }else{
        header("location:../index.php");
    }

    
}