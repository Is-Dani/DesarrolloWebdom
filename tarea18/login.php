<div class="container mt-5">
    <div class="row">
        <div class="col-6">
            <p class="text-secondary" >ingresar correo y contraseña</p>
            <form action="">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <div class="input-group-text" id="btnGroupAddon"><i class="fas fa-at"></i></div>
                    </div>
                    <input type="text" class="form-control" aria-label="Input group example" aria-describedby="btnGroupAddon" id="correo" name="correo" placeholder="correo">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <div class="input-group-text" id="btn2"><i class="fas fa-lock"></i></div>
                    </div>
                    <input type="password" class="form-control" aria-label="Input group example" aria-describedby="btn2" id="password" name="password" readonly placeholder="contraseña">
                </div>
                <input type="button" class="btn btn-outline-primary" value="registrar" onclick="autenticar()">
            </form>
        </div>
        <div class="col-6">
            <p class="text-secondary">teclado virtual para la contraseña</p>
            <div class="btn-toolbar mb-3" role="toolbar" aria-label="Toolbar with button groups">
                <div class="btn-group mr-2" role="group" aria-label="First group">
                    <div class="row d-flex justify-content-center">
                        <button type="button" class="btn btn-secondary" onclick="concatenar(1)">1</button>
                        <button type="button" class="btn btn-secondary" onclick="concatenar(2)">2</button>
                        <button type="button" class="btn btn-secondary" onclick="concatenar(3)">3</button>
                        <div class="w-100"></div>
                        <button type="button" class="btn btn-secondary" onclick="concatenar(4)">4</button>
                        <button type="button" class="btn btn-secondary" onclick="concatenar(5)">5</button>
                        <button type="button" class="btn btn-secondary" onclick="concatenar(6)">6</button>
                        <div class="w-100"></div>
                        <button type="button" class="btn btn-secondary" onclick="concatenar(7)">7</button>
                        <button type="button" class="btn btn-secondary" onclick="concatenar(8)">8</button>
                        <button type="button" class="btn btn-secondary" onclick="concatenar(9)">9</button>
                        <div class="w-100"></div>
                        <button type="button" class="btn btn-secondary" onclick="concatenar(0)">0</button>
                        <button type="button" class="btn btn-secondary" onclick="limpiar()">limpiar</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>