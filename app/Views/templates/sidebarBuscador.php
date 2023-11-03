<? php ?>
<div class="sidebar">
    <nav>
        <form action="<?php echo base_url('/procesarBusquedaEspecializada') ?>" method="get">
            <h4 class="tituloBuscador">BUSCAR POR</h4>
            <input class="inputBuscarPor" name="q" type="text" placeholder="Ingrese Apellido">
            <input type="hidden" name="limit" value="10">
            <input type="hidden" name="offset" value="0">

            <hr/>

            <h4 class="tituloBuscador">FILTROS</h4>
            <h5 class="tituloCheck">APARATO</h5>
            <div class="form-check check">
                <input class="form-check-input" type="checkbox" id="remoto" value="remoto">
                <label class="form-check-label">Remoto</label>
            </div>
            <div class="form-check check">
                <input class="form-check-input " type="checkbox" id="televisor" value="televisor">
                <label class="form-check-label ">Televisor</label>
            </div>
            <div class="form-check check">
                <input class="form-check-input" type="checkbox" id="electrificador" value="electrificador">
                <label class="form-check-label">Electrificador</label>
            </div>

            <h5 class="tituloCheck">ESTADO</h5>
            <div class="form-check check">
                <input class="form-check-input" type="checkbox" id="sinReparar" value="sinReparar">
                <label class="form-check-label" for="sinReparar">Sin Reparar</label>
            </div>
            <div class="form-check check">
                <input class="form-check-input" type="checkbox" id="reparado" value="reparado">
                <label class="form-check-label" for="reparado">Reparado</label>
            </div>

            <h5 class="tituloCheck">FECHA DE INGRESO</h5>
            <div id="date-picker-example" class="md-form md-outline input-with-post-icon datepicker inputFecha" inline="true">
                <input placeholder="Desde" type="text" id="example" class="form-control">
                <i class="fas fa-calendar input-prefix"></i>
            </div>
            <div id="date-picker-example" class="md-form md-outline input-with-post-icon datepicker inputFecha" inline="true">
                <input placeholder="Hasta" type="text" id="example" class="form-control">
                <i class="fas fa-calendar input-prefix"></i>
            </div>

            <hr/>

            <div class="d-grid gap-2 d-flex justify-content-start">
                <button type="submit" class="btn btn-primary btn-block buscarBtn">Buscar</button>
            </div>
        </form>
    </nav>
</div>

<script>
    // Data Picker Initialization
    $('.datepicker').datepicker({
        inline: true
    });
</script>
