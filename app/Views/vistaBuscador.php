<?= $this->extend('templates/main.php'); ?>

<?= $this->section('title') ?>Ingreso de Trabajo<?= $this->endSection('title') ?>

<?= $this->section('contenido') ?>


<div class="contenedorInformeDeReparacion">

    <div class="sidebarBuscador">
        <?= $this->include('templates/sidebarBuscador') ?>
    </div>

    <?php var_dump($ordenes);?>
</div>

<?= $this->endSection('contenido') ?>
