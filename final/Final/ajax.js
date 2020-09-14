function cargar(pagina) {
    var ajax = new XMLHttpRequest() 
    ajax.open("get", pagina, true); 
    ajax.onreadystatechange = function () { 
        if (ajax.readyState == 4) {
            document.getElementById("contenido").innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8"); 
    ajax.send(); 
}
function cargar2(pagina) {
    var ajax = new XMLHttpRequest() 
    ajax.open("get", pagina, true); 
    ajax.onreadystatechange = function () { 
        if (ajax.readyState == 4) {
            document.getElementById("resultado").innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8"); 
    ajax.send(); 
}
function introduirSuma(pagina) {
    n = document.getElementById('num').value;
    var ajax = new XMLHttpRequest() 
    var parametros = "n=" + n + "&Nocache=" + Math.random();
    ajax.open("post", pagina, true); 
    ajax.onreadystatechange = function() { 
        if (ajax.readyState == 4) {
             document.getElementById("resultado").innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); 
    ajax.send(parametros); 
}

 let sum=0;
 function resul(n){
     let numero = document.getElementById('numero'+n).value;
    if(numero.length == 0 ){
        numero=0;
    }
    sum +=parseInt(numero);
    document.getElementById('suma').innerHTML=sum
 }
function insertarComentario(id){;
    var ajax = new XMLHttpRequest() 
    var parametros = "id=" + id + "&Nocache=" + Math.random();
    ajax.open("post", 'formInsertarComentario.php', true); 
    ajax.onreadystatechange = function() { 
        if (ajax.readyState == 4) {
             document.getElementById("resultado").innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); 
    ajax.send(parametros); 
}
function RegistrarComentario(){
    comentario = document.getElementById('comentario').value;
    idnoticia = document.getElementById('idnoticia').value;
    var ajax = new XMLHttpRequest() 
    var parametros = "id=" + idnoticia +"&comentario=" + comentario + "&Nocache=" + Math.random();
    ajax.open("post", 'insertarComentario.php', true); 
    ajax.onreadystatechange = function() { 
        if (ajax.readyState == 4) {
            //  document.getElementById("resultado").innerHTML = ajax.responseText;
            cargar2('listarnoticia.php');
        }
    }
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); 
    ajax.send(parametros); 
}

function autocompletar(){
    document.getElementById('correo').value = 'usuario@gmail.com';
}

function concatenar(n){
    document.getElementById('password').value=document.getElementById('password').value+n;
}
function limpiar(){
   document.getElementById('password').value = '';
}

function cargarCalendario(){
    mes = document.getElementById('mes').value;
    anio = document.getElementById('anio').value;
    var ajax = new XMLHttpRequest() 
    var parametros = "mes=" + mes +"&anio=" + anio + "&Nocache=" + Math.random();
    ajax.open("get", 'calendario.php', true); 
    ajax.onreadystatechange = function() { 
        if (ajax.readyState == 4) {
            //  document.getElementById("resultado").innerHTML = ajax.responseText;
            cargar2('listarnoticia.php');
        }
    }
    ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8"); 
    ajax.send(parametros); 
}



    
 function calendario(){
    let mes = document.getElementById('mes').value;
    let anio = document.getElementById('anio').value;
    let url = 'calendario.php?mes='+mes+'&anio='+anio;
    var ajax = new XMLHttpRequest() 
    ajax.open("get", url, true); 
    ajax.onreadystatechange = function () { 
        if (ajax.readyState == 4) {
            document.getElementById("resultado").innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8"); 
    ajax.send(); 
} 

function anios(){
    select = document.getElementById('anio');
    for (let index = 1975; index <=2020; index++) {
        option = document.createElement('option');
        option.value = index;
        option.innerHTML=index;
        select.appendChild(option);
      
    }
}
