<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/dist/main.css" rel="stylesheet">
    <link href="/index.css" rel="stylesheet">
    <link rel="shortcut icon" href="./assets/incons/Logo.png" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>PsychoMango</title>
</head>

<body class="bg-background">

    <?php
    include_once './server/BDconection.php';

    $set = conection();

    $sql = "select * from produto;";

    $result = $set->query($sql);


    ?>
    <header>
        <div class="flex justify-between items-center bg-NavColor">
            <img src="./assets/incons/Logo.png" alt="" class="ml-8">

            <nav class=" w-divNav h-16 flex items-center justify-between">
                <div class="flex items-center justify-between w-96">
                    <input onkeyup="search_animal()" id="search" type="search" placeholder="Pesquisa" class="bg-SearchColor w-96 h-10 rounded-2xl text-white font-bold text-base">
                    <button id="hiddenList" class="bg-amareloMango rounded-md p-2 ml-2 hover:bg-[#fde047]">Fechar</button>
                </div>

                <div class="flex justify-between items-center">
                    <button><img src="./assets/incons/heartpng.png" alt=""></button>
                    <a href="./pages/car.php"><img src="./assets/incons/bi_cart.png" alt="" class="ml-12"></a>
                </div>

                <div class="flex justify-between items-center">
                    <div id="buts" class="justify-between items-center w-80">
                        <button id="login" name="login" class="text-buttonColor font-sans font-bold"><a class="ml-10 h-16 w-24" href=" ./pages/login.php">Entrar</a></button>
                        <button id="res" name="regis" class="text-buttonColor font-sans font-bold"><a class="ml-10 h-16 w-24" href=" ./pages/registrer.php">Registrar-se</a></button>
                    </div>
                    <div class="flex flex-row justify-center items-center mr-8 gap-x-2">
                        <span id="setName" class="text-white font-semibold text-3xl"></span>
                        <img id="avatar" src="" alt="" class="w-12">

                    </div>

                </div>
            </nav>
        </div>

    </header>

    <div class="flex flex-col w-full items-center">
        <div class="bg-gray_800 w-80 rounded-b-lg flex flex-col justify-center items-center" id="divList">
            <ul id='list' class="flex flex-col justify-start items-start">
                <a href="" class="flex flex-row gap-x-20 items-start">
                    <img src="" alt="" class="w-16">
                    <li class="animals text-white"></li>
                </a>
            </ul>
        </div>
    </div>
    <div class="flex flex-col items-end mr-56">
        <div id="popup" class="flex flex-row w-96 justify-end">
            <img id="back" src="" alt="">
        </div>

    </div>

    <div class="flex flex-col items-center">
        <img src="./assets/incons/slide.png" alt="" class="w-[1300px]">
    </div>

    <div class="flex flex-col justify-center items-center">
        <img src="./assets/incons/Frete.png" alt="" class="h-16">
    </div>

    <div class="flex flex-col justify-center items-center">

        <form action="./server/car/carSet.php" method="post">

            <div class="flex flex-row">
                <?php

                while ($line = $result->fetch(PDO::FETCH_ASSOC)) {
                    echo "<div class='flex flex-col justify-center items-center w-11/12'>";
                    echo "<div class='flex flex-row w-full mt-14 gap-4'>";
                    echo  "<div class='bg-cardColor w-64 h-cardH flex flex-col justify-center items-center rounded-md'>";
                    echo    "<button>";
                    echo        "<img src='$line[imagem]' alt='> <br>";
                    echo    "</button>";
                    echo    "<hr class='border border-white w-60'> <br>";
                    echo    "<span class='text-buttonColor font-bold font-sans text-xl'>$line[prod_nm]</span>";
                    echo    "<div class='flex flex-row justify-between items-center w-52 mt-3'>";
                    echo       " <span class='text-buttonColor font-extrabold font-sans text-xl'>$line[prec_prod]</span>";
                    echo       "<input type'text' name='cod' value='$line[cod_prod]' class=''>";
                    echo        "<button type='submit' class='hover:bg-white' '><img src='./assets/incons/carSet.png' '></button>";
                    echo    "</div>";
                    echo "</div>";
                }

                ?>
            </div>
            

            <?php

            //$global = include_once './server/login/login.php';
            // $set = setBut();
            //echo $set;
            include_once './server/BDconection.php';
            include_once './server/login/login.php';

            $set = conection();
            $sql = "select * from person";
            $result = $set->query($sql);
            $list = $result->fetch(PDO::FETCH_ASSOC);

            // $name = $list['pes_nome'];

            ?>

</body>

<script src="./src/home.js"></script>
<script src="./src/beforeRedirect.js"></script>
<script src="./src/home/sendCar.js"></script>






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
                    gray_800: '#7C7C8A',
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
    #divList {
        scroll-behavior: smooth;
    }

    #search {
        background-image: url('./assets/incons/searchpng.png');
        background-repeat: no-repeat;
        background-position: 10px;
        background-size: 1.3em;
        padding-left: 5rem;

    }

    #search::-webkit-input-placeholder {
        color: #7C7C84;
        font-weight: bold;
        font-family: sans-serif;
        font-size: 20px;

    }

    #search::-webkit-search-cancel-button {
        background-image: url('./assets/incons/close.png');
        position: relative;
        right: 20px;
        -webkit-appearance: none;
        height: 20px;
        width: 20px;
        border-radius: 10px;
        background: red;
    }
</style>

</html>