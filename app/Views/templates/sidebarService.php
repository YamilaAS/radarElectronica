<div class="sidebarService">
    <nav>
        <h4 class="tituloService">MENÚ DE SERVICE</h4>
        <a class="itmesService" href="<?= base_url('ordenDeReparacion/'.$ordenDeReparacion->id.'/informeDeReparacion/'  )?>">Informe de Reparación</a>
        <a class="itmesService" href="<?= base_url('ordenDeReparacion/'.$ordenDeReparacion->id.'/salidaDeTrabajo/')?>">Salida de Trabajo</a>
        <a class="itmesService" href="<?= $linkContrato ?>" target="_blank">Imprimir Contrato</a>
        <a class="itmesService" href="#">Modificar</a>
        <a class="itmesService" href="#">Archivar</a>
        <a class="itmesService" href="#">Borrar</a>

    </nav>
</div>

