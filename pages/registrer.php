<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="/assets/incons/Logo.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/dist/main.css" rel="stylesheet">
    <link href="/index.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Cadastro</title>
</head>

<body>
    <div class="flex flex-col justify-center items-center w-screen h-screen bg-background">
        <header class="flex flex-row justify-center items-center gap-x-4">
            <img src="../assets/incons/open-book 1.png" alt="" class="w-16 h-16">
            <div class="flex flex-col justify-center items-center">
                <h1 class="text-buttonColor text-2xl">PsychoMango</h1>
                <span class="flex flex-col justify-center text-center text-label">Registre-se para aproveitar <br>
                    todos nossos serviços
                </span>
            </div>
        </header>

        <div class="flex flex-col justify-center items-center w-screen h-screen">
            <div class="flex flex-col justify-start w-60">
                <label for="cpf" class="text-labelInput text-base font-semibold">CPF</label>
                <input type="text" id="cpf" placeholder="123.456.789-10" class="bg-label rounded-[15px] text-white p-1">

                <label for="cpf" class="text-labelInput text-base font-semibold">Email</label>
                <input type="email" id="email" placeholder="email@example.com" class="bg-label rounded-[15px] text-white p-1">
                <label for="cpf" class="text-labelInput text-base font-semibold">Sua senha</label>
                <input type="password" id="cpf" placeholder="********" class="bg-label rounded-[15px] text-white p-1">

                <label for="cpf" class="text-labelInput text-base font-semibold">Confirme sua senha</label>
                <input type="password" id="cpf" placeholder="********" class="bg-label rounded-[15px] text-white p-1">
            </div>

            <div class="flex flex-col justify-start w-60">
                <div class="flex flex-row justify-start w-60 gap-20">
                    <label for="cpf" class="text-labelInput text-base font-semibold">Nome</label>
                    <label for="cpf" class="text-labelInput text-base font-semibold">Sobrenome</label>
                </div>

                <div class="flex flex-row justify-start w-60 gap-x-2">
                    <input type="text" id="name" placeholder="Nome" class="bg-label rounded-[15px] text-white p-1 w-[115px]">
                    <input type="text" id="lastName" placeholder="Sobrenome" class="bg-label rounded-[15px] text-white p-1 w-[115px]">
                </div>

                <div class="flex flex-col justify-start">
                    <label for="" class="text-labelInput text-base font-semibold">Pais</label>
                    <select name="" id="" class="bg-label rounded-[15px] p-1">
                        
                    </select>
                </div>
            </div>
            
            
                <div class="flex flex-row justify-center w-full gap-20">
                    <label for="cpf" class="text-labelInput text-base font-semibold">Data de nascimento</label>
                    <label for="cpf" class="text-labelInput text-base font-semibold">Sexo</label>
                </div>

                <div class="flex flex-row justify-center w-60 gap-2">
                    <input type="date" placeholder="10/09/2000" class="bg-label rounded-[15px] text-white p-1 w-[115px]">
                    <input type="text" placeholder="Masc/Fem/Outro" class="bg-label rounded-[15px] text-white p-1 w-[115px]">
                </div>
            
            <div class="flex flex-col justify-start">
                <div class="flex flex-row gap-1">
                    <input type="checkbox">
                    <span class="text-checkLabel">Eu li e estou ciente sobre as</span>
                    <span class="underline-offset-2 text-label">políticas de privacidade.</span>
                </div>
                <div class="flex flex-row gap-1">
                    <input type="checkbox">
                    <span class="text-checkLabel">Eu li e aceito os</span>
                    <span class="text-label"><a href="" class="underline-offset-2 ">termos e condições.</a></span>
                </div>
            </div>
            <button id="but" class="bg-amareloMango w-96 rounded-[15px] py-2 px-1">Cadastrar</button>
            <a href="" class="text-label text-base">Já tem uma conta?</a>
        </div>
    </div>
</body>
<script src="../src/registre.js"></script>
<style>
    #cpf {
        background-image: url('./cpfIncon.png');
        background-repeat: no-repeat;
        background-position: 10px;
        background-size: 1.3px;
        padding-left: 5rem;
    }
</style>

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

</html>