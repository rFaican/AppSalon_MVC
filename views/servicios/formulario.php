<div class="campo">
    <label for="nombre">Nombre</label>
    <input type="text"
        id="nombre"
        name="nombre"
        placeholder="Nombre Servicio"
        value="<?php echo $servicio->nombre; ?>"
    >
</div>
<div class="campo">
    <label for="precio">Precio</label>
    <input type="number"
        step = 0.01
        id="precio"
        name="precio"
        placeholder="Precio"
        value="<?php echo $servicio->precio; ?>"
    >
</div>