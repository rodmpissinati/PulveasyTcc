function abrirMenu(){
    var abrir = document.getElementById("imgAbrir")
    abrir.style.display = "none"

    var fechar = document.getElementById("imgFechar")
    fechar.style.display = "flex"

    var sidebar = document.querySelector('.sidebar')
    sidebar.style.display = "flex"

}

function fecharMenu(){

    var abrir = document.getElementById("imgAbrir")
    var fechar = document.getElementById("imgFechar")
    var sidebar = document.querySelector('.sidebar')

    abrir.style.display = "flex"
    fechar.style.display = "none"
    sidebar.style.display = "none"


}