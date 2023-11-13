<?php validation_list_errors(); ?>
<?= $this->extend('templates/main.php'); ?>
<?= $this->section('title') ?>Modificar Orden de Trabajo<?= $this->endSection('title') ?>

<?= $this->section('contenido') ?>

<?php
     function validar( $datoInput, $datoValidacion){
        if(isset($datoInput)) {
            echo $datoInput;
        }else {
            echo set_value($datoValidacion);
        }
    }
?>

<div class="contenedorDetalleDeOrdenDeTrabajo">

    <div class="sidebarService">
        <?= $this->include('templates/sidebarService') ?>
    </div>

    <div class="detalleDeOrdenDeReparacion">
        <form action="<?php echo base_url('/modificar') ?>" method="post">

            <?php
            if(session()->has('errorPrincipal')) {
                echo "<div class='alert alert-danger '>" . session()->getFlashdata('errorPrincipal') . "</div>";
            }
            ?>

            <div class="tituloDetalleDeOrden">
                <h1>Modificar orden de trabajo</h1>
            </div>
            <input name="codigo"  type="hidden" value="<?=$ordenDeReparacion->id ?> ">
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
                <label for="" class="col-sm-2 col-form-label labelNombre">Modificación</label>
                <div class="col-sm-10">
                    <label for="fechaModificacion" type="date"
                           class="col-sm-2 col-form-label labelVariable"><?= $ordenDeReparacion->fechaModificacion->format("d/m/Y") ?></label>
                </div>
            </div>
            <div class="form-group row">
                <label for="aparato" class="col-sm-2 col-form-label labelNombre">Aparato</label>
                <div class="col-sm-10">
                    <input name="aparato" class="form-control-plaintext labelVariable" id="aparato"
                           value="<?php validar($ordenDeReparacion->aparato , 'aparato'); ?>">
                    <p class="error"><?php echo validation_show_error('aparato'); ?></p>
                </div>
            </div>
            <div class="form-group row">
                <label for="marca" class="col-sm-2 col-form-label labelNombre">Marca</label>
                <div class="col-sm-10">
                    <input name="marca" class="form-control-plaintext labelVariable" id="marca"
                           value="<?php validar($ordenDeReparacion->marca , 'marca'); ?>">
                    <p class="error"><?php echo validation_show_error('marca'); ?></p>
                </div>
            </div>
            <div class="form-group row">
                <label for="modelo" class="col-sm-2 col-form-label labelNombre">Modelo</label>
                <div class="col-sm-10">
                    <input name="modelo" class="form-control-plaintext labelVariable" id="modelo"
                           value="<?php validar($ordenDeReparacion->modelo , 'modelo'); ?>"">
                    <p class="error"><?php echo validation_show_error('modelo'); ?></p>
                </div>
            </div>
            <div class="form-group row">
                <label for="accesorios" class="col-sm-2 col-form-label labelNombre">Accesorios</label>
                <div class="col-sm-10">
                    <input name="accesorios" class="form-control-plaintext labelVariable" id="accesorios"
                           value="<?php validar($ordenDeReparacion->accesorios , 'accesorios'); ?>"">
                    <p class="error"><?php echo validation_show_error('accesorios'); ?></p>
                </div>
            </div>
            <input name="idCliente"  type="hidden" value="<?=$cliente->id ?> ">
            <div class="form-group row">
                <label for="apellido" class="col-sm-2 col-form-label labelNombre">Apellido</label>
                <div class="col-sm-10">
                    <input name="apellido" class="form-control-plaintext labelVariable" id="apellido"
                           value="<?php validar($cliente->apellido, 'apellido'); ?>"">
                    <p class="error"><?php echo validation_show_error('apellido'); ?></p>
                </div>
            </div>
            <div class="form-group row">
                <label for="nombre" class="col-sm-2 col-form-label labelNombre">Nombre</label>
                <div class="col-sm-10">
                    <input name="nombre" class="form-control-plaintext labelVariable" id="nombre"
                           value="<?php validar($cliente->nombre , 'nombre'); ?>"">
                    <p class="error"><?php echo validation_show_error('nombre'); ?></p>
                </div>
            </div>
            <div class="form-group row">
                <label for="domicilio" class="col-sm-2 col-form-label labelNombre">Domicilio</label>
                <div class="col-sm-10">
                    <input name="domicilio" class="form-control-plaintext labelVariable" id="domicilio"
                           value="<?php validar($cliente->domicilio , 'domicilio'); ?>"">
                    <p class="error"><?php echo validation_show_error('domicilio'); ?></p>
                </div>
            </div>
            <div class="form-group row">
                <label for="telefono" class="col-sm-2 col-form-label labelNombre">Teléfono</label>
                <div class="col-sm-10">
                    <input name="telefono" class="form-control-plaintext labelVariable" id="telefono"
                           value="<?php validar($cliente->telefono, 'telefono'); ?>"">
                    <p class="error"><?php echo validation_show_error('telefono'); ?></p>
                </div>
            </div>
            <div class="form-group row">
                <label for="sintoma" class="col-sm-2 col-form-label labelNombre">Síntoma</label>
                <div class="col-sm-10">
                    <input name="sintoma" class="form-control-plaintext labelVariable" id="sintoma"
                           value="<?php validar($ordenDeReparacion->sintoma, 'sintoma'); ?>"">
                    <p class="error"><?php echo validation_show_error('sintoma'); ?></p>
                </div>
            </div>
            <div class="form-group row">
                <label for="senia" class="col-sm-2 col-form-label labelNombre">Seña</label>
                <div class="col-sm-10">
                    <input name="senia" class="form-control-plaintext labelVariable" id="senia"
                           value="<?php validar($ordenDeReparacion->senia, 'senia'); ?>"">
                    <p class="error"><?php echo validation_show_error('senia'); ?></p>
                </div>
            </div>


            <div class="">
                <?php if ($informeDeReparacion != null) : ?>
                    <hr/>
                    <div class="">
                        <h3>Informe de Reparación</h3>
                    </div>
                    <input name="idInformeDeReparacion"  type="hidden" value="<?=$informeDeReparacion->id ?> ">
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label labelNombre">Reparación</label>
                        <div class="col-sm-10">
                            <label for="fechaReparacion" type="date"
                                   class="col-sm-2 col-form-label labelVariable"><?= $informeDeReparacion->fechaReparacion->format("d/m/Y") ?></label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label labelNombre">Modificación</label>
                        <div class="col-sm-10">
                            <label for="fechaModifcacion" type="date"
                                   class="col-sm-2 col-form-label labelVariable"><?= $informeDeReparacion->fechaModificacion->format("d/m/Y") ?></label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="detalle" class="col-sm-2 col-form-label labelNombre">Detalle</label>
                        <div class="col-sm-10">
                            <input name="detalle" class="form-control-plaintext labelVariable" id="detalle"
                                   value="<?php validar($informeDeReparacion->detalle , 'detalle'); ?>"">
                            <p class="error"><?php echo validation_show_error('detalle'); ?></p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="importe" class="col-sm-2 col-form-label labelNombre">Importe</label>
                        <div class="col-sm-10">
                            <input name="importe" class="form-control-plaintext labelVariable" id="importe"
                                   value="<?php
                                            validar($informeDeReparacion->importe , 'importe');
                                          ?>"
                                    ">

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
                    <input name="idSalidaDeTrabajo"  type="hidden" value="<?=$salidaDeTrabajo->id?> ">
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label labelNombre">Salida</label>
                        <div class="col-sm-10">
                            <label for="fechaSalida" type="date"
                                   class="col-sm-2 col-form-label labelVariable"><?= $salidaDeTrabajo->fechaSalida->format("d/m/Y") ?></label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label labelNombre">Modificación</label>
                        <div class="col-sm-10">
                            <label for="fechaModifcacion" type="date"
                                   class="col-sm-2 col-form-label labelVariable"><?= $salidaDeTrabajo->fechaModificacion->format("d/m/Y") ?></label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="condicion" class="col-sm-2 col-form-label labelNombre">Condición</label>
                        <div class="col-sm-10">
                            <input name="condicion" class="form-control-plaintext labelVariable" id="condicion"
                                   value="<?php validar($salidaDeTrabajo->condicion, 'condicion'); ?>"">
                            <p class="error"><?php echo validation_show_error('condicion'); ?></p>
                        </div>
                    </div>
                <?php endif; ?>
            </div>

            <div class="d-grid gap-2 d-flex justify-content-start">
                <button type="submit" class="btn btn-primary btn-block btnRegistrar">Modificar</button>
            </div>
        </form>
    </div>
</div>
<?= $this->endSection('contenido') ?>
