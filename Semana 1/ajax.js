function pruebaAjax(){

    const xhttp = new XMLHttpRequest();
    xhttp.onload = function () {
        console.log(this.responseText);
        alert(this.responseText);
    }

    xhttp.open("GET", "txt/prueba.txt");
    xhttp.send();
    
}

function cargar(texto){
    
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function () {
        console.log(this.responseText);
        document.getElementById("img").innerHTML = this.responseText;
    }
    xhttp.open("GET", "txt/"+texto+".txt");
    xhttp.send();

}