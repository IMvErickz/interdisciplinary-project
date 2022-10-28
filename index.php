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
    <header>
        <div class="flex justify-between items-center bg-NavColor">
            <img src="./assets/incons/Logo.png" alt="" class="ml-8">

            <nav class=" w-divNav h-16 flex items-center justify-between">
                <div class="flex items-center w-96">
                    <input type="search" class="bg-SearchColor w-96 h-10 rounded-2xl text-white">
                </div>

                <div class="flex justify-between items-center">
                    <img src="./assets/incons/heartpng.png" alt="">
                    <img src="./assets/incons/bi_cart.png" alt="" class="ml-12">

                    <div class="justify-between items-center w-80">
                        <span><button class="text-buttonColor font-sans font-bold ml-10 h-16 w-24 hover:bg-amareloMango">Entrar</button></span>
                        <span><button class="text-buttonColor font-sans font-bold ml-3 w-24 h-16 hover:bg-amareloMango">Registrar-se</button></span>
                    </div>
                </div>
            </nav>
        </div>

    </header>

    <div>

    </div>

    <div class="w-screen flex flex-col justify-center items-center">
        <img src="./assets/incons/Frete.png" alt="" class="h-16">
    </div>

    <div class="w-screen flex flex-col justify-center items-center">
        <div class="flex flex-row w-11/12 mt-14">
            <div class="bg-cardColor w-64 h-cardH flex flex-col justify-center items-center rounded-md">
                <img src="./assets/incons/Chainsaw.png" alt="">
                <span class="text-buttonColor font-bold font-sans text-xl">Chainsaw Man Vol. 1</span>
                <div class="ml-40">
                    <button><img src="./assets/incons/heartpng.png" alt="" class="mt-14"></button>
                </div>
                <div class="flex flex-row justify-between items-center w-52 mt-3">
                    <span class="text-buttonColor font-extrabold font-sans text-xl">R$ 34,90</span>
                    <button class="hover:bg-white"><img src="./assets/incons/carSet.png" alt=""></button>
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
                },
                spacing: {
                    'divNav': '58rem',
                    'searchBar': '30rem',
                    'cardH': '32rem'
                },
                fontFamily: {
                    'inter': 'Inter',
                },
            }
        }
    }
</script>

</html>