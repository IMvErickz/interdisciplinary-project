<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/incons/Logo.png" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Login</title>
</head>

<body class="bg-background flex flex-col justify-center items-center">

    <header class="flex flex-col justify-center items-center">
        <img src="../assets/incons/open-book 1.png" alt="" class="w-32 h-32">
        <h1 class="text-buttonColor text-3xl">PsychoMango</h1>
        <span class="text-lg text-label">Faça o login e comece a usar!</span>
    </header> <br> <br>
    <form method="post">
        <div class="flex flex-col justify-center items-center gap-y-4 w-72">
            <div class="flex flex-col justify-start w-full">
                <label for="" class="text-labelInput text-base">Endereço de email</label>
                <input name="email" id="mail" type="text" placeholder="email@example.com" class="w-full py-3 rounded-[15px] bg-cardColor text-white">
            </div>

            <div class="flex flex-col justify-start w-full">
                <label for="" class="text-labelInput text-base">Sua senha</label>
                <input name="pass" id="pass" type="password" placeholder="********" class="w-full py-3 rounded-[15px] bg-cardColor text-white">
            </div> <br>
        </div>

        <div class="flex flex-col justify-center items-center gap-y-8 w-72">

            <div class="flex flex-row justify-start w-full gap-x-2">
                <input id="check" type="checkbox" class="w-6 h-6">
                <span for="check" class="text-checkLabel">Lembre de mim</span>
            </div>

            <div class="w-full flex flex-col justify-center items-center">
                <button class="bg-amareloMango rounded-[15px] py-3 w-full font-semibold" type="submit" name="send">Entrar na plataforma</button>
            </div>

            <div class="w-full flex flex-col justify-center items-center">
                <a href="" class="text-label underline">Esqueceu sua senha?</a>
                <a href="" class="text-label underline">Cadastre-se aqui</a>
            </div>
        </div>
    </form>
    <?php

    function setBut(){
        $but  = isset($_POST["send"]);
        if($but){
            include_once '../server/BDconection.php';
            $myBank = conection();

            $sql = "select * from person";

            $result = $myBank->query($sql);

            $list = $result->fetch(PDO::FETCH_ASSOC);

            $inputEmail = filter_input(INPUT_POST, "email");
            $inputPass = filter_input(INPUT_POST, "pass");

            $email = $list['email'];
            $password = $list['password'];


            if ($email != $inputEmail || $password != $inputPass) {
                echo "<span class='text-red-600 font-semibold text-3xl'>";
                echo "Email ou senha incorretos";
                echo "</span>";
            } else if($inputEmail == "" || $inputPass == ""){
                echo "<span class='text-red-600 font-semibold text-3xl'>";
                echo "Os campos estão vazios";
                echo "</span>";
            } else {
                header("location:../index.php");
            }
        }
    }

    setBut();

    
    ?>
</body>
<script>
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    NavColor: "#343434",
                    SearchColor: '#535353',
                    buttonColor: "#E2E8F0",
                    amareloMango: '#FFD222',
                    background: '#161616',
                    cardColor: '#35353A',
                    label: "#7C7C8A",
                    labelInput: "#E1E1E6",
                    checkLabel: "#C4C4CC"
                },
                spacing: {
                    'divNav': '58rem',
                    'searchBar': '30rem',
                    'cardH': '35rem'
                },
                fontFamily: {
                    'inter': 'Inter',
                },
            }
        }
    }
</script>

<style>
    #mail {
        background-image: url('../assets/incons/mail.png');
        background-repeat: no-repeat;
        background-position: 16px;
        background-size: 1.3em;
        padding-left: 3rem;

    }

    #pass {
        background-image: url('../assets/incons/Key.png');
        background-repeat: no-repeat;
        background-position: 16px;
        background-size: 1.3em;
        padding-left: 3rem;

    }
</style>


</html>