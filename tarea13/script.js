    function aniadir() {
        var li = document.createElement('li');
        inplista = document.getElementById('inplist').value;
        var node = document.createTextNode(inplista);
        var lista = document.getElementById('lista');
        lista.appendChild(li);
        li.appendChild(node)
    }
