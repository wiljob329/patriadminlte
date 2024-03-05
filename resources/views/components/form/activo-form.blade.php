<form {{ $attributes }}>
    @csrf
    <div class="form-row">
        <x-adminlte-input type="text" label="Codigo" name="codigo" fgroup-class="col" placeholder="codigo"
            id="codigo" />
        <x-adminlte-input type="text" label="Marca" name="marca" fgroup-class="col" placeholder="Marca"
            id="marca" />
        <x-adminlte-input type="text" label="Modelo" name="modelo" fgroup-class="col" placeholder="Modelo"
            id="modelo" />
        <x-adminlte-input type="text" label="Serial" name="serial" fgroup-class="col" placeholder="Serial"
            id="serial" />
    </div>
    <div class="form-row">
        <x-adminlte-input type="text" label="Descripcion" name="descripcion" fgroup-class="col"
            placeholder="Descripcion" id="descripcion" />
    </div>
    <div class="form-row">
        <x-adminlte-input type="text" label="Observaciones" name="observacion" fgroup-class="col"
            placeholder="Observaciones" id="observacion" />
    </div>
    <div class="form-row">
        <x-adminlte-input type="text" label="Condicion" name="condicion" fgroup-class="col" placeholder="Condicion"
            id="condicion" />
        <x-adminlte-input type="text" label="Adquisicion" name="adquisicion" fgroup-class="col"
            placeholder="Adquisicion" id="adquisicion" />
        <x-adminlte-input type="text" label="Fecha Adquisicion" name="fecha_adquisicion" fgroup-class="col"
            placeholder="Fecha" id="fecha_adquisicion" />
        <x-adminlte-input type="text" label="Moneda" name="moneda" fgroup-class="col" placeholder="Moneda"
            id="moneda" />
    </div>
    <div class="form-row">
        <x-adminlte-input type="text" label="Proveedor" name="proveedor" fgroup-class="col" placeholder="Proveedor"
            id="proveedor" />
        <x-adminlte-input type="text" label="Nro Factura" name="nro_factura" fgroup-class="col"
            placeholder="Nro Factura" id="nro_factura" />
        <x-adminlte-input type="text" label="Costo" name="costo" fgroup-class="col" placeholder="Costo"
            id="costo" />
        <x-adminlte-input type="text" label="Nro Orden" name="nro_orden" fgroup-class="col" placeholder="Nro Orden"
            id="nro_orden" />
    </div>

    <div class="form-row">
        <x-adminlte-input type="text" label="Inicio Garantia" name="inicio_garantia" fgroup-class="col"
            placeholder="Inicio Garantia" id="inicio_garantia" />
        <x-adminlte-input type="text" label="Fin Garantia" name="fin_garantia" fgroup-class="col"
            placeholder="Fin Garantia" id="fin_garantia" />
        <x-adminlte-input type="text" label="Categoria" name="categoriaesp" fgroup-class="col"
            placeholder="Categoria" id="categoriaesp" />
        <x-adminlte-input type="text" label="Asignado" name="asignado" fgroup-class="col" placeholder="Asignado"
            id="asignado" />
    </div>
    <div class="form-row">
        <x-adminlte-input type="text" label="Estado" name="estado" fgroup-class="col-4" placeholder="Estado"
            id="estado" />
        <x-adminlte-input type="text" label="Color" name="color_id" fgroup-class="col-4" placeholder="Color"
            id="color" />
        <x-adminlte-input type="text" label="Tipo" name="tipo_id" fgroup-class="col-4" placeholder="Tipo"
            id="tipo" />
    </div>
</form>
