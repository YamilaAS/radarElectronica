<?php validation_list_errors(); ?>
<?= $this->extend('templates/main.php'); ?>
<?= $this->section('title') ?>Modificar Orden de Trabajo<?= $this->endSection('title') ?>

<?= $this->section('contenido') ?>

<div class="contenedorDetalleDeOrdenDeTrabajo">

    <div class="sidebarService">
        <?= $this->include('templates/sidebarService') ?>
    </div>

    <div class="detalleDeOrdenDeReparacion">
        <div class="tituloDetalleDeOrden">
            <h1>Modificar orden de trabajo</h1>
        </div>
        <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label labelNombre">Orden</label>
            <div class="col-sm-10">
                <label for="orden"
                       class="col-sm-2 col-form-label labelVariable"><?= $ordenDeReparacion->id ?></label>
            </div>
        </div>
        <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label labelNombre">Ingreso</label>
            <div class="col-sm-10">
                <label for="fechaIngreso" type="date"
                       class="col-sm-2 col-form-label labelVariable"><?= $ordenDeReparacion->fechaIngreso->format("d/m/Y") ?></label>
            </div>
        </div>
        <div class="form-group row">
            <label for="aparato" class="col-sm-2 col-form-label labelNombre">Aparato</label>
            <div class="col-sm-10">
                <input name="aparato"  class="form-control-plaintext" id="aparato" value="<?php echo set_value('aparato') ?>" placeholder="<?=$ordenDeReparacion->aparato?>" >
                <p class="error"><?php echo validation_show_error('aparato'); ?></p>
            </div>
        </div>
        <div class="form-group row">
            <label for="marca" class="col-sm-2 col-form-label labelNombre">Marca</label>
            <div class="col-sm-10">
                <input name="marca"  class="form-control-plaintext" id="marca" value="<?php echo set_value('marca') ?>" placeholder="<?=$ordenDeReparacion->marca?>" >
                <p class="error"><?php echo validation_show_error('marca'); ?></p>
            </div>
        </div>
        <div class="form-group row">
            <label for="modelo" class="col-sm-2 col-form-label labelNombre">Modelo</label>
            <div class="col-sm-10">
                <input name="modelo"  class="form-control-plaintext" id="modelo" value="<?php echo set_value('modelo') ?>" placeholder="<?=$ordenDeReparacion->modelo?>" >
                <p class="error"><?php echo validation_show_error('modelo'); ?></p>
            </div>
        </div>
        <div class="form-group row">
            <label for="accesorios" class="col-sm-2 col-form-label labelNombre">Accesorios</label>
            <div class="col-sm-10">
                <input name="accesorios"  class="form-control-plaintext" id="accesorios" value="<?php echo set_value('accesorios') ?>" placeholder="<?=$ordenDeReparacion->accesorios?>" >
                <p class="error"><?php echo validation_show_error('accesorios'); ?></p>
            </div>
        </div>
        <div class="form-group row">
            <label for="apellido" class="col-sm-2 col-form-label labelNombre">Apellido</label>
            <div class="col-sm-10">
                <input name="apellido" class="form-control-plaintext" id="apellido" value="<?php echo set_value('apellido') ?>" placeholder="<?=$cliente->apellido?>" >
                <p class="error"><?php echo validation_show_error('apellido'); ?></p>
            </div>
        </div>
        <div class="form-group row">
            <label for="nombre" class="col-sm-2 col-form-label labelNombre">Nombre</label>
            <div class="col-sm-10">
                <input name="nombre" class="form-control-plaintext" id="nombre" value="<?php echo set_value('nombre') ?>" placeholder="<?=$cliente->nombre?>" >
                <p class="error"><?php echo validation_show_error('nombre'); ?></p>
            </div>
        </div>
        <div class="form-group row">
            <label for="domicilio" class="col-sm-2 col-form-label labelNombre">Domicilio</label>
            <div class="col-sm-10">
                <input name="domicilio" class="form-control-plaintext" id="domicilio" value="<?php echo set_value('domicilio') ?>"  placeholder="<?=$cliente->domicilio?>">
                <p class="error"><?php echo validation_show_error('domicilio'); ?></p>
            </div>
        </div>
        <div class="form-group row">
            <label for="telefono" class="col-sm-2 col-form-label labelNombre">Teléfono</label>
            <div class="col-sm-10">
                <input name="telefono" class="form-control-plaintext" id="telefono" value="<?php echo set_value('telefono') ?>" placeholder="<?=$cliente->telefono?>">
                <p class="error"><?php echo validation_show_error('telefono'); ?></p>
            </div>
        </div>
        <div class="form-group row">
            <label for="sintoma" class="col-sm-2 col-form-label labelNombre">Síntoma</label>
            <div class="col-sm-10">
                <input name="sintoma" class="form-control-plaintext" id="sintoma" value="<?php echo set_value('sintoma') ?>" placeholder="<?=$ordenDeReparacion->sintoma?>">
                <p class="error"><?php echo validation_show_error('sintoma'); ?></p>
            </div>
        </div>
        <div class="form-group row">
            <label for="senia" class="col-sm-2 col-form-label labelNombre">Seña</label>
            <div class="col-sm-10">
                <input name="senia" class="form-control-plaintext" id="senia" value="<?php echo set_value('senia') ?>" placeholder="<?=$ordenDeReparacion->senia?>">
                <p class="error"><?php echo validation_show_error('senia'); ?></p>
            </div>
        </div>


        <div class="">
            <?php if ($informeDeReparacion != null) : ?>
                <hr/>
                <div class="">
                    <h3>Informe de Reparación</h3>
                </div>
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
                        <input name="detalle" class="form-control-plaintext" id="detalle" value="<?php echo set_value('detalle') ?>" placeholder="<?=$informeDeReparacion->detalle?>">
                        <p class="error"><?php echo validation_show_error('detalle'); ?></p>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="importe" class="col-sm-2 col-form-label labelNombre">Importe</label>
                    <div class="col-sm-10">
                        <input name="importe" class="form-control-plaintext" id="importe" value="<?php echo set_value('importe') ?>" placeholder="<?php echo'$'.' '.$informeDeReparacion->importe?>">
                        <p class="error"><?php echo validation_show_error('importe'); ?></p>
                    </div>
                </div>
            <?php endif; ?>
        </div>


        <div class="infomeDeSalida">
            <?php if ($salidaDeTrabajo != null) : ?>
                <hr/>
                <div class="">
                    <h3>Detalle de Salida de Trabajo</h3>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label labelNombre">Salida</label>
                    <div class="col-sm-10">
                        <label for="fechaSalida" type="date"
                               class="col-sm-2 col-form-label labelVariable"><?= $salidaDeTrabajo->fechaSalida->format("d/m/Y") ?></label>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="condicion" class="col-sm-2 col-form-label labelNombre">Condición</label>
                    <div class="col-sm-10">
                        <input name="condicion" class="form-control-plaintext" id="condicion" value="<?php echo set_value('condicion') ?>" placeholder="<?=$salidaDeTrabajo->condicion ?>">
                        <p class="error"><?php echo validation_show_error('condicion'); ?></p>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<?= $this->endSection('contenido') ?>
