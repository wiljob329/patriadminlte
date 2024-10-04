<div class="form-row">
    <label for="estado" class="flex-row-reverse col-sm-3 col-form-label d-flex">Estado</label>
    <x-adminlte-select name="estado" fgroup-class="col-sm-8 required" id="estado" enable-old-support>
        <option value='' hidden>Seleccionar</option>
        @foreach ($estados as $estado)
            <option value="{{ $estado->id }}">{{ $estado->estado }}</option>
        @endforeach
    </x-adminlte-select>
</div>
