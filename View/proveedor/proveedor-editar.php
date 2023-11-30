<h1 class="page-header">
    Nuevo Registro
</h1>

<ol class="breadcrumb">
    <li><a href="?c=proveedor">Proveedores</a></li>
    <li class="active">Nuevo Registro</li>
</ol>

<form id="frm-proveedor" action="?c=proveedor&a=Guardar" method="post" enctype="multipart/form-data">

    <div class="form-group">
        <label>Nit</label>
        <input type="text" name="nit" value="<?php echo isset($pvd->nit) ? $pvd->nit : ''; ?>" class="form-control" placeholder="Ingrese Nit Proveedor" data-validacion-tipo="requerido|nit" />
    </div>

    <div class="form-group">
        <label>Número de Cuenta</label>
        <input type="number" name="numero_cuenta" value="<?php echo isset($pvd->numero_cuenta) ? $pvd->numero_cuenta : ''; ?>" class="form-control" placeholder="Ingrese su número de cuenta" data-validacion-tipo="requerido|numero_cuenta" />
    </div>

    <div class="form-group">
        <label>Nombre</label>
        <input type="text" name="nombre" value="<?php echo isset($pvd->nombre) ? $pvd->nombre : ''; ?>" class="form-control" placeholder="Ingrese su nombre" data-validacion-tipo="requerido|nombre" />
    </div>

    <div class="form-group">
        <label>Apellido</label>
        <input type="text" name="Apellido" value="<?php echo isset($pvd->Apellido) ? $pvd->Apellido : ''; ?>" class="form-control" placeholder="Ingrese su apellido" data-validacion-tipo="requerido|Apellido" />
    </div>

    <div class="form-group">
        <label>Teléfono</label>
        <input type="number" name="telefono" value="<?php echo isset($pvd->telefono) ? $pvd->telefono : ''; ?>" class="form-control" placeholder="Ingrese su teléfono" data-validacion-tipo="requerido|telefono" />
    </div>

    <div class="form-group">
        <label>Correo</label>
        <input type="text" name="correo" value="<?php echo isset($pvd->correo) ? $pvd->correo : ''; ?>" class="form-control" placeholder="Ingrese su correo electrónico" data-validacion-tipo="requerido|email" />
    </div>

    <hr />

    <div class="text-right">
        <button type="submit" class="btn btn-success">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function () {
        $("#frm-proveedor").validate();
    });
</script>
