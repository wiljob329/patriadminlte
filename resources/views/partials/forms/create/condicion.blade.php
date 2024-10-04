<div class="form-row">
    <label for="condicion" class="flex-row-reverse col-sm-3 col-form-label d-flex">Condición</label>
    <x-adminlte-select name="condicion" fgroup-class="col-sm-8 required" id="condicion">
        <option value='' hidden>Seleccionar</option>
        {{ old('condicion') }}
        @foreach ($condiciones as $condicion)
            <option value="{{ $condicion->id }}">
                {{ $condicion->condicion }}</option>
        @endforeach
    </x-adminlte-select>
</div>
