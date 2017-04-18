<?php
/**
 * Clase Validacion de Inicio Sesion
 * @author Diego Saavedra
 * @created 11/04/2017
 * @copyright DG Solutions sas
 */
session_start();
if (!empty($_SESSION['autenticado']) && $_SESSION['autenticado'] == true) {
    include_once './Header.php';
    ?>
    <div>
    </div>
    <?php
} else {
    ?>
    <script type='text/javascript'>redireccionarInicio();</script>
    <?php
}
include_once './Footer.php';
