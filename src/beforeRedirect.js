window.onload = function() {
    
    let recName = localStorage.getItem("personName")
    let noneLogin = document.getElementById("login")
    let noneRegistre = document.getElementById("res")
    let span = document.getElementById('setName')
    let avatar = document.getElementById("avatar")

    
    
    
    if (recName != undefined) {
         noneLogin = document.getElementById("buts")
    noneLogin.style.display = "none"
    
      span = document.getElementById('setName')

        span.innerHTML = "Ola, " + recName
        avatar.src = "./assets/incons/avatar.png"
    } else {
          noneLogin = document.getElementById("buts")
    noneLogin.style.display = "block"  

        span = document.getElementById('setName')
        span.innerHTML = ""
        avatar.src = ""


    }
    
}