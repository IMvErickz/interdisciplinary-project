window.onload = function () {
    let but = document.getElementById('but')
    .addEventListener("click", main)
}

function main() {
    client()
}

function client() {
    const regisClient = {
        Nome: document.getElementById("name").value,
        Sobrenome: document.getElementById("lastName").value,
        CPF: document.getElementById('cpf').value,
        email: document.getElementById("email").value,
        Data: document.getElementById('dateNasc').value,
        Sexo: document.getElementById('sexo')
    }
    return regisClient
}

document.getElementById('cpf').addEventListener('input', function (e) {
      var x = e.target.value.replace(/\D/g, '').match(/(\d{0,3})(\d{0,3})(\d{0,3})(\d{0,2})/);
      e.target.value = x[1] + '.' + x[2] + '.' + x[3] + '-' + x[4];
});
    
document.getElementById('dateNasc').addEventListener('input', function (e) {
      var x = e.target.value.replace(/\D/g, '').match(/(\d{0,2})(\d{0,2})(\d{0,4})/);
      e.target.value = x[1] + '/' + x[2] + '/' + x[3];
    });
