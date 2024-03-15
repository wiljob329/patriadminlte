<form {{ $attributes }}>
    @csrf

    @isset($editar)
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
            @php
                $config = [
                    'format' => 'DD/MM/YYYY',
                    'dayViewHeaderFormat' => 'MMM YYYY',
                    'daysOfWeekDisabled' => [0, 6],
                ];
            @endphp
            <x-adminlte-input-date name="fecha_adquisicion" label="Fecha Adquisicion" :config="$config"
                placeholder="Fecha Adquisicion" id="fecha_adquisicion" fgroup-class="col">
                <x-slot name="appendSlot">
                    <div class="input-group-text bg-gradient-primary">
                        <i class="fas fa-calendar-alt"></i>
                    </div>
                </x-slot>
            </x-adminlte-input-date>
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
            <x-adminlte-input-date name="inicio_garantia" label="Inicio Garantia" :config="$config"
                placeholder="Inicio Garantia" id="inicio_garantia" fgroup-class="col">
                <x-slot name="appendSlot">
                    <div class="input-group-text bg-gradient-primary">
                        <i class="fas fa-calendar-alt"></i>
                    </div>
                </x-slot>
            </x-adminlte-input-date>
            <x-adminlte-input-date name="fin_garantia" label="Fin Garantia" :config="$config" placeholder="Fin Garantia"
                id="fin_garantia" fgroup-class="col">
                <x-slot name="appendSlot">
                    <div class="input-group-text bg-gradient-primary">
                        <i class="fas fa-calendar-alt"></i>
                    </div>
                </x-slot>
            </x-adminlte-input-date>
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
    @endisset

    @isset($show)
        <div class="form-row">
            <x-adminlte-input type="text" label="Codigo" name="codigo" fgroup-class="col" placeholder="codigo"
                id="codigoshow" />
            <x-adminlte-input type="text" label="Marca" name="marca" fgroup-class="col" placeholder="Marca"
                id="marcashow" />
            <x-adminlte-input type="text" label="Modelo" name="modelo" fgroup-class="col" placeholder="Modelo"
                id="modeloshow" />
            <x-adminlte-input type="text" label="Serial" name="serial" fgroup-class="col" placeholder="Serial"
                id="serialshow" />
        </div>
        <div class="form-row">
            <x-adminlte-input type="text" label="Descripcion" name="descripcion" fgroup-class="col"
                placeholder="Descripcion" id="descripcionshow" />
        </div>
        <div class="form-row">
            <x-adminlte-input type="text" label="Observaciones" name="observacion" fgroup-class="col"
                placeholder="Observaciones" id="observacionshow" />
        </div>
        <div class="form-row">
            <x-adminlte-input type="text" label="Condicion" name="condicion" fgroup-class="col"
                placeholder="Condicion" id="condicionshow" />
            <x-adminlte-input type="text" label="Adquisicion" name="adquisicion" fgroup-class="col"
                placeholder="Adquisicion" id="adquisicionshow" />
            <x-adminlte-input type="text" label="Fecha Adquisicion" name="fecha_adquisicion" fgroup-class="col"
                placeholder="Fecha" id="fecha_adquisicionshow" />
            <x-adminlte-input type="text" label="Moneda" name="moneda" fgroup-class="col" placeholder="Moneda"
                id="monedashow" />
        </div>
        <div class="form-row">
            <x-adminlte-input type="text" label="Proveedor" name="proveedor" fgroup-class="col"
                placeholder="Proveedor" id="proveedorshow" />
            <x-adminlte-input type="text" label="Nro Factura" name="nro_factura" fgroup-class="col"
                placeholder="Nro Factura" id="nro_facturashow" />
            <x-adminlte-input type="text" label="Costo" name="costo" fgroup-class="col" placeholder="Costo"
                id="costoshow" />
            <x-adminlte-input type="text" label="Nro Orden" name="nro_orden" fgroup-class="col"
                placeholder="Nro Orden" id="nro_ordenshow" />
        </div>

        <div class="form-row">
            <x-adminlte-input type="text" label="Inicio Garantia" name="inicio_garantia" fgroup-class="col"
                placeholder="Inicio Garantia" id="inicio_garantiashow" />
            <x-adminlte-input type="text" label="Fin Garantia" name="fin_garantia" fgroup-class="col"
                placeholder="Fin Garantia" id="fin_garantiashow" />
            <x-adminlte-input type="text" label="Categoria" name="categoriaesp" fgroup-class="col"
                placeholder="Categoria" id="categoriaespshow" />
            <x-adminlte-input type="text" label="Asignado" name="asignado" fgroup-class="col" placeholder="Asignado"
                id="asignadoshow" />
        </div>
        <div class="form-row">
            <x-adminlte-input type="text" label="Estado" name="estado" fgroup-class="col-4" placeholder="Estado"
                id="estadoshow" />
            <x-adminlte-input type="text" label="Color" name="color_id" fgroup-class="col-4" placeholder="Color"
                id="colorshow" />
            <x-adminlte-input type="text" label="Tipo" name="tipo_id" fgroup-class="col-4" placeholder="Tipo"
                id="tiposhow" />
        </div>
    @endisset


</form>
