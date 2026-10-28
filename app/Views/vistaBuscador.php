<?= $this->extend('templates/main.php'); ?>

<?= $this->section('title') ?>Ingreso de Trabajo<?= $this->endSection('title') ?>

<?= $this->section('contenido') ?>


<div class="contenedorPrincipal">

    <div class="sidebarBuscador">
        <?= $this->include('templates/sidebarBuscador') ?>
    </div>

    <div class="listadoDeBusqueda">
        <?php if (isset($ordenes)  && $ordenes != null ): ?>
            <table class="table table-hover" id="tabla">
                <thead>
                    <tr>
                        <th>ORDEN</th>
                        <th>TITULAR</th>
                        <th>APARATO</th>
                        <th>MARCA</th>
                        <th>ACCESORIOS</th>
                        <th>INGRESO</th>
                        <th>IMPORTE</th>
                        <th>REPARACIÓN</th>
                        <th>SALIDA</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($ordenes as $orden) : ?>
                        <tr class="item" onClick=location.href="<?php echo base_url('/ordenDeReparacion/').$orden->ordenId; ?>";>
                            <td ><?= $orden->ordenId ?></td>
                            <td><?= $orden->apellido . ' ' . $orden->nombre ?></td>
                            <td><?= $orden->aparato ?></td>
                            <td><?= $orden->marca ?></td>
                            <td><?= $orden->accesorios ?></td>
                            <td><?= $orden->fechaIngreso->format("d/m/Y")  ?></td>
                            <td>$ <?= $orden->importe?></td>

                            <?php if (isset($orden->fechaReparacion)  && $orden->fechaReparacion != ''): ?>
                                <td><?= date('d/m/Y', strtotime($orden->fechaReparacion)) ?></td>
                            <?php endif; ?>

                            <?php if (isset($orden->fechaSalida)  && $orden->fechaSalida != ''): ?>
                                <td><?= date('d/m/Y', strtotime($orden->fechaSalida)) ?></td>
                            <?php endif; ?>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php endif; ?>

        <hr/>

        <div>
            <?php if (isset($cantidadOrdenes)  && $cantidadOrdenes == 0): ?>
                <p>No se encontraron resultados</p>
            <?php endif; ?>

            <?php if (isset($total)  && $total > 0 ): ?>
                <p>Se encontraron <?=$total?> resultados.</p>
            <?php endif; ?>

            <?php if (isset($paginaAnterior)  && $paginaAnterior != null ): ?>
                <a style="text-align: left" href="<?=$paginaAnterior?>">Página anterior</a>
            <?php endif; ?>

            <?php if (isset($paginaSiguiente)  && $paginaSiguiente != null ): ?>
                <a style="text-align: right" href="<?=$paginaSiguiente?>">Página siguiente</a>
            <?php endif; ?>
        </div>

    </div>

</div>

<?= $this->endSection('contenido') ?>


