<?= $this->extend('templates/main.php'); ?>

<?= $this->section('title') ?>Ingreso de Trabajo<?= $this->endSection('title') ?>

<?= $this->section('contenido') ?>

    <div class="contenedorDetalleDeOrdenDeTrabajo">

        <div class="sidebarService">
            <?= $this->include('templates/sidebarService') ?>
        </div>

        <div class="detalleDeOrdenDeReparacion">
            <div class="tituloDetalleDeOrden">
                <h1>Detalle de orden de trabajo</h1>
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
                    <label for="aparato"
                           class="col-sm-2 col-form-label labelVariable"><?= $ordenDeReparacion->aparato ?></label>
                </div>
            </div>
            <div class="form-group row">
                <label for="marca" class="col-sm-2 col-form-label labelNombre">Marca</label>
                <div class="col-sm-10">
                    <label for="marca"
                           class="col-sm-2 col-form-label labelVariable"><?= $ordenDeReparacion->marca ?></label>
                </div>
            </div>
            <div class="form-group row">
                <label for="modelo" class="col-sm-2 col-form-label labelNombre">Modelo</label>
                <div class="col-sm-10">
                    <label for="modelo"
                           class="col-sm-2 col-form-label labelVariable"><?= $ordenDeReparacion->modelo ?></label>
                </div>
            </div>
            <div class="form-group row">
                <label for="accesorios" class="col-sm-2 col-form-label labelNombre">Accesorios</label>
                <div class="col-sm-10">
                    <label for="accesorios"
                           class="col-sm-2 col-form-label labelVariable"><?= $ordenDeReparacion->accesorios ?></label>
                </div>
            </div>
            <div class="form-group row">
                <label for="titular" class="col-sm-2 col-form-label labelNombre">Titular</label>
                <div class="col-sm-10">
                    <label for="titular"
                           class="col-sm-2 col-form-label labelVariable"><?= $ordenDeReparacion->titular ?></label>
                </div>
            </div>
            <div class="form-group row">
                <label for="domicilio" class="col-sm-2 col-form-label labelNombre">Domicilio</label>
                <div class="col-sm-10">
                    <label for="domicilio"
                           class="col-sm-2 col-form-label labelVariable"><?= $ordenDeReparacion->domicilio ?></label>
                </div>
            </div>
            <div class="form-group row">
                <label for="telefono" class="col-sm-2 col-form-label labelNombre">Teléfono</label>
                <div class="col-sm-10">
                    <label for="telefono"
                           class="col-sm-2 col-form-label labelVariable"><?= $ordenDeReparacion->telefono ?></label>
                </div>
            </div>
            <div class="form-group row">
                <label for="sintoma" class="col-sm-2 col-form-label labelNombre">Síntoma</label>
                <div class="col-sm-10">
                    <label for="sintoma"
                           class="col-sm-2 col-form-label labelVariable"><?= $ordenDeReparacion->sintoma ?></label>
                </div>
            </div>
            <div class="form-group row">
                <label for="senia" class="col-sm-2 col-form-label labelNombre">Seña</label>
                <div class="col-sm-10">
                    <label for="senia"
                           class="col-sm-2 col-form-label labelVariable">$ <?= $ordenDeReparacion->senia ?></label>
                </div>
            </div>
            <!--
            <div class="d-grid gap-2 d-flex justify-content-start">
                <a type="submit" class="btn btn-primary btn-block btnImprimir" href="<?= $linkContrato ?>"
                   target="_blank">Imprimir Contrato</a>
            </div>
         -->
        </div>
    </div>
<?= $this->endSection('contenido') ?>