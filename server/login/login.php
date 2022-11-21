<?php
function setBut()
{
    $but  = isset($_POST["send"]);
    if ($but) {
        include_once '../server/BDconection.php';
        $myBank = conection();

        $sql = "select * from person";

        $result = $myBank->query($sql);

        $list = $result->fetch(PDO::FETCH_ASSOC);

        $inputEmail = filter_input(INPUT_POST, "email");
        $inputPass = filter_input(INPUT_POST, "pass");

        $email = $list['email'];
        $password = $list['password'];
        $name = $list['pes_nome'];


        if ($email != $inputEmail || $password != $inputPass) {
            echo "<span class='text-red-600 font-semibold text-3xl'>";
            echo "Email ou senha incorretos";
            echo "</span>";
        } else if ($inputEmail == "" || $inputPass == "") {
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

