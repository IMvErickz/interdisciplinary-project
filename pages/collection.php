<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/incons/Logo.png" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Produtos</title>
</head>

<body class="bg-background">
    <header>
        <div class="flex justify-between items-center bg-NavColor">
            <img src="../assets/incons/Logo.png" alt="" class="ml-8">

            <nav class=" w-divNav h-16 flex items-center justify-between">
                <div class="flex items-center justify-between w-96">
                    <input id="search" type="search" placeholder="Pesquisa" 
                    class="bg-SearchColor w-96 h-10 rounded-2xl text-white font-bold text-base">
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
    <div class="flex flex-row">



        <div class="w-60 h-[1200px] border-solid border-r-2 border-cardColor">
            <h2 class="text-white text-2xl font-bold">Categorias:</h2> <br>
            <div class="flex flex-col justify-start gap-1">
                <a href="" class="text-white">Chainsaw Man</a>
                <a href="" class="text-white">Naruto</a>
                <a href="" class="text-white">Food Wars</a>
                <a href="" class="text-white">Jujutsu Kaisen</a>
                <a href="" class="text-white">Fire Force</a>
                <a href="" class="text-white">Demon Slayer</a>
                <a href="" class="text-white">Spy x Family</a>
            </div> <br>
            <div class="">
                <h2 class="text-white text-2xl font-bold">Preço:</h2> <br>
                <span class="text-white">R$20</span>
                <input id="range" type="range" min="20" max="80">
                <span class="text-white">R$80</span> <br>
                <div class="flex flex-col justify-center items-center gap-2">
                    <span class="text-white text-2xl" id="rangeValue">R$</span>
                    <button 
                    class="bg-amareloMango font-bold p-2 rounded-lg w-44 hover:bg-amber-200">Confirmar filtro</button>
                </div>
            </div>
        </div>

        <div class="flex flex-col">
            <div class="flex flex-col justify-center items-center">
                <div class="flex flex-col justify-center items-center w-11/12">
                    <div class="flex flex-row w-full mt-14 gap-4">
                        <div class="bg-cardColor w-64 h-cardH flex flex-col justify-center items-center rounded-md">
                            <button>
                                <img src="../assets/incons/Chainsaw.png" alt=""> <br>
                            </button>
                            <hr class="border border-white w-60"> <br>
                            <span class="text-buttonColor font-bold font-sans text-xl">Chainsaw Man Vol. 1</span>
                            <div class="ml-40">
                                <button><img src="../assets/incons/heartpng.png" alt="" class="mt-14"></button>
                            </div>
                            <div class="flex flex-row justify-between items-center w-52 mt-3">
                                <span class="text-buttonColor font-extrabold font-sans text-xl">R$33,90</span>
                                <button class=""><img src="../assets/incons/carSet.png" alt=""></button>
                            </div>
                        </div>



                        <div class="bg-cardColor w-64 h-cardH flex flex-col justify-center items-center rounded-md">
                            <button>
                                <img src="../assets/incons/FireForce.png" alt=""> <br>
                            </button>
                            <hr class="border border-white w-60"> <br>
                            <span class="text-buttonColor font-bold font-sans text-xl">Fire Force Vol.27</span>
                            <div class="ml-40">
                                <button><img src="../assets/incons/heartpng.png" alt="" class="mt-14"></button>
                            </div>
                            <div class="flex flex-row justify-between items-center w-52 mt-3">
                                <span class="text-buttonColor font-extrabold font-sans text-xl">R$34,90</span>
                                <button class=""><img src="../assets/incons/carSet.png" alt=""></button>
                            </div>
                        </div>

                        <div class="bg-cardColor w-64 h-cardH flex flex-col justify-center items-center rounded-md">
                            <button>
                                <img src="../assets/incons/kimetsu.png" alt=""> <br>
                            </button>
                            <hr class="border border-white w-60"> <br>
                            <span class="text-buttonColor font-bold font-sans text-xl">Demon Slayer - <br>
                                Kimetsu no Yaiba <br>
                                Vol. 8
                            </span>
                            <div class="ml-40">
                                <button><img src="../assets/incons/heartpng.png" alt="" class="mt-2"></button>
                            </div>
                            <div class="flex flex-row justify-between items-center w-52 mt-3">
                                <span class="text-buttonColor font-extrabold font-sans text-xl">R$30,90</span>
                                <button class=""><img src="../assets/incons/carSet.png" alt=""></button>
                            </div>
                        </div>

                        <div class="bg-cardColor w-64 h-cardH flex flex-col justify-center items-center rounded-md">
                            <button>
                                <img src="../assets/incons/Jujutsu.png" alt=""> <br>
                            </button>
                            <hr class="border border-white w-60"> <br>
                            <span class="text-buttonColor font-bold font-sans text-xl">Jujutsu Kaisen Vol. 1</span>
                            <div class="ml-40">
                                <button><img src="../assets/incons/heartpng.png" alt="" class="mt-14"></button>
                            </div>
                            <div class="flex flex-row justify-between items-center w-52 mt-3">
                                <span class="text-buttonColor font-extrabold font-sans text-xl">R$35,90</span>
                                <button class=""><img src="../assets/incons/carSet.png" alt=""></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <br>

            <div class="flex flex-row justify-start gap-4 ml-11">
                <div class="bg-cardColor w-60 h-cardH flex flex-col justify-center items-center rounded-md">
                    <button>
                        <img src="../assets/incons/naruto.png" alt=""> <br>
                    </button>
                    <hr class="border border-white w-60"> <br>
                    <span class="text-buttonColor font-bold font-sans text-xl">Naruto Gold Vol. 64</span>
                    <div class="ml-40">
                        <button><img src="../assets/incons/heartpng.png" alt="" class="mt-14"></button>
                    </div>
                    <div class="flex flex-row justify-between items-center w-52 mt-3">
                        <span class="text-buttonColor font-extrabold font-sans text-xl">R$27,90</span>
                        <button class=""><img src="../assets/incons/carSet.png" alt=""></button>
                    </div>
                </div>


                <div class="bg-cardColor w-60 h-cardH flex flex-col justify-center items-center rounded-md">
                    <button>
                        <img src="../assets/incons/spy.png" alt=""> <br>
                    </button>
                    <hr class="border border-white w-60"> <br>
                    <span class="text-buttonColor font-bold font-sans text-xl">Spy x Family Vol. 6</span>
                    <div class="ml-40">
                        <button><img src="../assets/incons/heartpng.png" alt="" class="mt-14"></button>
                    </div>
                    <div class="flex flex-row justify-between items-center w-52 mt-3">
                        <span class="text-buttonColor font-extrabold font-sans text-xl">R$34,90</span>
                        <button class=""><img src="../assets/incons/carSet.png" alt=""></button>
                    </div>
                </div>

                <div class="bg-cardColor w-60 h-cardH flex flex-col justify-center items-center rounded-md">
                    <button>
                        <img src="../assets/incons/one.png" alt=""> <br>
                    </button>
                    <hr class="border border-white w-60"> <br>
                    <span class="text-buttonColor font-bold font-sans text-xl">One Piece Vol. 101</span>
                    <div class="ml-40">
                        <button><img src="../assets/incons/heartpng.png" alt="" class="mt-14"></button>
                    </div>
                    <div class="flex flex-row justify-between items-center w-52 mt-3">
                        <span class="text-buttonColor font-extrabold font-sans text-xl">R$32,90</span>
                        <button class=""><img src="../assets/incons/carSet.png" alt=""></button>
                    </div>
                </div>

                <div class="bg-cardColor w-60 h-cardH flex flex-col justify-center items-center rounded-md">
                    <button>
                        <img src="../assets/incons/food.png" alt=""> <br>
                    </button>
                    <hr class="border border-white w-60"> <br>
                    <span class="text-buttonColor font-bold font-sans text-xl">Food Wars Vol. 36</span>
                    <div class="ml-40">
                        <button><img src="../assets/incons/heartpng.png" alt="" class="mt-14"></button>
                    </div>
                    <div class="flex flex-row justify-between items-center w-52 mt-3">
                        <span class="text-buttonColor font-extrabold font-sans text-xl">R$33,90</span>
                        <button class=""><img src="../assets/incons/carSet.png" alt=""></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="../src/coll.js"></script>
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

    #range::-webkit-slider-runnable-track {
        background-color: #7C7C8A;
        border-radius: 15px;

    }

    #range::-webkit-slider-thumb {
        -webkit-appearance: none;
        appearance: none;
        width: 25px;
        height: 25px;
        border-radius: 50%;

        background: #2796ee;
        cursor: pointer;
    }

    .estilo::-moz-range-thumb {
        width: 25px;
        height: 25px;
        border-radius: 50%;

        background: #FFD222;
        cursor: pointer;
    }
</style>

</html>