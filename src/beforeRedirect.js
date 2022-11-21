window.onload = function() {
    
    let recName = localStorage.getItem("personName")
    let noneLogin = document.getElementById("login")
    let noneRegistre = document.getElementById("res")
     let span = document.getElementById('setName')

    
    
    
    if (recName != undefined) {
         noneLogin = document.getElementById("buts")
    noneLogin.style.display = "none"
    
      span = document.getElementById('setName')

            span.innerHTML = "Ola, " + recName
    } else {
          noneLogin = document.getElementById("buts")
    noneLogin.style.display = "block"  

        span = document.getElementById('setName')
        span.innerHTML = ""

    }
    
}