<div class="form-row">
    <label for="fecha_adquisicion" class="flex-row-reverse col-sm-3 col-form-label d-flex">Fecha Adquisicion</label>
    <x-adminlte-input-date name="fecha_adquisicion" :config="$config" placeholder="Fecha Adquisicion"
        id="fecha_adquisicion" fgroup-class="col-sm-5">
        <x-slot name="appendSlot">
            <div class="input-group-text bg-gradient-primary">
                <i class="fas fa-calendar-alt"></i>
            </div>
        </x-slot>
    </x-adminlte-input-date>
</div>
