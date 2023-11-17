<?php validation_list_errors(); ?>

<?= $this->extend('templates/main.php'); ?>

<?= $this->section('title') ?>Ingreso de Aparato<?= $this->endSection('title') ?>

<?= $this->section('contenido') ?>
    <div class="formulario">
        <?php
        if (session()->has('errorPrincipal')) {
            echo "<div class='alert alert-danger '>" . session()->getFlashdata('errorPrincipal') . "</div>";
        }
        ?>
        <div class="titulo">
            <h1>APARATOS</h1>
        </div>
    <div class="GuardarAparato">
        <form action="<?php echo base_url('/ingresoDeAparato') ?>" method="post">
            <input name="nombre" class="inputAgregar" id="nombre" placeholder="Agregar Aparato"
                   value="<?php echo set_value('nombre') ?>">
            <p class="error"><?php echo validation_show_error('nombre'); ?></p>
            <button class="btnGuardar">+</button>
        </form>
    </div>
    </div>
    <div class="formulario">
        <table class="table table-hover" id="tabla">
            <thead>
            <tr>
                <th>LISTADO DE APARATOS</th>
            </tr>
            </thead>
            <tbody>
                <?php foreach ($aparatos as $aparato) : ?>
                    <tr class="item">
                        <td><?= $aparato->aparato ?></td>
                        <td>
                            <form method="post" action="<?= base_url('aparato/'.$aparato->aparato .'/borrar'  )?>" >
                            <button type="submit" class="btnBorrar">
                                <img  class="imgBorrar" src="/img/eliminarBlanco.png"></img>
                            </button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>


    <?= $this->endSection('contenido') ?>