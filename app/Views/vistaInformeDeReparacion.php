<? php ?>

<?= $this->extend('templates/main.php'); ?>

<?= $this->section('title') ?>Informe de Reparación<?= $this->endSection('title') ?>

<?= $this->section('contenido') ?>


<?php
//var_dump($ordenDeReparacion);
?>
<div class="contenedorInformeDeReparacion">

    <div class="sidebarService">
        <?= $this->include('templates/sidebarService') ?>
    </div>

    <div class="informeDeReparacion">
        <div class="tituloinformeDeReparacion">
            <h1>Informe de Reparación</h1>
        </div>
        <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label ">Orden</label>
            <div class="col-sm-10">
                <label for="orden"
                       class="col-sm-2 col-form-label labelVariable"><?= $ordenDeReparacion->id ?></label>
            </div>
        </div>
        <div class="form-group row">
            <label for="aparato" class="col-sm-2 col-form-label ">Aparato</label>
            <div class="col-sm-10">
                <label for="aparato"
                       class="col-sm-2 col-form-label labelVariable"><?= $ordenDeReparacion->aparato ?></label>
            </div>
        </div>
        <div class="form-group row">
            <label for="marca" class="col-sm-2 col-form-label ">Marca</label>
            <div class="col-sm-10">
                <label for="marca"
                       class="col-sm-2 col-form-label labelVariable"><?= $ordenDeReparacion->marca ?></label>
            </div>
        </div>
        <div class="form-group row">
            <label for="modelo" class="col-sm-2 col-form-label ">Modelo</label>
            <div class="col-sm-10">
                <label for="modelo"
                       class="col-sm-2 col-form-label labelVariable"><?= $ordenDeReparacion->modelo ?></label>
            </div>
        </div>
        <div class="form-group row">
            <label for="accesorios" class="col-sm-2 col-form-label ">Accesorios</label>
            <div class="col-sm-10">
                <label for="accesorios"
                       class="col-sm-2 col-form-label labelVariable"><?= $ordenDeReparacion->accesorios ?></label>
            </div>
        </div>
        <div class="form-group row">
            <label for="titular" class="col-sm-2 col-form-label ">Titular</label>
            <div class="col-sm-10">
                <label for="titular"
                       class="col-sm-2 col-form-label labelVariable"><?=$cliente->apellido.' '.$cliente->nombre?></label>
            </div>
        </div>
        <div class="form-group row">
            <label for="sintoma" class="col-sm-2 col-form-label ">Síntoma</label>
            <div class="col-sm-10">
                <label for="sintoma"
                       class="col-sm-2 col-form-label labelVariable"><?= $ordenDeReparacion->sintoma ?></label>
            </div>
        </div>

        <hr/>

        <form  action="<?php echo base_url('/ingresoDeInformeDeReparacion') ?>" method="post" >
            <div class="form-group row">
                <label for="detalle" class="col-sm-2 col-form-label">Detalle</label>
                <div class="col-sm-10">
                    <input name="detalle" class="form-control-plaintext inputForm" id="detalle" value="">
                </div>
            </div>
            <div class="form-group row importe">
                <label for="importe" class="col-sm-2 col-form-label">Importe</label>
                <div class="col-sm-10">
                    <input name="importe" class="form-control-plaintext inputForm" id="importe" value="">
                </div>
            </div>
            <div class="d-grid gap-2 d-flex justify-content-start">
                <button type="submit" class="btn btn-primary btn-block btnRegistrar">Ingresar</button>
            </div>
        </form>
    </div>

</div>

<?= $this->endSection('contenido') ?>