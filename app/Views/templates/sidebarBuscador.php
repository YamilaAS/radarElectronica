<? php ?>
<div class="sidebar">
    <nav>
        <form action="<?php echo base_url('/buscar') ?>" method="post">
            <h4 class="tituloService">BUSCAR POR</h4>
            <div>
                <input name="orden" class="form-control " id="orden" value="" placeholder="Ingrese Número de Orden">
            </div>
            <div>
                <input name="cliente" class="form-control" id="cliente" value=""
                       placeholder="Ingrese Apellido del Cliente">
            </div>

            <hr/>

            <h4 class="tituloService">FILTROS</h4>
            <h5>APARATO</h5>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="remoto" value="remoto">
                <label class="form-check-label">Remoto</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="televisor" value="televisor">
                <label class="form-check-label">Televisor</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="electrificador" value="electrificador">
                <label class="form-check-label">Electrificador</label>
            </div>

            <h5>ESTADO</h5>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="sinReparar" value="sinReparar">
                <label class="form-check-label" for="sinReparar">Sin Reparar</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="reparado" value="reparado">
                <label class="form-check-label" for="reparado">Reparado</label>
            </div>

            <h5>FECHA DE INGRESO</h5>
            <div id="date-picker-example" class="md-form md-outline input-with-post-icon datepicker" inline="true">
                <input placeholder="Desde" type="text" id="example" class="form-control">
                <i class="fas fa-calendar input-prefix"></i>
            </div>
            <div id="date-picker-example" class="md-form md-outline input-with-post-icon datepicker" inline="true">
                <input placeholder="Hasta" type="text" id="example" class="form-control">
                <i class="fas fa-calendar input-prefix"></i>
            </div>

            <hr/>

            <div class="d-grid gap-2 d-flex justify-content-start">
                <button type="submit" class="btn btn-primary btn-block btnRegistrar">Buscar</button>
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
