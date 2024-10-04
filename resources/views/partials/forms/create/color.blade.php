<div class="form-row">
    <label for="color" class="flex-row-reverse col-sm-3 col-form-label d-flex">Color</label>
    <x-adminlte-select type="text" name="color" fgroup-class="col-sm-8" placeholder="Color" id="color"
        enable-old-support>
        <!-- <option value='' selected disabled hidden>Seleccionar</option> -->
        <option value='' hidden>Seleccionar</option>
        @foreach ($colores as $color)
            <option value="{{ $color->id }}">{{ $color->color }}</option>
        @endforeach
    </x-adminlte-select>
</div>
