<div class="form-row">
    <label for="ubicacion" class="flex-row-reverse col-sm-3 col-form-label d-flex">Ubicación</label>
    <x-adminlte-input type="text" name="ubicacion" fgroup-class="col-sm-8" placeholder="Ubicación" id="ubicacion"
        enable-old-support>
        <x-slot name="prependSlot">
            <a class="input-group-text text-primary" href="#" data-toggle="modal" data-target="#ubicacionModal"
                data-name-modal="ubiModal" id="showModal">
                <i class="fas fa-search"></i>
            </a>
        </x-slot>
    </x-adminlte-input>
</div>
