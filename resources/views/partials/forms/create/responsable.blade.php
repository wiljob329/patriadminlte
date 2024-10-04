<div class="form-row">
    <label for="responsable" class="flex-row-reverse col-sm-3 col-form-label d-flex">Responsable</label>
    <x-adminlte-input type="text" name="responsable" fgroup-class="col-sm-8" placeholder="Responsable del Activo"
        id="responsable" enable-old-support>
        <x-slot name="prependSlot">
            <a class="input-group-text text-primary" href="#" data-toggle="modal" data-target="#responsableModal"
                data-name-modal="resModal" id="showModal">
                <i class="fas fa-search"></i>
            </a>
        </x-slot>
    </x-adminlte-input>
</div>
