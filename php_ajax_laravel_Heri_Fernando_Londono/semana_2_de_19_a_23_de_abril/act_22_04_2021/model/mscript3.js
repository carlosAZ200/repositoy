function obtenerAjax(){
    if (window.XMLHttpRequest) {
        xhttp = new XMLHttpRequest();
    }else{
        xhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    return xhttp;
}

var ajax = obtenerAjax();

function peticionServidorC(){
    ajax.open("GET","controller/script3.php?" + obtenerQueryStringC());
    ajax.onreadystatechange = respuestaServidorC;
    ajax.send(null);
}

function respuestaServidorC() {
    
    if (ajax.readyState == 4 && ajax.status == 200) {
        document.getElementById("resultadoC").innerHTML = ajax.responseText;
    }
}

function obtenerQueryStringC(){
    var nombreCandidato = encodeURIComponent(document.getElementById("NombreCandidato").value); 
    var cantidadPreguntasTest = encodeURIComponent(document.getElementById("CantidadPreguntasTest").value); 
    var cantidadRespondidasCorrectas = encodeURIComponent(document.getElementById("CantidadRespondidasCorrectas").value); 
    var query = "NombreCandidato=" + nombreCandidato + "&CantidadPreguntasTest=" + cantidadPreguntasTest + "&CantidadRespondidasCorrectas=" + cantidadRespondidasCorrectas + "&nocache=" + Math.random();
    return query;
}