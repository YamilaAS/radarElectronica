<?= $this->extend('templates/main.php'); ?>

<?= $this->section('title') ?>Ingreso de Trabajo<?= $this->endSection('title') ?>

<?= $this->section('contenido') ?>


<div class="contenedorPrincipal">

    <div class="sidebarBuscador">
        <?= $this->include('templates/sidebarBuscador') ?>
    </div>
    <div class="listadoDeBusqueda">
        <?php if (isset($ordenes)  && $ordenes != null ): ?>
        <table class="table table-hover">
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
            <?php var_dump($orden)?>
            <tr class="item">
                <td ><?= $orden->id ?></td>
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
