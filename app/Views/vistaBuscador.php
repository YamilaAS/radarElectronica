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
                <th>REPARACIÓN</th>
                <th>IMPORTE</th>
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
                <td></td>
                <td></td>
            </tr>

            <?php endforeach; ?>
            </tbody>
        </table>
        <?php endif; ?>
    </div>

</div>

<?= $this->endSection('contenido') ?>

<script type="text/javascript">
    new DataTable('#example', {
        select: true
    });
</script>
