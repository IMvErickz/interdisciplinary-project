<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/incons/Logo.png" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Informações</title>
</head>

<body class="bg-background">
    <header>
        <div class="flex justify-between items-center bg-NavColor">
            <img src="../assets/incons/Logo.png" alt="" class="ml-8">

            <nav class=" w-divNav h-16 flex items-center justify-between">
                <div class="flex items-center justify-between w-96">
                    <input id="search" type="search" placeholder="Pesquisa" class="bg-SearchColor w-96 h-10 rounded-2xl text-white font-bold text-base">
                    <button class="bg-amareloMango rounded-md p-2 ml-2 hover:bg-[#fde047]">Pesquisar</button>
                </div>

                <div class="flex justify-between items-center">
                    <button><img src="../assets/incons/heartpng.png" alt=""></button>
                    <button><img src="../assets/incons/bi_cart.png" alt="" class="ml-12"></button>

                    <div class="justify-between items-center w-80">
                        <span class="text-buttonColor font-sans font-bold">
                            <a class="ml-10 h-16 w-24" href=" ./pages/login.php">Entrar</a></span>
                        <span class="text-buttonColor font-sans font-bold">
                            <a class="ml-10 h-16 w-24" href=" ./pages/registrer.php">Registrar-se</a></span>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <div class="flex flex-col  justify-center items-center">
        <div class="flex flex-row">
            <div>
                <img src="" alt="">
            </div>
            <div class="flex flex-row gap-x-20">
                <div>
                    <img src="../assets/incons/FireForce.png" alt="" class="w-64">
                </div>
                <div class="flex flex-col gap-20">
                    <div>
                        <h1 class="text-white font-extrabold text-4xl">Nome do produto</h1>
                        <p class="text-white font-medium">descrição</p>
                    </div>
                    <hr class="border-cardColor">

                    <div class="flex flex-row gap-x-56">
                        <div class="flex flex-col gap-y-4">
                            <span class="text-white text-xl">Preço</span>
                            <span class="text-white">Em até 6x <br> de<span></span> Sem juros</span>
                            <div class="flex flex-row">
                                <button class="bg-butAdd rounded-l-md w-5 font-extrabold text-center w-10">-</button>
                                <input id="qnt" type="number" class="w-16 h-8 text-center text-white bg-inputBg" value="1">
                                <button class="bg-butAdd rounded-r-md w-5 w-5 font-extrabold w-10">+</button>
                            </div>
                        </div>
                        <div class="flex flex-col gap-y-4">
                            <button class="bg-butAdd rounded-lg w-[350px] h-10 font-semibold">Adcionar no carrinho</button>
                            <button class="bg-amareloMango rounded-lg w-[350px] h-10 font-semibold">Comprar agora</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                    butAdd: '#E4D69B',
                    inputBg: '#7C7C8A'
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
<script src="../src/descProd.js"></script>
<style>
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

    #qnt::-webkit-outer-spin-button,
    #qnt::-webkit-inner-spin-button {
        /* display: none; <- Crashes Chrome on hover */
        -webkit-appearance: none;
        margin: 0;
        /* <-- Apparently some margin are still there even though it's hidden */
    }

    #qnt[type=number] {
        -moz-appearance: textfield;
    }
</style>

</html>