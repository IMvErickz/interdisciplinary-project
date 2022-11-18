async function PromiseCEP(){
    let numCEP = document.getElementById("cep").value
    let cep = await fetch(`https://viacep.com.br/ws/${numCEP}/json/`);
    //Converte o JSON para objeto JS
    let cepConvertido = await cep.json()
    console.log(typeof(cepConvertido))
    console.log(`Número CEP: ${numCEP} \nLogradouro: ${cepConvertido.logradouro} \nBairro: ${cepConvertido.bairro} \nCidade: ${cepConvertido.localidade} \nUF: ${cepConvertido.uf}`)

    let div = document.getElementById("resCep")
// div.innerHTML = `<p>Número CEP: ${numCEP}</p> <p>Logradouro: ${cepConvertido.logradouro}</p> <p>Bairro: ${cepConvertido.bairro}</p> <p>Cidade: ${cepConvertido.localidade}</p> <p>UF: ${cepConvertido.uf}</p>`
    if(cepConvertido.logradouro != undefined && cepConvertido.bairro != undefined){
       div.innerHTML = `<p class="text-white"><strong>Número CEP:</strong> ${numCEP}</p>
        <p class="text-white"><strong>Logradouro:</strong> ${cepConvertido.logradouro}</p>
        <p class="text-white"><strong>Bairro:</strong> ${cepConvertido.bairro}</p>
        <p class="text-white"><strong>Cidade:</strong> ${cepConvertido.localidade}</p>
        <p class="text-white"><strong>UF:</strong> ${cepConvertido.uf}</p>`
    }else{
       div.innerHTML = `<p class="text-white">CEP não encontrado</p>`
    }
 
}