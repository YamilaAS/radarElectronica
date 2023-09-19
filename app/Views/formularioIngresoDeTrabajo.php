<?php validation_list_errors(); ?>
<form action="<?php echo base_url('/guardar') ?>" method="post">
    <div class="form-group row">
        <label for="aparato" class="col-sm-2 col-form-label">Aparato</label>
        <div class="col-sm-10">
            <input name="aparato" class="form-control" id="aparato" value="<?php echo set_value('aparato') ?>">
        </div>
        <p class="error"><?php echo validation_show_error('aparato'); ?></p>
    </div>
    <div class="form-group row">
        <label for="marca" class="col-sm-2 col-form-label">Marca</label>
        <div class="col-sm-10">
            <input name="marca" class="form-control" id="marca" value="<?php echo set_value('marca') ?>">
        </div>
        <p class="error"><?php echo validation_show_error('marca'); ?></p>
    </div>
    <div class="form-group row">
        <label for="modelo" class="col-sm-2 col-form-label">Modelo</label>
        <div class="col-sm-10">
            <input name="modelo" class="form-control" id="modelo" value="<?php echo set_value('modelo') ?>">
        </div>
        <p class="error"><?php echo validation_show_error('modelo'); ?></p>
    </div>
    <div class="form-group row">
        <label for="accesorios" class="col-sm-2 col-form-label">Accesorios</label>
        <div class="col-sm-10">
            <input name="accesorios" class="form-control" id="accesorios" value="<?php echo set_value('accesorios') ?>">
        </div>
        <p class="error"><?php echo validation_show_error('accesorios'); ?></p>
    </div>
    <div class="form-group row">
        <label for="titular" class="col-sm-2 col-form-label">Titular</label>
        <div class="col-sm-10">
            <input name="titular" class="form-control" id="titular" value="<?php echo set_value('titular') ?>">
        </div>
        <p class="error"><?php echo validation_show_error('titular'); ?></p>
    </div>
    <div class="form-group row">
        <label for="domicilio" class="col-sm-2 col-form-label">Domicilio</label>
        <div class="col-sm-10">
            <input name="domicilio" class="form-control" id="domicilio" value="<?php echo set_value('domicilio') ?>">
        </div>
        <p class="error"><?php echo validation_show_error('domicilio'); ?></p>
    </div>
    <div class="form-group row">
        <label for="telefono" class="col-sm-2 col-form-label">Teléfono</label>
        <div class="col-sm-10">
            <input name="telefono" class="form-control" id="telefono" value="<?php echo set_value('telefono') ?>">
        </div>
        <p class="error"><?php echo validation_show_error('telefono'); ?></p>
    </div>
    <div class="form-group row">
        <label for="sintoma" class="col-sm-2 col-form-label">Síntoma</label>
        <div class="col-sm-10">
            <input name="sintoma" class="form-control" id="sintoma" value="<?php echo set_value('sintoma') ?>">
        </div>
        <p class="error"><?php echo validation_show_error('sintoma'); ?></p>
    </div>
    <div class="form-group row">
        <label for="senia" class="col-sm-2 col-form-label">Seña</label>
        <div class="col-sm-10">
            <input name="senia" class="form-control" id="senia" value="<?php echo set_value('senia') ?>">
        </div>
        <p class="error"><?php echo validation_show_error('senia'); ?></p>
    </div>

    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <button type="submit" class="btn btn-primary btn-block ">Registrar</button>
    </div>
</form>