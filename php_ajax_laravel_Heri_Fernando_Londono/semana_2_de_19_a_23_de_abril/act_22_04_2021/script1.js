
function obtenerAjax(){
    if (window.XMLHttpRequest) {
        xhttp = new XMLHttpRequest();
    }else{
        xhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    return xhttp;
}

var ajax = obtenerAjax();

function peticionServidor(){
    ajax.open("GET","script1.php?" + obtenerQueryString());
    ajax.onreadystatechange = respuestaServidor;
    ajax.send(null);
}

function respuestaServidor() {
    
    if (ajax.readyState == 4 && ajax.status == 200) {
        document.getElementById("resultado").innerHTML = ajax.responseText;
    }
}

function obtenerQueryString(){
    var salarioMensual = encodeURIComponent(document.getElementById("SalarioMensual").value); 
    var query = "SalarioMensual=" + salarioMensual + "&nocache=" + Math.random();
    return query;
}