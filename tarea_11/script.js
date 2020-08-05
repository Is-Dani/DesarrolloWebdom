let palabras=["gato", "perro","casa"];
let palabra;
let comparar=[];
let input;
let falla=1;
const caja = document.getElementById('caja');

function iniciarJuego(){
    palabra = palabraAlazar();
    mostrarInput(palabra);
    
    

}


function palabraAlazar(){
    let numPalabras = palabras.length-1;
    return  palabras[Math.round(Math.random()*numPalabras)];
}

function mostrarInput(palabra){
    for (let i = 0; i < palabra.length; i++) {
        input = document.createElement('input');
        input.classList='tamano'
        input.id=i
        input.setAttribute('readonly','')
        caja.appendChild(input);

    }
    document.getElementById('divVerificar').style.display='block'
    document.getElementById('btnIniciar').hidden=true;
}

function verificar(){
    let letra = document.getElementById('InputVerificar').value;
    var array = buscarLetra(letra);
       
    if(falla!=9){
    if(array.length == 0){
        document.getElementById('muneco').src="imagenes/"+falla+".png"
        falla++;

    }else{
        for (let i = 0; i < array.length; i++) {
           document.getElementById(`${array[i]}`).value=letra;
           comparar.push(document.getElementById(`${array[i]}`).value);
        }
    }
    }else{
        document.getElementById('caja').innerHTML = '';
        document.getElementById('divVerificar').style.display = 'none';
        document.getElementById('caja').style.backgroundImage = 'url(imagenes/gameOver.jpg)';

    }

    if(comparar.length == palabra.length){
        document.getElementById('caja').innerHTML = '';
        document.getElementById('divVerificar').style.display = 'none';
        document.getElementById('caja').style.backgroundImage = 'url(imagenes/win.jpg)';
    }
    
}


function buscarLetra(letra){ 
    var array = [];

    for (let i = 0; i < palabra.length; i++) {
        if(letra==palabra.substr(i,1)){
            array.push(i);

        }
        
    }
    return array;
}