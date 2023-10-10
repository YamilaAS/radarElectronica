<?php validation_list_errors(); ?>

<?= $this->extend('templates/main.php'); ?>

<?= $this->section('title') ?>Ingreso de Trabajo<?= $this->endSection('title') ?>

<?= $this->section('contenido') ?>
<div class="formulario">
    <div class="titulo">
        <h1>Ingreso de Trabajo</h1>
    </div>

    <form  action="<?php echo base_url('/ingresoDeTrabajo') ?>" method="post">
        <div class="form-group row">
            <label for="aparato" class="col-sm-2 col-form-label">Aparato</label>
            <div class="col-sm-10">
                <input name="aparato"  class="form-control-plaintext" id="aparato" value="<?php echo set_value('aparato') ?>">
                <p class="error"><?php echo validation_show_error('aparato'); ?></p>
            </div>
        </div>
        <div class="form-group row">
            <label for="marca" class="col-sm-2 col-form-label">Marca</label>
            <div class="col-sm-10">
                <input name="marca" class="form-control-plaintext"  id="marca" value="<?php echo set_value('marca') ?>">
                <p class="error"><?php echo validation_show_error('marca'); ?></p>
            </div>
        </div>
        <div class="form-group row">
            <label for="modelo" class="col-sm-2 col-form-label">Modelo</label>
            <div class="col-sm-10">
                <input name="modelo" class="form-control-plaintext" id="modelo" value="<?php echo set_value('modelo') ?>">
                <p class="error"><?php echo validation_show_error('modelo'); ?></p>
            </div>
        </div>
        <div class="form-group row">
            <label for="accesorios" class="col-sm-2 col-form-label">Accesorios</label>
            <div class="col-sm-10">
                <input name="accesorios" class="form-control-plaintext" id="accesorios" value="<?php echo set_value('accesorios') ?>">
                <p class="error"><?php echo validation_show_error('accesorios'); ?></p>
            </div>
        </div>
        <div class="form-group row">
            <label for="apellido" class="col-sm-2 col-form-label">Apellido</label>
            <div class="col-sm-10">
                <input name="apellido" class="form-control-plaintext" id="apellido" value="<?php echo set_value('apellido') ?>">
                <p class="error"><?php echo validation_show_error('apellido'); ?></p>
            </div>
        </div>
        <div class="form-group row">
            <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
            <div class="col-sm-10">
                <input name="nombre" class="form-control-plaintext" id="nombre" value="<?php echo set_value('nombre') ?>">
                <p class="error"><?php echo validation_show_error('nombre'); ?></p>
            </div>
        </div>
        <div class="form-group row">
            <label for="domicilio" class="col-sm-2 col-form-label">Domicilio</label>
            <div class="col-sm-10">
                <input name="domicilio" class="form-control-plaintext" id="domicilio" value="<?php echo set_value('domicilio') ?>">
                <p class="error"><?php echo validation_show_error('domicilio'); ?></p>
            </div>
        </div>
        <div class="form-group row">
            <label for="telefono" class="col-sm-2 col-form-label">Teléfono</label>
            <div class="col-sm-10">
                <input name="telefono" class="form-control-plaintext" id="telefono" value="<?php echo set_value('telefono') ?>">
                <p class="error"><?php echo validation_show_error('telefono'); ?></p>
            </div>
        </div>
        <div class="form-group row">
            <label for="sintoma" class="col-sm-2 col-form-label">Síntoma</label>
            <div class="col-sm-10">
                <input name="sintoma" class="form-control-plaintext" id="sintoma" value="<?php echo set_value('sintoma') ?>">
                <p class="error"><?php echo validation_show_error('sintoma'); ?></p>
            </div>
        </div>
        <div class="form-group row">
            <label for="senia" class="col-sm-2 col-form-label">Seña</label>
            <div class="col-sm-10">
                <input name="senia" class="form-control-plaintext" id="senia" value="<?php echo set_value('senia') ?>">
                <p class="error"><?php echo validation_show_error('senia'); ?></p>
            </div>
        </div>

        <div class="d-grid gap-2 d-flex justify-content-start">
            <button type="submit" class="btn btn-primary btn-block btnRegistrar">Registrar</button>
        </div>
    </form>


</div>



<?= $this->endSection('contenido') ?>