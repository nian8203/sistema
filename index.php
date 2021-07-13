<?php require_once "views/modules/header.php"?>

<?php

require_once "controllers/controller.php";
require_once "models/model.php";

$mvc = new MvcController();
$mvc->enlacesVistasController();

?>
<!-- <div class="container">
    <h1>bienvenidos</h1>
</div> -->

<?php require_once "views/modules/footer.php"?>