<div class="form-row">
    <label for="adquisicion" class="flex-row-reverse col-sm-3 col-form-label d-flex">Forma Adquisición</label>
    <x-adminlte-select type="text" name="condicion" fgroup-class="col-sm-8" id="adquisicion" enable-old-support>
        <option value='' hidden>Seleccionar</option>
        @foreach ($adquisiciones as $adquisicion)
            <option value="{{ $adquisicion->id }}">{{ $adquisicion->adquisicion }}</option>
        @endforeach
    </x-adminlte-select>
</div>
