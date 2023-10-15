<? php ?>

<?= $this->extend('templates/main.php'); ?>

<?= $this->section('title') ?>Informe de Salida de Trabajo<?= $this->endSection('title') ?>

<?= $this->section('contenido') ?>


<?php
//var_dump($ordenDeReparacion);
?>
<div class="contenedorSalidaDeTrabajo">

    <div class="sidebarService">
        <?= $this->include('templates/sidebarService') ?>
    </div>

    <div class="salidaDeTrabajo">
        <div class="tituloSalidaDeTrabajo">
            <h1>Salida de Trabajo</h1>
        </div>
        <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label labelNombre">ORDEN</label>
            <div class="col-sm-10">
                <label for="orden"
                       class="col-sm-2 col-form-label labelVariable"><?= $ordenDeReparacion->id ?></label>
            </div>
        </div>
        <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label labelNombre">INGRESO</label>
            <div class="col-sm-10">
                <label for="fechaIngreso" type="date"
                       class="col-sm-2 col-form-label labelVariable"><?= $ordenDeReparacion->fechaIngreso->format("d/m/Y") ?></label>
            </div>
        </div>
        <div class="form-group row">
            <label for="aparato" class="col-sm-2 col-form-label labelNombre">APARATO</label>
            <div class="col-sm-10">
                <label for="aparato"
                       class="col-sm-2 col-form-label labelVariable"><?= $ordenDeReparacion->aparato ?></label>
            </div>
        </div>
        <div class="form-group row">
            <label for="marca" class="col-sm-2 col-form-label labelNombre">MARCA</label>
            <div class="col-sm-10">
                <label for="marca"
                       class="col-sm-2 col-form-label labelVariable"><?= $ordenDeReparacion->marca ?></label>
            </div>
        </div>
        <div class="form-group row">
            <label for="modelo" class="col-sm-2 col-form-label labelNombre">MODELO</label>
            <div class="col-sm-10">
                <label for="modelo"
                       class="col-sm-2 col-form-label labelVariable"><?= $ordenDeReparacion->modelo ?></label>
            </div>
        </div>
        <div class="form-group row">
            <label for="accesorios" class="col-sm-2 col-form-label labelNombre ">ACCESORIOS</label>
            <div class="col-sm-10">
                <label for="accesorios"
                       class="col-sm-2 col-form-label labelVariable"><?= $ordenDeReparacion->accesorios ?></label>
            </div>
        </div>
        <div class="form-group row">
            <label for="titular" class="col-sm-2 col-form-label labelNombre">TITUTLAR</label>
            <div class="col-sm-10">
                <label for="titular"
                       class="col-sm-2 col-form-label labelVariable"><?=$cliente->apellido.' '.$cliente->nombre?></label>
            </div>
        </div>
        <div class="form-group row">
            <label for="sintoma" class="col-sm-2 col-form-label labelNombre">SÍNTOMA</label>
            <div class="col-sm-10">
                <label for="sintoma"
                       class="col-sm-2 col-form-label labelVariable"><?= $ordenDeReparacion->sintoma ?></label>
            </div>
        </div>
        <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label labelNombre">REPARACIÓN</label>
            <div class="col-sm-10">
                <label for="fechaReparacion" type="date"
                       class="col-sm-2 col-form-label labelVariable"><?=1-1-1 ?></label>
            </div>
        </div>
        <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label labelNombre">DETALLE</label>
            <div class="col-sm-10">
                <label for="detalle" type="date"
                       class="col-sm-2 col-form-label labelVariable"><?=1-1-1 ?></label>
            </div>
        </div>

        <hr/>

        <form  action="<?php echo base_url('/ordenDeReparacion') ?>" method="post" >
            <div class="form-group row condicion">
                <label for="condicion" class="col-sm-2 col-form-label labelNombre">CONDICIÓN</label>
                <div class="col-sm-10">
                    <textarea name="condicion" class="form-control-plaintext textareaCondicion" rows="1" id="condicion" value="" ></textarea>
                </div>
            </div>
            <input name="codigo"  type="hidden" value="<?=$ordenDeReparacion->id ?> ">
            <div class="d-grid gap-2 d-flex justify-content-start">
                <button type="submit" class="btn btn-primary btn-block btnRegistrar">Ingresar</button>
            </div>
        </form>
    </div>

</div>

<?= $this->endSection('contenido') ?>

