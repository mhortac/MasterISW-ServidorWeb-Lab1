<?php include_once "header.php"; ?>
<form class="border p-3 my-5 form outline-shadow w-50 m-auto" action="../controllers/create.php" autocomplete="off" name="formulario" method="POST">

    <h1><small>Datos del Servicio</small></h1>
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label for="validarNombre">Cliente:<span class="red">*</span></label>
                <input type="text" class="form-control" id="cliente" name="cliente" tabindex="1" required>
            </div>
            <div class="form-group">
                <label for="validarNombre">Nom Servicio:<span class="red">*</span></label>
                <input type="text" class="form-control" id="nombre" name="nombre" tabindex="3" required>
            </div>
            <div class="form-group">
                <label for="validarNombre">Fecha Inicio:<span class="red">*</span></label>
                <input type="date" class="form-control" id="fecha_inicio" name="fecha_inicio" tabindex="5" required>
            </div>
            <div class="form-group">
                <label for="validarNombre">Ppto horas:<span class="red">*</span></label>

                <div class="input-group">
                    <div class="input-group-prepend"><span class="input-group-text">T</span></div>
                    <input type="number" class="form-control" id="ppto_horas" name="ppto_horas" tabindex="7" required>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label for="validarNombre">Id Clave:<span class="red">*</span></label>
                <input type="text" class="form-control" id="clave_id" name="clave_id" tabindex="2">
            </div>
            <div class="form-group">
                <label for="validarNombre">Descripción:<span class="red">*</span></label>
                <textarea class="form-control" id="descripcion" name="descripcion" rows="1" cols="50" tabindex="4" required></textarea>
            </div>
            <div class="form-group">
                <label for="validarNombre">Fecha Fin (planeada):<span class="red">*</span></label>
                <input type="date" class="form-control" id="fecha_fin" name="fecha_fin" tabindex="6" required>
            </div>
            <div class="form-group">
                <label for="validarNombre">Fecha Fin (real):<span class="red">*</span></label>
                <input type="date" class="form-control" id="fecha_fin_real" name="fecha_fin_real" tabindex="8" required>
            </div>
        </div>
    </div>

    <h1><small>Datos de contacto</small></h1>
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label for="validarNombre">Nombre:<span class="red">*</span></label>
                <input type="text" class="form-control" id="nom_contacto" name="nom_contacto" tabindex="9" required>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label for="validarNombre">Equipo de trabajo:<span class="red">*</span></label>
                <select class="custom-select" id="equipo" name="equipo">
                    <option value="Alicante">Alicante</option>
                    <option value="Barcelona">Barcelona</option>
                    <option value="Madrid">Madrid</option>
                    <option value="Sevilla">Sevilla</option>
                </select>
            </div>
        </div>
    </div>

    <div class="error" id="error"></div>

    <br>
    <button class="btn btn-success" type="submit"> Enviar </button>
    <a class="btn btn-outline-danger" href="../index.php"> Cancelar</a>
</form>

<?php include_once "footer.php"; ?>