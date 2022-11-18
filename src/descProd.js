 let qntVal = document.getElementById('qnt').value

function more() {    
    let valForm = parseInt(qntVal)
    let result = valForm + 1
    qntVal = result
    let val = document.getElementById('qnt').value = result

}

function less() {    
    let valForm = parseInt(qntVal)
    let result = valForm - 1
    qntVal = result
    let val = document.getElementById('qnt').value = qntVal

}