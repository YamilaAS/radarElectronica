<?= $this->extend('templates/main.php'); ?>

<?= $this->section('title') ?>Ingreso de Trabajo<?= $this->endSection('title') ?>

<?= $this->section('contenido') ?>

<div class="contenedorDetalleDeOrdenDeTrabajo">

    <div class="detalleDeOrdenDeReparacion">
        <div class="tituloDetalleDeOrden">
            <h1><?=$titulo?></h1>
        </div>
    </div>
<?= $this->endSection('contenido') ?>