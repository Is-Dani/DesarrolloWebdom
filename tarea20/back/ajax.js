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

// funciones ajax para usuarios
function llamarregistrar(pagina) {
    var ajax = new XMLHttpRequest() 
    const correo = document.getElementById('correo').value;
    const password = document.getElementById('password').value;
    const nombre = document.getElementById('nombre').value;
    const apellido = document.getElementById('apellido').value;
    const rol = document.getElementById('idrol').value;
    var parametros = "correo=" + encodeURI(correo) +"&password=" + encodeURI(password) +"&nombre=" + encodeURI(nombre) + "&apellido=" + encodeURI(apellido)+  "&rol=" + encodeURI(rol) + "&Nocache=" + Math.random();
    console.log(parametros);
    ajax.open("post", pagina, true); 
    ajax.onreadystatechange = function() { 
        if (ajax.readyState == 4) {
            document.getElementById("contenido").innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); 
    ajax.send(parametros); 
}

function editarUsuario(id){
    var ajax = new XMLHttpRequest() 
    var parametros = "id=" + id + "&Nocache=" + Math.random();
    ajax.open("post", 'formeditUsuario.php', true); 
    ajax.onreadystatechange = function() { 
        if (ajax.readyState == 4) {
             document.getElementById("contenido").innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); 
    ajax.send(parametros); 
}

function llamarEditar() {
    var ajax = new XMLHttpRequest() 
    var id = document.getElementById('Eid').value;
    var correo = document.getElementById('Ecorreo').value;
    var password =  document.getElementById('Epassword').value;
    var nombre = document.getElementById('Enombre').value;
    var apellido = document.getElementById('Eapellido').value;
    var rol = document.getElementById('Eidrol').value;
    var parametros = "id=" + encodeURI(id)+ "&correo=" + encodeURI(correo) +"&password=" + encodeURI(password) +"&nombre=" + encodeURI(nombre) + "&apellido=" + encodeURI(apellido)+  "&rol=" + encodeURI(rol) + "&Nocache=" + Math.random();
    console.log(parametros);
    ajax.open("post", 'editarUsuario.php', true); 
    ajax.onreadystatechange = function() {
        if (ajax.readyState == 4) {
            //document.getElementById("contenido").innerHTML = ajax.responseText;
            cargar('listarUsuario.php')
        }
    }
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); 
    ajax.send(parametros); 
}

function editarEstado(id, estado){
    var ajax = new XMLHttpRequest()
    var parametros = "id=" + encodeURI(id) + "&estado=" + encodeURI(estado)+ "&Nocache=" + Math.random();
    ajax.open("post", "editarEstado.php", true); 
    ajax.onreadystatechange = function() { 
        if (ajax.readyState == 4) {
            cargar('listarUsuario.php')
            //  document.getElementById("contenido").innerHTML = ajax.responseText;  
        }
    }
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); 
    ajax.send(parametros); 
}
//fin de funciones ajax usuarios

