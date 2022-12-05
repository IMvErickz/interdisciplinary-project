<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/incons/Logo.png" type="image/x-icon">

    <script src="https://cdn.tailwindcss.com"></script>

    <title>Finalização</title>
</head>

<body class="bg-background">
    <?php
    include_once '../server/BDconection.php';

    $bank = conection();

    $sql = "SELECT c.car_id, c.pes_id, p.prod_nm, p.prec_prod, p.imagem FROM `carrinho` c INNER JOIN produto p on c.cod_prod = p.cod_prod;";

    $query = $bank->query($sql);

    $list = $query->fetch(PDO::FETCH_ASSOC);
    ?>

    <header>
        <div class="flex justify-between items-center bg-NavColor">
            <img src="../assets/incons/Logo.png" alt="" class="ml-8">

            <nav class=" w-divNav h-16 flex items-center justify-between">
                <div class="flex items-center justify-between w-96">
                    <input id="search" type="search" placeholder="Pesquisa" class="bg-SearchColor w-96 h-10 rounded-2xl text-white font-bold text-base">
                    <button class="bg-amareloMango rounded-md p-2 ml-2 hover:bg-[#fde047]">Pesquisar</button>
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
    </header> <br>

    <?php
     while($list = $query->fetch(PDO::FETCH_ASSOC)){
      echo  "<div id='descArea' class='flex flex-row justify-center items-center gap-24'>";
        echo "<div class='flex flex-row gap-6 '>";
            echo "<div class='bg-NavColor flex flex-col justify-startr rounded'>";
                echo "<h1 class='text-white text-4xl font-bold'>Carrinho de compras</h1> <br>";
               echo "<hr class='border-input'>";

               echo "<div class='flex flex-row bg-NavColor rounded gap-36 h-80'>";
                 echo   "<div class='flex flex-row justify-center items-center'>";
                   echo     "<div class='flex flex-row'>";
                   echo         "<img src='.$list[imagem]'  class='w-44 h-60'>";
                  echo      "</div>";
                    echo    "<div class='flex flex-col gap-8 ml-2'>";
                   echo         "<h1 class='text-white text-2xl'>$list[prod_nm]</h1>";
                   echo         "<div>";
                    echo            "<span class='text-white text-sm'>Quantidade:</span>";
                    echo            "<input type='number' value='1' class='w-16 h-6 text-center'>";
                    
                   echo         "</div>";
                        "</div>";
                    
                  echo  "</div>";


                   echo "<div class='flex flex-col gap-32 items-center'>";
                   echo     "<div class='flex flex-col'>";
                   echo         "<span class='text-white text-sm'>Preço</span>";
                   echo        " <span class='text-white text-3xl'>$list[prec_prod]</span>";
                   echo         "<p class='text-white'>Em até 6x de <span>asdas</span> em juros</p>";
                   echo    " </div>";
                   echo     "<div class='flex flex-col justify-center items-center'>";
                   echo         "<button id='exclud'onclick='eliminateProduct()'><img src='../assets/incons/Eliminar.png'></button>";

                  echo     " </div>";
                  echo " </div>";

                echo"</div>";
           echo "</div>";
     }
    
    ?>

    


            <div class="flex flex-col items-center bg-NavColor h-full rounded gap-4">
                <p class="text-white text-xl">Subtotal <span>1</span> item: <span>asdsadas</span></p>
                <div>
                    <input type="checkbox">
                    <span class="text-white text-base">Este pedido contém item para presente</span>
                </div>
                <div>
                    <input type="text" id="cep" class="bg-input text-white rounded-lg h-12 w-48">
                    <button class="bg-gray_5 rounded-lg w-24 h-12 text-center text-white font-semibold" onclick="PromiseCEP()">Calcular</button>
                </div>
                <div id="resCep">
                </div>
                <span class="text-white text-base"></span>
                <span class="text-white text-base"></span>


                <button class="bg-amareloMango w-72 h-12 rounded-lg text-black font-semibold text-2xl hover:bg-amber-300">Finalizar compra</button>
            </div>
        </div>
    </div>
</body>
<script src="../src/api/cep.js"></script>
<script src="../src/api/frete.js"></script>
<script src="../src/car.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="./src/beforeRedirect.js"></script>


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
                    input: '#7C7C8A',
                    gray_5: '#45454B'
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
    #cep {
        background-image: url('../assets/incons/truck.png');
        background-repeat: no-repeat;
        padding-left: 6rem;
    }

    #search {
        background-image: url('../assets/incons/searchpng.png');
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