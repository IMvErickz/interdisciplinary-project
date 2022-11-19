document.getElementById('cep').addEventListener('input', function (e) {
      var x = e.target.value.replace(/\D/g, '').match(/(\d{0,5})(\d{0,3})/);
    e.target.value = x[1] + '-' + x[2];
});


function eliminateProduct() {
     let area = document.getElementById('descArea')
        area.style.display = "none"
    swal(
        {
            title: "Seu carrinho está vazio",
            text: "Aproveite para fazer compras",
            icon: "info",
            button: "Maravilha",
        }
    )
        .then(() => {
        window.location.href = "../index.php"
    })
}