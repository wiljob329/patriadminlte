<div class="form-row">
    <label for="fin_garantia" class="flex-row-reverse col-sm-3 col-form-label d-flex">Fin Garantia</label>
    <x-adminlte-input-date name="fin_garantia" :config="$config" placeholder="Fin Garantia" id="fin_garantia"
        fgroup-class="col-sm-5">
        <x-slot name="appendSlot">
            <div class="input-group-text bg-gradient-primary">
                <i class="fas fa-calendar-alt"></i>
            </div>
        </x-slot>
    </x-adminlte-input-date>
</div>
