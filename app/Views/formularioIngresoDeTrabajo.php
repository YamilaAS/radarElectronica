<form action="<?php echo base_url('/guardar') ?>" method="post">
  <div class="form-group row">
    <label for="aparato" class="col-sm-2 col-form-label">Aparato</label>
    <div class="col-sm-10">
      <input name="aparato" class="form-control" id="aparato" placeholder="Aparato">
    </div>
  </div>
  <div class="form-group row">
    <label for="marca" class="col-sm-2 col-form-label">Marca</label>
    <div class="col-sm-10">
      <input name="marca" class="form-control" id="marca" placeholder="Marca">
    </div>
  </div>
    <div class="form-group row">
        <label for="modelo" class="col-sm-2 col-form-label">Modelo</label>
        <div class="col-sm-10">
            <input name="modelo" class="form-control" id="modelo" placeholder="Modelo">
        </div>
    </div>
    <div class="form-group row">
        <label for="accesorios" class="col-sm-2 col-form-label">Accesorios</label>
        <div class="col-sm-10">
            <input name="accesorios" class="form-control" id="accesorios" placeholder="Accesorios">
        </div>
    </div>
    <div class="form-group row">
        <label for="titular" class="col-sm-2 col-form-label">Titular</label>
        <div class="col-sm-10">
            <input name="titular" class="form-control" id="titular" placeholder="Nombre del titular">
        </div>
    </div>
    <div class="form-group row">
        <label for="domicilio" class="col-sm-2 col-form-label">Domicilio</label>
        <div class="col-sm-10">
            <input name="domicilio" class="form-control" id="domicilio" placeholder="Domicilio">
        </div>
    </div>
    <div class="form-group row">
        <label for="telefono" class="col-sm-2 col-form-label">Teléfono</label>
        <div class="col-sm-10">
            <input name="telefono" class="form-control" id="telefono" placeholder="Teléfono">
        </div>
    </div>
    <div class="form-group row">
        <label for="sintoma" class="col-sm-2 col-form-label">Síntoma</label>
        <div class="col-sm-10">
            <input name="sintoma" class="form-control" id="sintoma" placeholder="Síntoma">
        </div>
    </div>
    <div class="form-group row">
        <label for="senia" class="col-sm-2 col-form-label">Seña</label>
        <div class="col-sm-10">
            <input name="senia" class="form-control" id="senia" placeholder="Seña">
        </div>
    </div>

    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <button type="submit" class="btn btn-primary btn-block ">Registrar</button>
    </div>
</form>