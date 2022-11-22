window.onload = function() {
    
    let recName = localStorage.getItem("personName")
    let noneLogin = document.getElementById("buts")
    let span = document.getElementById('setName')
    let avatar = document.getElementById("avatar")

    if (recName != undefined) {
    noneLogin.style.display = "none"
    
      span = document.getElementById('setName')

        span.innerHTML = "Ola, " + recName
        avatar.src = "./assets/incons/avatar.png"
    } else {
    noneLogin.style.display = "block"  

        span = document.getElementById('setName')
        span.innerHTML = ""
        avatar.src = ""

    }
    
}