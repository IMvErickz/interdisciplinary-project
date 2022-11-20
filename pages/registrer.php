<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="../assets/incons/Logo.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/dist/main.css" rel="stylesheet">
    <link href="/index.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Cadastro</title>
</head>

<body class="bg-background">
    <?php
    include_once "../server/BDconection.php";
    include_once "../server/functionSel.php";

    $mybanc = conection();

    $sqlCountry = "select * from pais";
    $country = $mybanc->query($sqlCountry);
    $lista = $country->fetchAll();

    $sqlSex = "select * from sexo";
    $sex = $mybanc->query($sqlSex);
    $sexList = $sex->fetchAll();


    ?>

    <header class="flex flex-row justify-center items-center gap-x-4">
        <img src="../assets/incons/open-book 1.png" alt="" class="w-28 h-28">
        <div class="flex flex-col justify-center items-center">
            <h1 class="text-buttonColor text-3xl">PsychoMango</h1>
            <span class="flex flex-col justify-center text-center text-label">Registre-se para aproveitar <br>
                todos nossos serviços
            </span>
        </div>
    </header> <br>

    <form id="form" action="../server/register/setUser.php" method="post">
        <div class="flex flex-col justify-center items-center">
            <div class="flex flex-col justify-start w-80">
                <label for="cpf" class="text-labelInput text-base font-semibold">CPF</label>
                <input name="cpf" type="text" required id="cpf" placeholder="123.456.789-10" class="bg-cardColor rounded-[15px] text-white py-3 px-4 w-full"> <br>

                <label for="cpf" class="text-labelInput text-base font-semibold">Email</label>
                <input name="email" type="email" required id="email" placeholder="email@example.com" class="bg-cardColor rounded-[15px] text-white py-3 px-4"> <br>
                <label for="cpf" class="text-labelInput text-base font-semibold">Sua senha</label>
                <input name="pass" type="password" required id="password" placeholder="********" class="bg-cardColor rounded-[15px] text-white py-3 px-4"> <br>

                <label for="cpf" class="text-labelInput text-base font-semibold">Confirme sua senha</label>
                <input type="password" id="password2" required placeholder="********" class="bg-cardColor rounded-[15px] text-white py-3 px-4"> <br>
            </div>

            <div class="flex flex-col justify-start w-80">
                <div class="flex flex-row justify-start w-80 gap-32">
                    <label for="cpf" class="text-labelInput text-base font-semibold">Nome</label>
                    <label for="cpf" class="text-labelInput text-base font-semibold">Sobrenome</label>
                </div>

                <div class="flex flex-row justify-start w-80 gap-x-2">
                    <input name="name" type="text" required id="name" placeholder="Nome" class="bg-cardColor rounded-[15px] text-white py-3 px-4 w-[150px]"> <br>
                    <input name="lastName" type="text" required id="lastName" placeholder="Sobrenome" class="bg-cardColor rounded-[15px] text-white py-3 px-4 w-[150px]">
                </div>

                <div class="flex flex-col justify-start">
                    <label for="" class="text-labelInput text-base font-semibold">Pais</label>
                    <div class="flex flex-row gap-x-2">
                        <select name="" id="country" class="bg-cardColor rounded-[15px] py-3 px-4 w-[184px] text-white">
                            <option value="" class="text-white">Selecione</option>
                            <option value="" class="text-white">
                                <?php
                                select($lista, "id_pais", "nm_pais", "", "")
                                ?>
                            </option>
                        </select> <br>
                        <span class="text-white">Opcional</span>
                    </div>
                </div>
            </div>


            <div class="flex flex-row justify-start w-80 gap-7">
                <label for="cpf" class="text-labelInput text-base font-semibold">Data de nascimento</label>
                <label for="cpf" class="text-labelInput text-base font-semibold">Sexo</label>
            </div>

            <div class="flex flex-row justify-start w-80 gap-x-4">
                <input name="dataNasc" type="text" required id="dateNasc" placeholder="10/09/2000" class="bg-cardColor rounded-[15px] text-white py-3 px-4 w-[150px]">
                <select name="" id="sexo" class="bg-cardColor rounded-[15px] py-3 px-4 w-[150px] text-white">
                    <option value="">Selecione</option>
                    <option value="">
                        <?php
                        select($sexList, "sexo_id", "desc_sexo", "", "")
                        ?>
                    </option>
                </select>
            </div> <br>

            <div class="flex flex-col justify-start">
                <div class="flex flex-row gap-1">
                    <input type="checkbox" id="pol" required class="w-6 h-6 p-[2px]">
                    <span class="text-checkLabel">Eu li e estou ciente sobre as</span>
                    <a href="" class="underline text-label">políticas de privacidade.</a>
                </div> <br>
                <div class="flex flex-row gap-1">
                    <input type="checkbox" id="pol" required class="w-6 h-6 p-[2px]">
                    <span class="text-checkLabel">Eu li e aceito os</span>
                    <a href="" class="underline text-label">termos e condições.</a>
                </div> <br>
            </div>
            <div class="flex flex-col justify-center items-center gap-7">
                <button type="submit" id="but" class="bg-amareloMango w-96 rounded-[15px] py-2 px-1
             hover:bg-yellow-200">Cadastrar</button>
                <a href="" class="text-label text-base underline">Já tem uma conta?</a>
            </div>
        </div>
    </form>

</body>
<script src="../src/registre.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<style>
    #pol {
        all: initial;
        border: 1px solid white;
        width: 24px;
        height: 24px;

    }

    #pol:checked {
        background-image: url('../assets/incons/check.png');
        background-repeat: no-repeat;
        width: 20px;
        height: 18px;
    }

    #cpf {
        background-image: url('../assets/incons/cpf.png');
        background-repeat: no-repeat;
        background-position: 18px;
        background-size: 20px;
        padding-left: 3rem;

    }

    #email {
        background-image: url('../assets/incons/mail.png');
        background-repeat: no-repeat;
        background-position: 18px;
        background-size: 20px;
        padding-left: 3rem;

    }

    #password {
        background-image: url('../assets/incons/Key.png');
        background-repeat: no-repeat;
        background-position: 18px;
        background-size: 20px;
        padding-left: 3rem;

    }

    #password2 {
        background-image: url('../assets/incons/Key.png');
        background-repeat: no-repeat;
        background-position: 18px;
        background-size: 20px;
        padding-left: 3rem;

    }

    #country {
        background-image: url('../assets/incons/glob.png');
        background-repeat: no-repeat;
        background-position: 18px;
        background-size: 20px;
        padding-left: 3rem;

    }

    #dateNasc {
        background-image: url('../assets/incons/calendar.png');
        background-repeat: no-repeat;
        background-position: 18px;
        background-size: 20px;
        padding-left: 3rem;

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