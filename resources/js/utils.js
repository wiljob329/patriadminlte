export function fillOptionSelect(select, afterUrl) {
    let beforeUrl = "/api";
    let url = beforeUrl + afterUrl;
    $(select).find("option").remove().end();
    select.append("<option>Seleccionar</option>");
    if (afterUrl === "/adquisiciones") {
        $.get(url, function (data) {
            data.map((item) => {
                select.append(
                    "<option value=" +
                        item.id +
                        ">" +
                        item.adquisicion +
                        "</option>",
                );
            });
        });
    }
    if (afterUrl === "/condicion") {
        $.get(url, function (data) {
            data.map((item) => {
                select.append(
                    "<option value=" +
                        item.id +
                        ">" +
                        item.condicion +
                        "</option>",
                );
            });
        });
    }
    if (afterUrl === "/color") {
        $.get(url, function (data) {
            data.map((item) => {
                select.append(
                    "<option value=" + item.id + ">" + item.color + "</option>",
                );
            });
        });
    }
    if (afterUrl === "/estado") {
        $.get(url, function (data) {
            data.map((item) => {
                select.append(
                    "<option value=" +
                        item.id +
                        ">" +
                        item.estado +
                        "</option>",
                );
            });
        });
    }
    if (afterUrl === "/tipos") {
        $.get(url, function (data) {
            data.map((item) => {
                select.append(
                    "<option value=" + item.id + ">" + item.tipo + "</option>",
                );
            });
        });
    }
    if (afterUrl === "/monedas") {
        $.get(url, function (data) {
            data.map((item) => {
                select.append(
                    "<option value=" +
                        item.id +
                        ">" +
                        item.moneda +
                        "</option>",
                );
            });
        });
    }
}

//funcion para chequear y colocar datos en el formulario
export function fillForm(data, condicion, visual, uris) {
    $("#codigo" + (visual === "show" ? visual : ""))
        .val(data.codigo)
        .attr("disabled", condicion);
    $("#modelo" + (visual === "show" ? visual : ""))
        .val(data.modelo)
        .attr("disabled", condicion);
    $("#serial" + (visual === "show" ? visual : ""))
        .val(data.serial)
        .attr("disabled", condicion);
    $("#descripcion" + (visual === "show" ? visual : ""))
        .val(data.descripcion)
        .attr("disabled", condicion);
    $("#observacion" + (visual === "show" ? visual : ""))
        .val(data.observacion)
        .attr("disabled", condicion);
    if (condicion) {
        $("#adquisicion" + (visual === "show" ? visual : ""))
            .val(data.actadquisicione.descripcion)
            .attr("disabled", condicion);
        $("#tipo" + (visual === "show" ? visual : ""))
            .val(data.act_tipo.nombre)
            .attr("disabled", condicion);
        $("#condicion" + (visual === "show" ? visual : ""))
            .val(data.act_condicion.nombre)
            .attr("disabled", condicion);
        $("#color" + (visual === "show" ? visual : ""))
            .val(data.act_color.descripcion)
            .attr("disabled", condicion);
        $("#marca" + (visual === "show" ? visual : ""))
            .val(data.act_marca.nombre)
            .attr("disabled", condicion);
    } else {
        fillSelect(
            $("#adquisicion" + (visual === "show" ? visual : "")),
            uris.adquisicionurl,
        );
        fillSelect(
            $("#color" + (visual === "show" ? visual : "")),
            uris.colorurl,
        );

        fillSelect2(
            $("#marca" + (visual === "show" ? visual : "")),
            uris.marcaurl,
        );
        fillSelect2(
            $("#tipo" + (visual === "show" ? visual : "")),
            uris.tipourl,
        );
        fillSelect2(
            $("#condicion" + (visual === "show" ? visual : "")),
            uris.condicionurl,
        );
    }
    $("#fecha_adquisicion" + (visual === "show" ? visual : ""))
        .val(data.fecha_adquisicion)
        .attr("disabled", condicion);
    $("#moneda" + (visual === "show" ? visual : ""))
        .val(data.moneda)
        .attr("disabled", condicion);
    $("#proveedor" + (visual === "show" ? visual : ""))
        .val(data.proveedor)
        .attr("disabled", condicion);
    $("#nro_factura" + (visual === "show" ? visual : ""))
        .val(data.nro_factura)
        .attr("disabled", condicion);
    $("#costo" + (visual === "show" ? visual : ""))
        .val(data.costo)
        .attr("disabled", condicion);
    $("#nro_orden" + (visual === "show" ? visual : ""))
        .val(data.nro_orden)
        .attr("disabled", condicion);
    $("#inicio_garantia" + (visual === "show" ? visual : ""))
        .val(data.inicio_garantia)
        .attr("disabled", condicion);
    $("#fin_garantia" + (visual === "show" ? visual : ""))
        .val(data.fin_garantia)
        .attr("disabled", condicion);
    $("#categoriaesp" + (visual === "show" ? visual : ""))
        .val(data.categoriaesp_id)
        .attr("disabled", condicion);
    $("#asignado" + (visual === "show" ? visual : ""))
        .val(data.asignado)
        .attr("disabled", condicion);
    $("#estado" + (visual === "show" ? visual : ""))
        .val(data.estado)
        .attr("disabled", condicion);
}

// funcion para revisar si el elemento existe o no en el viewport
export function isInViewport(elem) {
    if (elem) {
        var distance = elem.getBoundingClientRect();
        return (
            distance.top <
                (window.innerHeight || document.documentElement.clientHeight) &&
            distance.bottom > 0
        );
    }
}
