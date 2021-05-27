function obtenerAjax(){
    if (window.XMLHttpRequest) {
        xhttp = new XMLHttpRequest();
    }else{
        xhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    return xhttp;
}

var ajax = obtenerAjax();

function peticionServidorE(){
    var CiudadOrigen = document.getElementById("CiudadOrigen").value;
    var CiudadDestino = document.getElementById("CiudadDestino").value; 
    if (CiudadOrigen != CiudadDestino) {
        ajax.open("GET","controller/script5.php?" + obtenerQueryStringE());   
        ajax.onreadystatechange = respuestaServidorE;
        ajax.send(null);
    }else{
        document.getElementById("resultadoE").innerHTML = "La ciudad de origen y de destino son iguales";
        
    }
}

function respuestaServidorE() {
    if (ajax.readyState == 4 && ajax.status == 200) {
        document.getElementById("resultadoE").innerHTML = ajax.responseText;
    }
}

function obtenerQueryStringE(){
    var ciudadOrigen = encodeURIComponent(document.getElementById("CiudadOrigen").value); 
    var ciudadDestino = encodeURIComponent(document.getElementById("CiudadDestino").value); 
    
    var alimentacion = encodeURIComponent(document.getElementById("Alimentacion").value); 
    var internet = encodeURIComponent(document.getElementById("Internet").value); 
    var maletero = encodeURIComponent(document.getElementById("Maletero").value); 
    var nombre = encodeURIComponent(document.getElementById("Nombre").value); 
    var edad = encodeURIComponent(document.getElementById("Edad").value); 
    var checkedAlimentacion = document.getElementById("Alimentacion").checked;
    if (checkedAlimentacion) {
        alimentacion = 25000;    
    }
    var checkedInternet = document.getElementById("Internet").checked;
    if (checkedInternet) {
        internet = 5000;    
    }
    var checkedMaletero = document.getElementById("Maletero").checked;
    if (checkedMaletero) {
        maletero = 4000;    
    }
    
    if (document.getElementById("Clase1").checked) {
        var clase = encodeURIComponent(document.getElementById("Clase1").value); 
    }
    if (document.getElementById("Clase2").checked) {
        var clase = encodeURIComponent(document.getElementById("Clase2").value); 
    }
    if (document.getElementById("Clase3").checked) {
        var clase = encodeURIComponent(document.getElementById("Clase3").value); 
    }

    var query = "CiudadOrigen=" + ciudadOrigen + "&CiudadDestino=" + ciudadDestino + "&Clase=" + clase + "&Alimentacion=" + alimentacion + "&Internet=" + internet + "&Maletero=" + maletero + "&Nombre=" + nombre + "&Edad=" + edad + "&nocache=" + Math.random();
    return query;
}