//funciones ajax habitaciones
function llamarregistrarHabit(pagina) {
    var ajax = new XMLHttpRequest() 
    var nro = document.getElementById('nro').value;
    var tipohabitacion = document.getElementById('tipohabitacion').value;
    var opcion = document.getElementsByName('banoprivado');
    if(opcion[0].checked){
        bano = 1;
    }
    if(opcion[1].checked){
        bano = 0;
    }
    var espacio = document.getElementById('espacio').value;
    var precio = document.getElementById('precio').value;
    var parametros = "nro=" + encodeURI(nro) +"&tipohabitacion=" + encodeURI(tipohabitacion) +"&bano=" + encodeURI(bano) + "&espacio=" + encodeURI(espacio)+  "&precio=" + encodeURI(precio) + "&Nocache=" + Math.random();
    console.log(parametros);
    ajax.open("post", pagina, true); 
    ajax.onreadystatechange = function() { 
        if (ajax.readyState == 4) {
            cargar('listarHabit.php')
            //document.getElementById("contenido").innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); 
    ajax.send(parametros); 
}

function eliminarHabit(id){
    var ajax = new XMLHttpRequest() 
    var parametros = "id=" + id + "&Nocache=" + Math.random();
    ajax.open("post", "eliminarHabit.php", true);
    ajax.onreadystatechange = function() { 
        if (ajax.readyState == 4) {
            //document.getElementById("contenido").innerHTML = ajax.responseText;
            cargar('listarHabit.php')
        }
    }
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); 
    ajax.send(parametros);
}

function editarHabit(id){
    var ajax = new XMLHttpRequest() 
    var parametros = "id=" + id + "&Nocache=" + Math.random();
    ajax.open("post", 'formEditHabit.php', true); 
    ajax.onreadystatechange = function() { 
        if (ajax.readyState == 4) {
             document.getElementById("contenido").innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); 
    ajax.send(parametros); 
}

function llamarEditarHabit() {
    var ajax = new XMLHttpRequest() 
    var id = document.getElementById('EhId').value;
    var nro = document.getElementById('EhNro').value;
    var tipohabitacion = document.getElementById('EhTipohabit').value;
    var opcion = document.getElementsByName('EhBanoprivado');
    if(opcion[0].checked){
        bano = 1;
    }
    if(opcion[1].checked){
        bano = 0;
    }
    var espacio = document.getElementById('EhPrecio').value;
    var precio = document.getElementById('EhEspacio').value;
    var parametros ="&id=" + encodeURI(id)+ "&nro=" + encodeURI(nro) +"&tipohabitacion=" + encodeURI(tipohabitacion) +"&bano=" + encodeURI(bano) + "&espacio=" + encodeURI(espacio)+  "&precio=" + encodeURI(precio) + "&Nocache=" + Math.random();
    console.log(parametros)
    ajax.open("post", 'editarHabit.php', true); 
    ajax.onreadystatechange = function() {
        if (ajax.readyState == 4) {
            //document.getElementById("contenido").innerHTML = ajax.responseText;
            cargar('listarHabit.php')
        }
    }
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); 
    ajax.send(parametros); 
}
//fin funciones ajax habitaciones

//funciones ajax tipo habitaciones
function llamarregistrarTipoHabit(pagina) {
    var ajax = new XMLHttpRequest() 
    var descripcion = document.getElementById('descripcion').value;
    var nrocamas = document.getElementById('nrocamas').value;
    var parametros = "descripcion=" + encodeURI(descripcion) +"&nrocamas=" + encodeURI(nrocamas) + "&Nocache=" + Math.random();
    console.log(parametros);
    ajax.open("post", pagina, true); 
    ajax.onreadystatechange = function() { 
        if (ajax.readyState == 4) {
            cargar('listarHabit.php')
            //document.getElementById("contenido").innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); 
    ajax.send(parametros); 
}

function eliminarTipoHabit(id){
    var ajax = new XMLHttpRequest() 
    var parametros = "id=" + encodeURI(id) + "&Nocache=" + Math.random();
    ajax.open("post", "eliminarTipoHabit.php", true);
    ajax.onreadystatechange = function() { 
        if (ajax.readyState == 4) {
            //document.getElementById("contenido").innerHTML = ajax.responseText;
            cargar('listarHabit.php')
        }
    }
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); 
    ajax.send(parametros);
}

function editarTipoHabit(id){
    var ajax = new XMLHttpRequest() 
    var parametros = "id=" + id + "&Nocache=" + Math.random();
    ajax.open("post", 'formEditTipoHabit.php', true); 
    ajax.onreadystatechange = function() { 
        if (ajax.readyState == 4) {
             document.getElementById("contenido").innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); 
    ajax.send(parametros); 
}

function llamarEditarTipoHabit() {
    var ajax = new XMLHttpRequest() 
    var id = document.getElementById('EtipoHId').value;
    var descripcion = document.getElementById('EtipoHdescripcion').value;
    var nrocamas = document.getElementById('EtipoHnrocamas').value;
    var parametros ="&id=" + encodeURI(id) + "&descripcion=" + encodeURI(descripcion) +"&nrocamas=" + encodeURI(nrocamas) + "&Nocache=" + Math.random();
    console.log(parametros);
    ajax.open("post", 'editTipoHabit.php', true); 
    ajax.onreadystatechange = function() {
        if (ajax.readyState == 4) {
            //document.getElementById("contenido").innerHTML = ajax.responseText;
            cargar('listarHabit.php')
        }
    }
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); 
    ajax.send(parametros); 
}
//fin funciones ajax tipohabitaciones


//hotel
function cargarHotel(pagina, id) {
    var ajax = new XMLHttpRequest() 
    ajax.open("get", pagina, true); 
    $(id).addClass("active")
    ajax.onreadystatechange = function () { 
        if (ajax.readyState == 4) {
            document.getElementById("contenidoPrincipal").innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8"); 
    ajax.send(); 
}



function cargarModal(pagina) {
    var nroH = document.getElementById('numhReserva').value;
    var ingreso = document.getElementById('ingreso').value;
    var salida = document.getElementById('salida').value;
    var ajax = new XMLHttpRequest() 
    ajax.open("post", pagina, true); 
    var parametros ="&nroH=" + encodeURI(nroH) + "&ingreso=" + encodeURI(ingreso) +"&salida=" + encodeURI(salida) + "&Nocache=" + Math.random();
    console.log(parametros);
    ajax.onreadystatechange = function () { 
        if (ajax.readyState == 4) {
            document.getElementById("modalAjax").innerHTML = this.responseText
            $('#modal').modal()
        }
    }
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); 
    ajax.send(parametros); 
}

function usuarioReserva(nro) {
    var ajax = new XMLHttpRequest() 
    var ingreso = document.getElementById('ingreso').value;
    var salida = document.getElementById('salida').value;
    var parametros ="&nro=" + encodeURI(nro) + "&ingreso=" + encodeURI(ingreso) +"&salida=" + encodeURI(salida) + "&Nocache=" + Math.random();
    console.log(parametros);
    ajax.open("post", "reservarHabit.php", true); 
    ajax.onreadystatechange = function() { 
        if (ajax.readyState == 4) {
            cargarHotel('reservas.php')
            $('#modal').modal('hide')
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
            //document.getElementById("contenido").innerHTML = ajax.responseText;
            cargar('listarReservas.php')
        }
    }
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); 
    ajax.send(parametros);
}