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
        <div class="">
            <?php if ($informeDeReparacion != null) : ?>

                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label labelNombre">Reparación</label>
                    <div class="col-sm-10">
                        <label for="fechaReparacion" type="date"
                               class="col-sm-2 col-form-label labelVariable"><?=$informeDeReparacion->fechaReparacion->format("d/m/Y") ?></label>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="detalle" class="col-sm-2 col-form-label labelNombre">Detalle</label>
                    <div class="col-sm-10">
                        <label for="detalle"
                               class="col-sm-2 col-form-label labelVariable"> <?= $informeDeReparacion->detalle?></label>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="importe" class="col-sm-2 col-form-label labelNombre">Importe</label>
                    <div class="col-sm-10">
                        <label for="importe"
                               class="col-sm-2 col-form-label labelVariable"> $ <?= $informeDeReparacion->importe?></label>
                    </div>
                </div>
            <?php endif; ?>
        </div>

        <hr/>

        <form  action="<?php echo base_url('/salidaDeTrabajo') ?>" method="post" >
            <input name="codigo"  type="hidden" value="<?=$ordenDeReparacion->id ?> ">
            <div class="form-group row condicion">
                <label for="condicion" class="col-sm-2 col-form-label labelNombre">CONDICIÓN</label>
                <div class="form-check check">
                    <input class="form-check-input"  name="condicion" type="radio" id="cuentaCorriente" value="cuentaCorriente">
                    <label class="form-check-label" for="cuentaCorriente">Cuenta Corriente</label>
                </div>
                <div class="form-check check">
                    <input class="form-check-input" name="condicion" type="radio" id="efectivo" value="efectivo" checked>
                    <label class="form-check-label" for="efectivo">Efectivo</label>
                </div>

            </div>
            <div class="d-grid gap-2 d-flex justify-content-start">
                <button type="submit" class="btn btn-primary btn-block btnRegistrar">Salida de Trabajo</button>
            </div>
        </form>
    </div>

</div>

<?= $this->endSection('contenido') ?>

