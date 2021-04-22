<?php
include_once "header.php";
if (!isset($_GET["id"])) {
    exit("No hay id");
}

require_once("../models/modelo.php");
require_once("../database/db.php");

$id = $_GET["id"];
$services = new Service();
$data = $services->read($id);

?>


<form class="border p-3 my-5 form outline-shadow w-50 m-auto" autocomplete="off" name="../controller.php?id=<?php echo $id ?>" method="POST">
    <h2>Actualizar servicios</h2>
    <h4><small>Datos del Servicio</small></h4>
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label for="validarNombre">Cliente:<span class="red">*</span></label>
                <input type="text" class="form-control" id="cliente" name="cliente" required value="<?php echo $data['cliente'] ?>">
            </div>
            <div class="form-group">
                <label for="validarNombre">Nom Servicio:<span class="red">*</span></label>
                <input type="text" class="form-control" id="nombre" name="nombre" required value="<?php echo $data['nombre'] ?>">
            </div>
            <div class="form-group">
                <label for="validarNombre">Fecha Inicio:<span class="red">*</span></label>
                <input type="date" class="form-control" id="fecha_inicio" name="fecha_inicio" required value="<?php echo $data['fecha_inicio'] ?>">
            </div>
            <div class="form-group">
                <label for="validarNombre">Ppto horas:<span class="red">*</span></label>

                <div class="input-group">
                    <div class="input-group-prepend"><span class="input-group-text">T</span></div>
                    <input type="number" class="form-control" id="ppto_horas" name="ppto_horas" required value="<?php echo $data['ppto_horas'] ?>">
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label for="validarNombre">Id Clave:<span class="red">*</span></label>
                <input type="text" class="form-control" id="clave_id" name="clave_id" required value="<?php echo $data['clave_id'] ?>">
            </div>
            <div class="form-group">
                <label for="validarNombre">Descripción:<span class="red">*</span></label>
                <textarea class="form-control" id="descripcion" name="descripcion" rows="1" cols="50" required value="<?php echo $data['descripcion'] ?>"></textarea>
            </div>
            <div class="form-group">
                <label for="validarNombre">Fecha Fin (planeada):<span class="red">*</span></label>
                <input type="date" class="form-control" id="fecha_fin" name="fecha_fin" required value="<?php echo $data['fecha_fin'] ?>">
            </div>
            <div class="form-group">
                <label for="validarNombre">Fecha Fin (real):<span class="red">*</span></label>
                <input type="date" class="form-control" id="fecha_fin_real" name="fecha_fin_real" required value="<?php echo $data['fecha_fin_real'] ?>">
            </div>
        </div>
    </div>

    <h4><small>Datos de contacto</small></h4>
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label for="validarNombre">Nombre:<span class="red">*</span></label>
                <input type="text" class="form-control" id="nom_contacto" name="nom_contacto" tabindex="9" required="">
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
    <a class="btn btn-outline-danger" href="../controllers/controlador.php"> Cancelar</a>
</form>

<?php include_once "footer.php"; ?>