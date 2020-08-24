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


let turno = true;
let array = [0, 0, 0,
    0, 0, 0,
    0, 0, 0]

function tresenraya(i) {
    let jugador = ''
    
    if (array[i] != 0) {
        alert("Posicion Ocupada")
    } else {
        if (turno) {
            jugador = 'X'
            turno = false;
            document.getElementById('btn' + i + '').innerHTML = "X"
            document.getElementById('resultado').innerHTML = " Turno X"
        } else {
            jugador = 'O'
            turno = true;
            document.getElementById('btn' + i + '').innerHTML = "O"
            document.getElementById('resultado').innerHTML = "Turno O"
        }

        array[i] = jugador
    }


    console.log(array)

}


function operaciones(){
    resultado = document.getElementById('resultado');
    var num1 = parseInt(document.getElementById('num1').value);
    var num2 = parseInt(document.getElementById('num2').value);
    console.log(num1,num2)
    html = '';
    var elementos = document.getElementsByName("operacion");
    if (elementos[0].checked) {
        for (let i = 1; i <= num2; i++) {
            resul = i + num1;
            html = i+' + '+ num1+' = '+ resul+'<br>'+html;    
            console.log(resul)
            resul=0;
        }
    }
    if (elementos[1].checked) {
        for (let i = 1; i <= num2; i++) {
            resul = i * num1;
            html = i+' * '+ num1+' = '+ resul+'<br>'+html;    
            resul=1;
        }
    }
    if (elementos[2].checked) {
        for (let i = 1; i <= num2; i++) {
            resul = i - num1;
            html = i+' - '+ num1+' = '+ resul+'<br>'+html;    
            resul=0;
        }
    }
    if (elementos[3].checked) {
        for (let i = 1; i <= num2; i++) {
            resul = i / num1;
            html = i+' / '+ num1+' = '+ resul+'<br>'+html;    
            resul=1;
        }
    }
    resultado.innerHTML = html;
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

function registrarNoticia(){
    var ajax = new XMLHttpRequest() 
    var imagen = document.getElementById('imagen').value;
    var titulo = document.getElementById('titulo').value;
    var texto = document.getElementById('texto').value;
    var fecha = document.getElementById('fecha').value;

    if(titulo == '' || texto ==''|| fecha ==''){
        document.getElementById('vacio').innerHTML='no puede enviar campos vacios';
    }else{
    
        var parametros = "imagen=" + encodeURI(imagen) +"&titulo=" + encodeURI(titulo)+ "&texto=" + encodeURI(texto)+"&fecha=" + encodeURI(fecha)+"&Nocache=" + Math.random();
        ajax.open("post", "registarNoticia.php", true); 
        ajax.onreadystatechange = function() { 
            if (ajax.readyState == 4) {
                document.getElementById("contenido").innerHTML = ajax.responseText;
            }
        }
        ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");  
        ajax.send(parametros);
    }
}