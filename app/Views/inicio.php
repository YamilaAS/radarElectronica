<?= $this->extend('templates/main.php'); ?>

<?= $this->section('title') ?>Inicio<?= $this->endSection('title') ?>

<?= $this->section('contenido') ?>

<div class="inicio">
    <div class="menu">
        <h1>Menú</h1>
        <ul class="items">
            <li><a href="<?php echo base_url('/ingresoDeTrabajo') ?>">Ingreso de trabajo</a></li>
            <li><a href="#">Lista de Precios</a></li>
            <li><a href="#">Buscar</a></li>
        </ul>
    </div>
</div>


<?= $this->endSection('contenido') ?>




