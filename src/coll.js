let range = document.getElementById("range")
let span = document.getElementById('rangeValue')

range.addEventListener('input', function() {
    let val = span.textContent = this.value;
    span.innerHTML = "R$" + val
    
});