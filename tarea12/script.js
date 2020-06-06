function Seleccion() {
    var elementos = document.getElementsByName("pregunta");
    resultado = document.getElementById('resultado');

    if (elementos[0].checked) {
        resultado.innerHTML = '<i class="fas fa-heart centrado"></i>';
    }
    if (elementos[1].checked) {
        resultado.innerHTML = '<i class="fas fa-question centrado"></i>';
    }
    if (elementos[2].checked)
    resultado.innerHTML = '<i class="fas fa-star centrado"></i>';
}
function cambiarVerde(){
    document.getElementById('resultado').style.background = '#00800085';
}
function cambiarRojo(){
    document.getElementById('resultado').style.background = '#ff000075';
}
function cambiarAzul(){
    document.getElementById('resultado').style.background = '#0000ff73';
}