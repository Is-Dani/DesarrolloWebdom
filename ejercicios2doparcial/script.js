function cargarRegLog(pagina) {
    ajax = new XMLHttpRequest();
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            if (ajax.status == 200) {
                document.getElementById('contenido').innerHTML = ajax.responseText;
            }
        }
    }
    ajax.open('GET', pagina, true);
    ajax.send();
}

function llamarregistrar(pagina) {
    var ajax = new XMLHttpRequest() 
    var correo = document.getElementById('correo-reg').value;
    var password = document.getElementById('password-reg').value;
    var nombre = document.getElementById('nombre').value;
    var apellido = document.getElementById('apellido').value;
    var parametros ="correo=" + encodeURI(correo) +"&password=" + encodeURI(password) + "&nombre=" + encodeURI(nombre) + "&apellido=" + encodeURI(apellido) + "&Nocache=" + Math.random();
    ajax.open("post", pagina, true);
    ajax.onreadystatechange = function() { 
        if (ajax.readyState == 4) {
            document.getElementById("contenido").innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); 
    ajax.send(parametros); 
}
function llamarautenticar(pagina) {
    var ajax = new XMLHttpRequest() 
    var correo = document.getElementById('correo-au').value;
    var password = document.getElementById('password-au').value;
    var parametros ="correo=" + encodeURI(correo) +"&password=" + encodeURI(password) + "&Nocache=" + Math.random();
    ajax.open("post", pagina, true);
    ajax.onreadystatechange = function() { 
        if (ajax.readyState == 4) {
            document.getElementById("contenido").innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); 
    ajax.send(parametros); 
}

function cargar(pagina) {
    var ajax = new XMLHttpRequest() 
    ajax.open("get", pagina, true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            document.getElementById("container").innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
    ajax.send(); 
}


function editar(id){
    var ajax = new XMLHttpRequest() 
    var parametros = "id=" + id + "&Nocache=" + Math.random();
    ajax.open("post", 'formEditarHabit.php', true);
    ajax.onreadystatechange = function() { 
        if (ajax.readyState == 4) {
             document.getElementById("container").innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); 
    ajax.send(parametros); 
}
function llamarEditar() {
    var ajax = new XMLHttpRequest() 
    const id = document.getElementById('id').value;
    const nro = document.getElementById('nro').value;
    const tipohabitacion = document.getElementById('tipohabitacion').value;
    const opcion = document.getElementsByName('bano');
    if(opcion[0].cheked){
        var bano = "1";
    }else{
        var bano = "0";
    }
    const precio = document.getElementById('precio').value;
    const espacio = document.getElementById('espacio').value;
    var parametros = "id=" + encodeURI(id)+ "&nro=" + encodeURI(nro) +"&tipohabitacion=" + encodeURI(tipohabitacion) +"&bano=" + encodeURI(bano) + "&precio=" + encodeURI(precio)+  "&espacio=" + encodeURI(espacio) + "&Nocache=" + Math.random();
    console.log(parametros);
    ajax.open("post", 'editarHabit.php', true);
    ajax.onreadystatechange = function() { 
        if (ajax.readyState == 4) {
             document.getElementById("container").innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); 
    ajax.send(parametros); 

}

function eliminar(id){
    var ajax = new XMLHttpRequest() 
    var parametros = "id=" + id + "&Nocache=" + Math.random();
    ajax.open("post", "eliminarHabit.php", true); 
    ajax.onreadystatechange = function() {
        if (ajax.readyState == 4) {
             document.getElementById("container").innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); 
    ajax.send(parametros); 
}


function llamarregistrar(pagina) {
    var ajax = new XMLHttpRequest() 
    const nro = document.getElementById('nro').value;
    const tipohabitacion = document.getElementById('tipohabitacion').value;
    const opcion = document.getElementsByName('bano');
    if(opcion[0].cheked){
        var bano = "1";
    }else{
        var bano = "0";
    }
    const precio = document.getElementById('precio').value;
    const espacio = document.getElementById('espacio').value;
    var parametros = "nro=" + encodeURI(nro) +"&tipohabitacion=" + encodeURI(tipohabitacion) +"&bano=" + encodeURI(bano) + "&precio=" + encodeURI(precio)+  "&espacio=" + encodeURI(espacio) + "&Nocache=" + Math.random();
    console.log(parametros);
    ajax.open("post", pagina, true); 
    ajax.onreadystatechange = function() { 
        if (ajax.readyState == 4) {
            document.getElementById("container").innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); 
    ajax.send(parametros); 

}
function Confirmado(id){
    var ajax = new XMLHttpRequest() 
    var parametros = "id=" + id +"&Nocache=" + Math.random();
    ajax.open("post", 'reservarHabit.php', true);
    ajax.onreadystatechange = function() { 
        if (ajax.readyState == 4) {
             document.getElementById("container").innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); 
    ajax.send(parametros); 
}
function ConfirmadoSI(id){
    var ajax = new XMLHttpRequest() 
    var parametros = "id=" + id +"&Nocache=" + Math.random();
    ajax.open("post", 'confirmarHabit.php', true);
    ajax.onreadystatechange = function() { 
        if (ajax.readyState == 4) {
             document.getElementById("container").innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); 
    ajax.send(parametros); 
}
function eliminarReserva(id){
    var ajax = new XMLHttpRequest() 
    var parametros = "id=" + id + "&Nocache=" + Math.random();
    ajax.open("post", "eliminarReserva.php", true); 
    ajax.onreadystatechange = function() {
        if (ajax.readyState == 4) {
             document.getElementById("container").innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); 
    ajax.send(parametros); 
}
function blanco(){
    document.getElementById('container').style.background = '#fff';
}
function verde(){
    document.getElementById('container').style.background = '#00800085';
}
function amarillo(){
    document.getElementById('container').style.background = 'rgb(255 235 59 / 85%)';
}
function azul(){
    document.getElementById('container').style.background = '#0000ff73';
}