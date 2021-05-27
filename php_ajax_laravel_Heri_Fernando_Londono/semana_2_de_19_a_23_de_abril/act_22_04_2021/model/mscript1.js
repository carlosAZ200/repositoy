function obtenerAjax(){
    if (window.XMLHttpRequest) {
        xhttp = new XMLHttpRequest();
    }else{
        xhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    return xhttp;
}

var ajax = obtenerAjax();

function peticionServidorA(){
    ajax.open("GET","controller/script1.php?" + obtenerQueryStringA());
    ajax.onreadystatechange = respuestaServidorA;
    ajax.send(null);
}

function respuestaServidorA() {
    
    if (ajax.readyState == 4 && ajax.status == 200) {
        document.getElementById("resultadoA").innerHTML = ajax.responseText;
    }
}

function obtenerQueryStringA(){
    var salarioMensual = encodeURIComponent(document.getElementById("SalarioMensual").value); 
    var query = "SalarioMensual=" + salarioMensual + "&nocache=" + Math.random();
    return query;
}