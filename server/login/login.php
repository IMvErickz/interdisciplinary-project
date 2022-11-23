<?php
function setBut()
{
    error_reporting(E_ERROR | E_PARSE);
    $but  = isset($_POST["send"]);
    if ($but) {
        include_once '../server/BDconection.php';
        $myBank = conection();

        $valueEmail = filter_input(INPUT_POST, "email");
        try {

        $sql = "select * from person where email = '$valueEmail'";

        $result = $myBank->query($sql);

        $list = $result->fetch(PDO::FETCH_ASSOC);

        $inputPass = filter_input(INPUT_POST, "pass");

        
            $email = $list['email'];
            $password = $list['password'];
            $name = $list['pes_nome'];
        }catch(Exception $e){
            echo "<span class='text-red-600 font-semibold text-3xl'>";
            echo "Não dados não encontrados";
            echo "</span>";
            $e->getMessage();
        } finally{
            echo "<span class='text-red-600 font-semibold text-3xl'>";
            echo "Não dados não encontrados";
            echo "</span>";
            
        }


        if ($email != $valueEmail || $password != $inputPass) {
            echo "<span class='text-red-600 font-semibold text-3xl'>";
            echo "Email ou senha incorretos";
            echo "</span>";
        } else if ($valueEmail == "" || $inputPass == "") {
            echo "<span class='text-red-600 font-semibold text-3xl'>";
            echo "Os campos estão vazios";
            echo "</span>";
        } else {             
            echo "<script>";
            echo    "function request() {";
             echo    "localStorage.setItem('personName', '$name')";
             echo   "}";

             echo      "request()";
            echo "</script>";
            echo "<script src='../server/login/redirect.js'>";
            echo "</script>";
            
        }
    }
}

