<? php ?>
<div class="sidebar">
    <nav>
        <form action="<?php echo base_url('/buscar') ?>" method="post">
            <h4 class="tituloBuscador">BUSCAR POR</h4>
            <input class="inputBuscarPor" name="q" type="text" placeholder="Ingrese Apellido">
            <input type="hidden" name="limit" value="10">
            <input type="hidden" name="offset" value="0">

            <hr/>

            <h4 class="tituloFiltros">FILTROS</h4>
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

            <div class="row justify-content-center">
                <div class="col-lg-3 col-sm-6 divFecha">
                    <label for="startDate">Desde</label>
                    <input id="startDate" class="inputFecha " type="date" />
                </div>
                <div class="col-lg-3 col-sm-6 divFecha">
                    <label for="endDate">Hasta</label>
                    <input id="endDate" class="inputFecha" type="date" />
                </div>
            </div>

            <hr/>

            <div class="d-grid gap-2 d-flex justify-content-start">
                <button type="submit" class="btn btn-primary btn-block buscarBtn">Buscar</button>
            </div>


        </form>
    </nav>
</div>

<script type="text/javascript">
    let startDate = document.getElementById('startDate')
    let endDate = document.getElementById('endDate')

    startDate.addEventListener('change',(e)=>{
        let startDateVal = e.target.value
        document.getElementById('startDateSelected').innerText = startDateVal
    })

    endDate.addEventListener('change',(e)=>{
        let endDateVal = e.target.value
        document.getElementById('endDateSelected').innerText = endDateVal
    })

</script>


