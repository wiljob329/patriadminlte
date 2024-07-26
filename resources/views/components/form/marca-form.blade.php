<form {{ $attributes }}>
    @csrf

    <div class="form-row">
        <x-adminlte-input type="text" label="Marca" name="marca" fgroup-class="col" placeholder="marca" id="marca_nueva"
            required />
    </div>
</form>
