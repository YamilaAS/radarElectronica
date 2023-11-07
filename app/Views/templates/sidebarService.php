<div class="sidebarService">
    <nav>
        <h4 class="tituloService">MENÚ DE SERVICE</h4>
        <?php if (isset($informeDeReparacion->fechaReparacion) && $informeDeReparacion->fechaReparacion != ''): ?>
            <a class="itmesService disabled">Informe de Reparación</a>
        <?php else: ?>
            <a class="itmesService" href="<?= base_url('ordenDeReparacion/'.$ordenDeReparacion->id.'/informeDeReparacion/'  )?>">Informe de Reparación</a>
        <?php endif; ?>

        <?php if (isset($salidaDeTrabajo->fechaSalida) && $salidaDeTrabajo->fechaSalida != ''): ?>
            <a class="itmesService disabled">Salida de Trabajo</a>
        <?php else: ?>
            <a class="itmesService" href="<?= base_url('ordenDeReparacion/'.$ordenDeReparacion->id.'/salidaDeTrabajo/')?>">Salida de Trabajo</a>
        <?php endif; ?>

        <a class="itmesService" href="<?= $linkContrato ?>" target="_blank">Imprimir Contrato</a>
        <a class="itmesService" href="#">Modificar</a>
        <a class="itmesService" href="#">Archivar</a>
        <a class="itmesService" href="<?= base_url('ordenDeReparacion/'.$ordenDeReparacion->id.'/borrar/'  )?>">Borrar</a>

    </nav>
</div>

