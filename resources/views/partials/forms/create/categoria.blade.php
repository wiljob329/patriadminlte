<div class="form-row">
    <label for="categoriaesp" class="flex-row-reverse col-sm-3 col-form-label d-flex">Categoria
        Esp.</label>
    <x-adminlte-input type="text" name="categoriaesp" fgroup-class="col-sm-8" placeholder="Categoria Especial"
        id="categoriaesp" enable-old-support>
        <x-slot name="prependSlot">
            <a class="input-group-text text-primary" href="#" data-toggle="modal" data-target="#categoriaModal"
                data-name-modal="catModal" id="showModal">
                <i class="fas fa-search"></i>
            </a>
        </x-slot>
    </x-adminlte-input>
</div>
