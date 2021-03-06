<h2 class="page-header">Empleados</h2>

<form method="post" action="?c=home&a=guardar">

<div class="form-group">
    <input type="hidden" name="id" value="<?php echo $nuevo ? '' : $model->id; ?>" />
    <label>Nombre</label>
    <input type="text" name="nombre" class="form-control" value="<?php echo $nuevo ? '' : $model->nombre; ?>" />
</div>

<div class="form-group">
    <label>Apellido</label>
    <input type="text" name="apellido" class="form-control" value="<?php echo $nuevo ? '' : $model->apellido; ?>" />
</div>

<div class="form-group">
    <label>Fecha</label>
    <input type="text" name="fecha_nacimiento" class="form-control" value="<?php echo $nuevo ? '' : $model->fecha_nacimiento; ?>" />
</div>

<div class="form-group">
    <label>Profesion</label>
    <select class="form-control" name="profesion_id">
        <?php foreach($profesiones as $p): ?>
        <?php
            $profesion_id = null;
            if(!$nuevo) {
                $profesion_id = $model->profesion_id;
            }
        ?>
        <option <?php echo $profesion_id == $p->id ? 'selected' : ''; ?> value="<?php echo $p->id; ?> "><?php echo $p->nombre; ?></option>
        <?php endforeach; ?>
    </select>
</div>

<button type="submit" class="btn btn-primary">
    Guardar
</button>
</form>