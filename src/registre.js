document.getElementById('cpf').addEventListener('input', function (e) {
      var x = e.target.value.replace(/\D/g, '').match(/(\d{0,3})(\d{0,3})(\d{0,3})(\d{0,2})/);
    e.target.value = x[1] + '.' + x[2] + '.' + x[3] + '-' + x[4];
});
    
document.getElementById('dateNasc').addEventListener('input', function (e) {
      var x = e.target.value.replace(/\D/g, '').match(/(\d{0,2})(\d{0,2})(\d{0,4})/);
      e.target.value = x[1] + '/' + x[2] + '/' + x[3];
    });


const datasValue = document.getElementById('but').addEventListener('click', function (e) {
    const cpfInputValue = document.getElementById('cpf').value
    const dateInputValue = document.getElementById('dateNasc').value
    const firstPass = document.getElementById('password').value
    const secondPass = document.getElementById('password2').value

    const pers = {
        Nome: document.getElementById('name').value,
        Sobrenome: document.getElementById('lastName').value,
        Email: document.getElementById('email').value 
    }

    if (cpfInputValue.length < 14) {
        console.log('err')
        swal("CPF incorreto", "Por favor tente novamente", "info")
            .then(() => {
                const form = document.getElementById("form")
                form.addEventListener("submit", function (e) {
                    e.preventDefault()
                })
            
        })
    } else if (dateInputValue.length < 10) {
        swal("Data de nascimento incorreta", "Por favor tente novamente", "info")
            .then(() => {
                const form = document.getElementById("form")
                form.addEventListener("submit", function (e) {
                    e.preventDefault()
                })
            
        })
    } else if (firstPass.length < 8) {
        swal("A senha deve ter pelo menos 8 caracteres", "Por favor tente novamente", "info")
            .then(() => {
                const form = document.getElementById("form")
                form.addEventListener("submit", function (e) {
                    e.preventDefault()
                })
            
        })
    } else if (firstPass != secondPass) {
            swal("As senhas não conferem", "Por favor tente novamente", "info")
            .then(() => {
                const form = document.getElementById("form")
                form.addEventListener("submit", function (e) {
                    e.preventDefault()
                })
            
        })
    } else if (pers.Nome == "" || pers.Sobrenome == "" || pers.Email == "") {
        swal("Campos vazios", "Por favor tente novamente", "info")
            .then(() => {
                const form = document.getElementById("form")
                form.addEventListener("submit", function (e) {
                    e.preventDefault()
                })
            
        })
     } 
})