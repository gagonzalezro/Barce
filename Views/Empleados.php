<?php
/**
 * Vista de Empleados
 * @author Diego Saavedra
 * @created 11/04/2017
 * @copyright DG Solutions sas
 */
session_start();
require_once "../Header.php";
if (!empty($_SESSION['autenticado']) && $_SESSION['autenticado'] == true) {
    ?>
    <script type="text/javascript" src="<?php echo RUTA_DEFAULT . 'Content/js/Custom/Empleados.js' ?>"></script>
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Modulo Empleados
            <small>Registro, Visualizacion, Edicion de Empleados</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
            <li><a href="#">Empleados</a></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Empleados</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Minimizar">
                        <i class="fa fa-minus"></i></button>
                </div>
            </div>
            <div class="box-body">
                <button type="button" class="btn btn-success" onclick="limpiar();" data-toggle="modal" data-target="#VentanaRegistro">Nuevo Empleado</button>

            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->

    </section>
    <!-- /.content -->
    <!-- /.content-wrapper -->


    <div id="VentanaRegistro" class="modal fade modal-primary" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Cancelar</span>
                    </button>
                    <h4 class="modal-title" id="H3">
                        <p>Registro Empleado</p>
                    </h4>
                </div>
                <div class="modal-body">
                    <div class="form-row">
                        <label class='control-label'>Nombres:</label>
                        <input autocomplete="off" type="text" id="txtCampeonato" name="txtNombre" data-parsley-required data-parsley-required-message="Dato Requerido." data-parsley-minlength="4" data-parsley-minlength-message="Minimo 4 Caracateres" data-parsley-group="block1" class="form-control">
                    </div>
                    <div class="form-row">
                        <label class='control-label'>Apellidos:</label>
                        <input autocomplete="off" type="text" id="txtNombreFecha" name="txtNombreFecha" data-parsley-required data-parsley-required-message="Dato Requerido." data-parsley-minlength="4" data-parsley-minlength-message="Minimo 4 Caracateres" data-parsley-group="block1" class="form-control">
                    </div>
                    <div class="form-row">
                        <label class='control-label'>Telefono:</label>
                        <input type="text" class="form-control" id="dtFecha" name="txtTelefono" data-parsley-required data-parsley-required-message="Dato Requerido." data-parsley-minlength="4" data-parsley-minlength-message="Minimo 4 Caracateres" data-parsley-group="block1">
                    </div>
                </div>
                <div class="modal-footer">
                    <div class='form-row'>
                        <a id="btnGuardar" type="submit" class="btn btn-outline" name="btnGuardar" onclick="registrarEmpleado();">Guardar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="dvResultado"></div>
    <?php
} else {
    ?><script type='text/javascript'>redireccionarInicio();</script>
    <?php
}
require_once '../Footer.php';


