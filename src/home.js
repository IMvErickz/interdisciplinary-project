const message = document.getElementById('car')
    .addEventListener('click', () => {
        let div = document.getElementById('popup')
        let img = document.getElementById('back').src = "./assets/incons/PopUp.png"
        
    })
    

window.onload = function () {
        let divList = document.getElementById('divList')
        divList.style.display = "none"
    }

const showList = document.getElementById('search')
    .addEventListener("click", () => {
        let divList = document.getElementById('divList')
        divList.style.display = "block"
        
    })

const global = document.getElementById('hiddenList')
    .addEventListener("click", () => {
    let divList = document.getElementById('divList')
        divList.style.display = "none"
})

function search_animal() {
    let inputSearch = document.getElementById('search').value
    inputSearch=inputSearch.toLowerCase();
    let list = document.getElementsByClassName('animals');
      
    for (i = 0; i < list.length; i++) { 
        if (!list[i].innerHTML.toLowerCase().includes(inputSearch)) {
            list[i].style.display="none";
        }
        else {
            list[i].style.display="list-item";                 
        }
    }
}