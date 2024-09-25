<div class="form-group row">
    <label for="marca" class="flex-row-reverse col-sm-3 col-form-label d-flex">Marca</label>
    <x-adminlte-input type="text" name="marca" fgroup-class="col-sm-8" placeholder="Marca" id="marca">
        <x-slot name="prependSlot">
            <a class="input-group-text text-primary" href="#" data-toggle="modal" data-target="#marcaModal"
                data-name-modal="marModal" id="showModal">
                <i class="fas fa-search"></i>
            </a>
        </x-slot>
    </x-adminlte-input>
</div>
